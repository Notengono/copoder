<?php require_once 'auth.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Colegio de Podólogos de Entre Ríos">

    <title>Colegio de Podólogos de Entre Ríos</title>
    <link rel="shortcut icon" href="images/logo-184x184.jpg" type="image/x-icon">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">

    <!-- CSS propio -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php include_once 'cabecera.php' ?>
    <!-- Encabezado -->
    <section class="quick-access">
        <div class="container">
            <div class="section-title">
                <span>Actualidad</span>
                <h2>Información</h2>
                <!-- <p> Todas las novedades, comunicados y actividades del Colegio de Podólogos de Entre Ríos. </p> -->
            </div>
        </div>
    </section>

    <!-- Listado de comunicados -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4" id="contenedorComunicados">
                <!-- Las comunicados se insertan desde JavaScript -->
            </div>
            <!-- Mensaje cuando no hay resultados -->
            <div id="sinComunicados"
                class="alert alert-info d-none">
                No hay comunicados disponibles.
            </div>

            <!-- Paginación -->
            <nav class="mt-5" aria-label="Paginación de comunicados">
                <ul
                    class="pagination justify-content-center"
                    id="paginacionComunicados">
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

    <script src="js/comunicados.js"></script>

</body>

</html>