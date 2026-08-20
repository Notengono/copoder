<?php

require_once("db_abstract_model.php");

//include_once 'clase.certificado.php';
//include_once dirname(dirname(__FILE__)) . '/librerias/fechas.php';
//include_once dirname(dirname(__FILE__)) . '/librerias/funciones.php';
//include_once dirname(dirname(__FILE__)) . '/librerias/seguridad.php';

class certificado extends DBAbstractModel {

    public $codigo, $folio, $libro, $mp, $created;

    public function getCodigo() {
        return $this->codigo;
    }

    public function getFolio() {
        return $this->folio;
    }

    public function getLibro() {
        return $this->libro;
    }

    public function getMp() {
        return $this->mp;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setFolio($folio) {
        $this->folio = $folio;
    }

    public function setLibro($libro) {
        $this->libro = $libro;
    }

    public function setMp($mp) {
        $this->mp = $mp;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function buscar_certificado($codigo, $mp, $libro, $folio) {
        $this->query = "SELECT * FROM certificado WHERE codigo = '$codigo' "
                . "AND mp = $mp AND libro = $libro AND folio = $folio";
        $this->get_results_from_query();

        if (mysqli_num_rows($this->resultado) == TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function crearQrcode($mp, $libro, $folio) {
//        Se necesita almacenar lo datos en la tabla de certificados;
        $this->query = "INSERT INTO certificado (codigo, folio, libro, mp, created)"
                . "VALUE(SHA2(NOW(), 256), $folio, $libro, $mp, NOW())";
        $this->get_results_from_query();

        $this->query = "SELECT codigo FROM certificado ORDER BY created DESC limit 1;";
        $this->get_results_from_query();
        $codigo = '';
        if (mysqli_num_rows($this->resultado) == TRUE) {
            $fila = mysqli_fetch_object($this->resultado);
            $codigo = $fila->codigo;
        }

        $datos = array();
//        $PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;
        $PNG_TEMP_DIR = 'archivos' . DIRECTORY_SEPARATOR;
        //html PNG location prefix
//        $PNG_WEB_DIR = 'temp/';

        include_once "../qr/qrlib.php";

        //ofcourse we need rights to create temp dir
        if (!file_exists($PNG_TEMP_DIR))
            mkdir($PNG_TEMP_DIR);

        $filename = $PNG_TEMP_DIR . $codigo . '.png';
        $errorCorrectionLevel = 'M';
        $matrixPointSize = 6;

//        $codigo = RandomString(30);
        $data = "http://190.57.232.173/contralor/certificado/verifica.php?codigo="
                . $codigo . '&mp=' . $mp . '&libro=' . $libro . '&folio=' . $folio;
        $filename = $PNG_TEMP_DIR . $codigo . '.png';
//        $filename = $PNG_TEMP_DIR . md5($data . '|' . $errorCorrectionLevel . '|' . $matrixPointSize) . '.png';

        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

        $datos['codigo'] = $codigo;
        $datos['filename'] = $filename;
        $datos['url'] = $data;
        return $datos;
    }

    function getQrcode() {
        $datos = array();

        $PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;
        $PNG_WEB_DIR = 'temp/';
        include_once "qr/qrlib.php";

        if (!file_exists($PNG_TEMP_DIR))
            mkdir($PNG_TEMP_DIR);

        $filename = $PNG_TEMP_DIR . 'test.png';
        $errorCorrectionLevel = 'M';
        $matrixPointSize = 6;
        $codigo = $this->qrcode;

        $data = "http://190.57.232.173/contralor/consultaqr.php?code=" . $codigo;
        // datos del archivo a generar:
        $filename = $PNG_TEMP_DIR . md5($data . '|' . $errorCorrectionLevel . '|' . $matrixPointSize) . '.png';
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

        $datos['codigo'] = $codigo;
        $datos['filename'] = $filename;
        $datos['url'] = $data;
        return $datos;
    }

    function setQrcode($qrcode) {
        $this->qrcode = $qrcode;
    }

    function grabo_qr($codigo) {
        $this->query = "update contralor_mp set qrcode='$codigo' where "
                . "tipo_dni=$this->tipodoc and dni=$this->documento "
                . "and mp = $this->matricula and tipo_mp='$this->tipo_mp' and id_titulo<>0";
        $this->get_results_from_query();
    }

}

?>