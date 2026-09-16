<!-- 
 DROP TABLE IF EXISTS `copoder`.`noticias`;
CREATE TABLE  `copoder`.`noticias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `resumen` varchar(254) DEFAULT NULL,
  `contenido` blob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
  -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Colegio de Podólogos de Entre Ríos">

    <title>Colegio de Podólogos de Entre Ríos</title>
    <link rel="shortcut icon" href="images/logo-122x184.jpg" type="image/x-icon">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">

    <!-- CSS propio -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include_once 'cabecera.php' ?>
    <!-- Encabezado -->
    <section class="quick-access">
        <div class="container">
            <div class="section-title">
                <span>Actualidad</span>
                <h2>Noticias</h2>
                <p> Todas las novedades, comunicados y actividades del Colegio de Podólogos de Entre Ríos. </p>
            </div>
        </div>
    </section>

    <!-- Listado de noticias -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4" id="contenedorNoticias">
                <!-- Las noticias se insertan desde JavaScript -->
            </div>
            <!-- Mensaje cuando no hay resultados -->
            <div id="sinNoticias"
                class="alert alert-info d-none">
                No hay noticias disponibles.
            </div>

            <!-- Paginación -->
            <nav class="mt-5" aria-label="Paginación de noticias">
                <ul
                    class="pagination justify-content-center"
                    id="paginacionNoticias">
                    <!-- Los botones se insertan desde JavaScript -->
                </ul>
            </nav>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container text-center">
            <p class="mb-0">
                © 2026 Colegio de Podólogos de Entre Ríos
            </p>
        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="js/noticias.js"></script>

</body>

</html>