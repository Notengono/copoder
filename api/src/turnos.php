<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->group('', function (\Slim\App $grupo) {
    $grupo->get('/turnosProProf/{profesioalId}', function (Request $request, Response $response, array $args) {
        $sth = $this->db->prepare("SELECT * FROM turnos_view WHERE idProf = :profesioalId;");
        $sth->bindParam("profesioalId", $args['profesioalId']);
        $sth->execute();
        $todos = $sth->fetchAll();
        return $this->response->withJson($todos);
    });

    $grupo->get('/turnosProfFec/{profesioalId}/{fecha}', function (Request $request, Response $response, array $args) {
        $sth = $this->db->prepare("SELECT * FROM turnos_view WHERE idProf = :profesioalId AND DATE_FORMAT(fechaHoraTurno, '%Y-%m-%d') = :fecha ORDER BY fechaHoraTurno;");
        $sth->bindParam("profesioalId", $args['profesioalId']);
        $sth->bindParam("fecha", $args['fecha']);
        $sth->execute();
        $todos = $sth->fetchAll();
        return $this->response->withJson($todos);
    });

    $grupo->put('/turnoNuevo', function (Request $request, Response $response, array $args) {
        $input = $request->getParsedBody();
        // Busco la existencia de la persona y almaceno si no existe
        $sth = $this->db->prepare("SELECT * FROM personas WHERE dni = :documento;");
        $sth->bindParam(":documento", $input['documento']);
        $sth->execute();
        $paciente = $sth->fetchObject();
        $id = intval($paciente->id);

        $cambio = 0;
        if ($id != 0) {
            if ($paciente->nombre != $input['nombre']) {
                $cambio = 1;
            }
            if ($paciente->apellido != $input['apellido']) {
                $cambio += 10;
            }
            if ($paciente->dni != $input['documento']) {
                $cambio += 100;
            }
            if ($paciente->celular != $input['telefono']) {
                $cambio += 1000;
            }
            if ($paciente->fechaNac != $input['fechaNacimiento']) {
                $cambio += 10000;
            }
        }
        $input['telefono'] = '54' . $input['telefono'];
        if ($cambio > 0 && $id != 0) {
            $sth = $this->db->prepare("UPDATE personas SET nombre = :nombre, apellido = :apellido,
                fechaNac = :fechaNacimiento, celular = :telefono, dni = :documento
                WHERE id = :id;");
            $sth->bindParam(":id", $id);
            $sth->bindParam(":documento", $input['documento']);
            $sth->bindParam(":apellido", $input['apellido']);
            $sth->bindParam(":nombre", $input['nombre']);
            $sth->bindParam(":telefono", $input['telefono']);
            $sth->bindParam(":fechaNacimiento", $input['fechaNacimiento']);
            $sth->execute();
        }

        if ($id == 0) {
            $sth = $this->db->prepare("INSERT INTO personas (nombre, apellido, dni, fechaNac, celular)
            VALUES(:nombre, :apellido, :documento, :fechaNacimiento, :telefono);");
            $sth->bindParam(":documento", $input['documento']);
            $sth->bindParam(":apellido", $input['apellido']);
            $sth->bindParam(":nombre", $input['nombre']);
            $sth->bindParam(":telefono", $input['telefono']);

            if (is_null($input['fechaNacimiento']) || $input['fechaNacimiento'] == '') {
                $sth->bindValue(":fechaNacimiento", null, PDO::PARAM_NULL);
            } else {
                $sth->bindParam(":fechaNacimiento", $input['fechaNacimiento'], PDO::PARAM_STR);
            }
            $sth->execute();
            $id = $this->db->lastInsertId();
        }
        // $sth = $this->db->prepare("UPDATE turnos SET estado = 2, paciente_id = (SELECT id FROM personas WHERE dni = :documento) WHERE id = :idTurno;");
        $todos = false;

        if ($id > 0) {
            $sth = $this->db->prepare("UPDATE turnos SET estado = 2, paciente_id = :idPac, obrasocial_id = :idObraSocial,
            comentario = :comentario WHERE id = :idTurno;");
            $sth->bindParam("idPac", $id);
            $sth->bindParam('idTurno', $input['idTurno']);
            $sth->bindParam('idObraSocial', $input['obraSocial']);
            $sth->bindParam('comentario', $input['comentario']);
            $todos = $sth->execute();
        }

        return $this->response->withJson($todos);
    });

    $grupo->put('/actualizarEstado', function (Request $request, Response $response, array $args) {
        $input = $request->getParsedBody();
        if ($input['estado'] == 1) {
            $sth = $this->db->prepare("UPDATE turnos SET estado = :estado, paciente_id = 0, obrasocial_id = 0,
            comentario = '' WHERE id = :idTurno;");
            $sth->bindParam("estado", $input['estado']);
            $sth->bindParam('idTurno', $input['idTurno']);
            $todos = $sth->execute();
            return $this->response->withJson($todos);
        } else {
            $sth = $this->db->prepare("UPDATE turnos SET estado = :estado WHERE id = :idTurno;");
            $sth->bindParam("estado", $input['estado']);
            $sth->bindParam('idTurno', $input['idTurno']);
            $todos = $sth->execute();
            return $this->response->withJson($todos);
        }
    });

    $grupo->put('/reasignarTurno', function (Request $request, Response $response, array $args) {
        $input = $request->getParsedBody();
        // var_dump($input);

        $sth = $this->db->prepare("SELECT paciente_id FROM turnos WHERE id = :idTurno;");
        $sth->bindParam('idTurno', $input['idTurno']);
        $sth->execute();
        $paciente = $sth->fetchObject();
        $idPaciente = intval($paciente->paciente_id);

        $sth = $this->db->prepare("UPDATE turnos SET estado = 1, paciente_id = 0, obrasocial_id = 0,
        comentario = '' WHERE id = :idTurno;");
        $sth->bindParam('idTurno', $input['idTurno']);
        $sth->execute();

        $sth = $this->db->prepare("UPDATE turnos SET estado = 2, paciente_id = :idPac, obrasocial_id = :idObraSocial,
            comentario = :comentario WHERE id = :idTurno;");
        $sth->bindParam("idPac", $idPaciente);
        $sth->bindParam('idTurno', $input['idNuevoTurno']);
        $sth->bindParam('idObraSocial', $input['obrasocial_id']);
        $sth->bindParam('comentario', $input['comentario']);
        $todos = $sth->execute();

        return $this->response->withJson($todos);
    });

    $grupo->put('/reasignarTurnoWeb', function (Request $request, Response $response, array $args) {
        $input = $request->getParsedBody();
        
        // idReasignarTurno: "7061"
        // idTurno: "7059"
        // reasignarFecha: "2020-12-16"

        $sth = $this->db->prepare("BEGIN;");
        $sth->execute();
        
        $sth = $this->db->prepare("SELECT * FROM turnos WHERE id = :idTurno;");
        $sth->bindParam('idTurno', $input['idTurno']);
        $sth->execute();
        $paciente = $sth->fetchObject();
        $idPaciente = intval($paciente->paciente_id);
        $comentario = $paciente->comentario;
        $obrasocial_id = intval($paciente->obrasocial_id);
        
        // id, fecha, profesional_id, paciente_id, estado, comentario, obrasocial_id   
        $sth = $this->db->prepare("UPDATE turnos SET estado = 2, paciente_id = :idPac, 
        obrasocial_id = :idObraSocial, comentario = :comentario WHERE id = :idReasignarTurno;");
        $sth->bindParam("idPac", $idPaciente);
        $sth->bindParam('idReasignarTurno', $input['idReasignarTurno']);
        $sth->bindParam('idObraSocial', $obrasocial_id);
        $sth->bindParam('comentario', $comentario);
        $todos = $sth->execute();
        
        $sth = $this->db->prepare("UPDATE turnos SET estado = 1, paciente_id = 0, obrasocial_id = 0,
        comentario = '' WHERE id = :idTurno;");
        $sth->bindParam('idTurno', $input['idTurno']);
        $sth->execute();
        
        if($todos){
            $sth = $this->db->prepare("COMMIT;");
        } else {
            $sth = $this->db->prepare("ROLLBACK;");
        }
        $sth->execute();

        return $this->response->withJson($todos);
    });

    $grupo->get('/TodosLosturnos', function (Request $request, Response $response, array $args) {
        $sth = $this->db->prepare("SELECT * FROM turnos_view;");
        $sth->execute();
        $todos = $sth->fetchAll();
        return $this->response->withJson($todos);
    });

    $grupo->post('/cerrar', function (Request $request, Response $response, array $args) {
        $input = $request->getParsedBody();

        $fecha_1 = $input["fechaDesde"] . ' 00:00:00';
        $fecha_2 = $input["fechaHasta"] . ' 23:59:59';

        try {
            if ($total == 0) {
                $sth = $this->db->prepare("DELETE FROM turnos WHERE paciente_id = 0 
                        AND profesional_id = :profesional
                        AND fecha between :fechaDesde and :fechaHasta;");
                $sth->bindParam(":fechaDesde", $fecha_1);
                $sth->bindParam(":fechaHasta", $fecha_2);
                $sth->bindParam(":profesional", $input["profesional"]);
                $sth->execute();
                $msg = array('mensaje' => 'Datos grabados exitosamente.', 'error' => 200, 'color' => 'success');
            }
        } catch (PDOException $err) {
            $msg = array('mensaje' => 'Error al grabar los turnos.', 'error' => $err->getMessage(), 'color' => 'danger');
        }
        return $this->response->withJson($msg);
    });


    $grupo->post('/generar', function (Request $request, Response $response, array $args) {
        $input = $request->getParsedBody();
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $semanaSiguiente = time() + (7 * 24 * 60 * 60);

        $fecha_1 = date_create($input["fechaDesde"] . 'T' . $input['horaDesdeM']);
        $fecha_2 = date_create($input["fechaDesde"] . 'T' . $input['horaHastaM']);

        //Fecha y hora de fin
        $fecha_3 = date_create($input["fechaHasta"] . 'T' . $input['horaHastaM']);

        $inicio = date_format($fecha_1, 'U');
        $inicioTotal = date_format($fecha_1, 'U');
        $fin = date_format($fecha_2, 'U');
        $finTotal = date_format($fecha_3, 'U');

        $datetime1 = new DateTime($input["fechaDesde"]);
        $datetime2 = new DateTime($input["fechaHasta"]);
        $intervalo = $datetime1->diff($datetime2);
        if ($input['manana']) {
            $j = $intervalo->format('%a') + 1;
            for ($i = 1; $i <= $j; $i++) {
                while ($inicio < $fin) {
                    $fecha_aux = date("Y-m-d H:i:s", $inicio);
                    $dia_aux = date("w", $inicio);
                    if (($dia_aux == 1 && $input['lunes']) ||
                        ($dia_aux == 2 && $input['martes']) ||
                        ($dia_aux == 3 && $input['miercoles']) ||
                        ($dia_aux == 4 && $input['jueves']) ||
                        ($dia_aux == 5 && $input['viernes']) ||
                        ($dia_aux == 6 && $input['sabado'])
                    ) {
                        try {
                            $sth = $this->db->prepare("SELECT count(*) AS cantidad FROM turnos WHERE fecha = :fecha AND profesional_id = :profesional;");
                            $sth->bindParam(":fecha", $fecha_aux);
                            $sth->bindParam(":profesional", $input["profesional"]);
                            $sth->execute();
                            $tota = $sth->fetchObject();
                            $total = intval($tota->cantidad);
                            if ($total == 0) {
                                $sth = $this->db->prepare("INSERT INTO turnos (fecha, profesional_id, estado)
                                    VALUES(:fecha, :profesional, 1);");
                                $sth->bindParam(":fecha", $fecha_aux);
                                $sth->bindParam(":profesional", $input["profesional"]);
                                $sth->execute();
                                $msg = array('mensaje' => 'Datos grabados exitosamente.', 'error' => 200, 'color' => 'success');
                            }
                        } catch (PDOException $err) {
                            $msg = array('mensaje' => 'Error al grabar los turnos.', 'error' => $err->getMessage(), 'color' => 'danger');
                        }
                        unset($sth);
                    }
                    $inicio += (60 * $input["duracion"]);
                };
                $inicio = date_format($fecha_1, 'U') + (60 * 60 * 24) * $i;
                $fin = date_format($fecha_2, 'U') + (60 * 60 * 24) * $i;
            }
        }

        $fecha_1 = date_create($input["fechaDesde"] . 'T' . $input['horaDesdeS']);
        $fecha_2 = date_create($input["fechaDesde"] . 'T' . $input['horaHastaS']);
        $inicio = date_format($fecha_1, 'U');
        $inicioTotal = date_format($fecha_1, 'U');
        $fin = date_format($fecha_2, 'U');
        $finTotal = date_format($fecha_3, 'U');

        $datetime1 = new DateTime($input["fechaDesde"]);
        $datetime2 = new DateTime($input["fechaHasta"]);
        if ($input['siesta']) {
            $fecha_1 = date_create($input["fechaDesde"] . 'T' . $input['horaDesdeS']);
            $fecha_2 = date_create($input["fechaDesde"] . 'T' . $input['horaHastaS']);

            $j = $intervalo->format('%a') + 1;
            for ($i = 1; $i <= $j; $i++) {
                while ($inicio < $fin) {
                    $fecha_aux = date("Y-m-d H:i:s", $inicio);
                    $dia_aux = date("w", $inicio);
                    if (($dia_aux == 1 && $input['lunes']) ||
                        ($dia_aux == 2 && $input['martes']) ||
                        ($dia_aux == 3 && $input['miercoles']) ||
                        ($dia_aux == 4 && $input['jueves']) ||
                        ($dia_aux == 5 && $input['viernes']) ||
                        ($dia_aux == 6 && $input['sabado'])
                    ) {
                        try {
                            $sth = $this->db->prepare("SELECT count(*) AS cantidad FROM turnos WHERE fecha = :fecha AND profesional_id = :profesional;");
                            $sth->bindParam(":fecha", $fecha_aux);
                            $sth->bindParam(":profesional", $input["profesional"]);
                            $sth->execute();
                            $tota = $sth->fetchObject();
                            $total = intval($tota->cantidad);
                            if ($total == 0) {
                                $sth = $this->db->prepare("INSERT INTO turnos (fecha, profesional_id, estado)
                                VALUES(:fecha, :profesional, 1);");
                                $sth->bindParam(":fecha", $fecha_aux);
                                $sth->bindParam(":profesional", $input["profesional"]);
                                $sth->execute();
                                $msg = array('mensaje' => 'Datos grabados exitosamente.', 'error' => 200, 'color' => 'success');
                            }
                        } catch (PDOException $err) {
                            $msg = array('mensaje' => 'Error al grabar los turnos.', 'error' => $err->getMessage(), 'color' => 'danger');
                        }
                        unset($sth);
                    }
                    $inicio += (60 * $input["duracion"]);
                };
                $inicio = date_format($fecha_1, 'U') + (60 * 60 * 24) * $i;
                $fin = date_format($fecha_2, 'U') + (60 * 60 * 24) * $i;
            }
        }

        $fecha_1 = date_create($input["fechaDesde"] . 'T' . $input['horaDesdeT']);
        $fecha_2 = date_create($input["fechaDesde"] . 'T' . $input['horaHastaT']);
        $inicio = date_format($fecha_1, 'U');
        $fin = date_format($fecha_2, 'U');

        $datetime1 = new DateTime($input["fechaDesde"]);
        $datetime2 = new DateTime($input["fechaHasta"]);
        unset($sth);

        if ($input['tarde']) {
            $fecha_1 = date_create($input["fechaDesde"] . 'T' . $input['horaDesdeT']);
            $fecha_2 = date_create($input["fechaDesde"] . 'T' . $input['horaHastaT']);

            $j = $intervalo->format('%a') + 1;
            for ($i = 1; $i <= $j; $i++) {
                while ($inicio < $fin) {
                    $fecha_aux = date("Y-m-d H:i:s", $inicio);
                    $dia_aux = date("w", $inicio);
                    if (($dia_aux == 1 && $input['lunes']) ||
                        ($dia_aux == 2 && $input['martes']) ||
                        ($dia_aux == 3 && $input['miercoles']) ||
                        ($dia_aux == 4 && $input['jueves']) ||
                        ($dia_aux == 5 && $input['viernes']) ||
                        ($dia_aux == 6 && $input['sabado'])
                    ) {
                        try {
                            $sth = $this->db->prepare("SELECT count(*) AS cantidad FROM turnos WHERE fecha = :fecha AND profesional_id = :profesional;");
                            $sth->bindParam(":fecha", $fecha_aux);
                            $sth->bindParam(":profesional", $input["profesional"]);
                            $sth->execute();
                            $tota = $sth->fetchObject();
                            $total = intval($tota->cantidad);
                            if ($total == 0) {
                                $sth = $this->db->prepare("INSERT INTO turnos (fecha, profesional_id, estado)
                                VALUES(:fecha, :profesional, 1);");
                                $sth->bindParam(":fecha", $fecha_aux);
                                $sth->bindParam(":profesional", $input["profesional"]);
                                $sth->execute();
                                $msg = array('mensaje' => 'Datos grabados exitosamente.', 'error' => 200, 'color' => 'success');
                            }
                        } catch (PDOException $err) {
                            $msg = array('mensaje' => 'Error al grabar los turnos.', 'error' => $err->getMessage(), 'color' => 'danger');
                        }
                        unset($sth);
                    }
                    $inicio += (60 * $input["duracion"]);
                };
                $inicio = date_format($fecha_1, 'U') + (60 * 60 * 24) * $i;
                $fin = date_format($fecha_2, 'U') + (60 * 60 * 24) * $i;
            }
        }
        return $this->response->withJson($msg);
    });
})->add($a);

// $app->group('/tin', function (\Slim\App $grupo) {

//     $grupo->get('/tibu/{name}', function (Request $request, Response $response, array $args) {
//         $name = $args['name'];
//         $response->getBody()->write("Hello, $name");
//         return $response;
//     });
// })->add($b);
