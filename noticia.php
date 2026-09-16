<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta
        name="description"
        content="Noticias del Colegio de Podólogos de Entre Ríos">
    <title>Noticia | Colegio de Podólogos de Entre Ríos</title>
    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link
        rel="stylesheet"
        href="css/styles.css">
    <link
        rel="stylesheet"
        href="css/noticia.css">
</head>

<body>
    <?php include_once 'cabecera.php' ?>

    <!-- ====================================================== -->
    <!-- CONTENIDO -->
    <!-- ====================================================== -->

    <main>
        <div class="container">
            <div class="row g-5">

                <!-- ============================================ -->
                <!-- NOTICIA -->
                <!-- ============================================ -->
                <div class="col-lg-8">
                    <!-- Breadcrumb -->
                    <!-- <nav
                        aria-label="breadcrumb"
                        class="mt-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    Inicio
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="noticias.php">
                                    Noticias
                                </a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page">
                                Noticia
                            </li>
                        </ol>
                    </nav> -->

                    <!-- Categoría -->
                    <div class="noticia-categoria">
                        INSTITUCIONAL
                    </div>

                    <!-- Título -->
                    <h1
                        id="noticiaTitulo"
                        class="noticia-titulo">
                        Cargando noticia...
                    </h1>

                    <!-- Fecha -->
                    <div
                        id="noticiaFecha"
                        class="noticia-fecha">
                    </div>

                    <!-- Imagen -->
                    <div class="noticia-imagen-container">
                        <img
                            id="noticiaImagen"
                            src=""
                            alt=""
                            class="noticia-imagen">
                    </div>

                    <!-- Bajada -->
                    <div
                        id="noticiaResumen"
                        class="noticia-resumen">
                    </div>

                    <!-- Contenido -->
                    <article
                        id="noticiaContenido"
                        class="noticia-contenido">
                    </article>

                    <!-- Compartir -->
                    <div class="noticia-compartir">
                        <span>
                            Compartir
                        </span>
                        <a href="#" id="shareFacebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" id="shareWhatsapp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <button
                            type="button"
                            id="copiarEnlace"
                            title="Copiar enlace">
                            <i class="bi bi-link-45deg"></i>
                        </button>
                    </div>

                    <!-- Volver -->
                    <div class="mt-4 mb-5">
                        <a
                            href="noticias.php"
                            class="btn btn-outline-primary">
                            <i class="bi bi-arrow-left"></i>
                            Volver a noticias
                        </a>
                    </div>
                </div>

                <!-- ============================================ -->
                <!-- SIDEBAR -->
                <!-- ============================================ -->
                <aside class="col-lg-4">
                    <div class="sidebar-noticias">
                        <div class="sidebar-title">
                            Últimas noticias
                        </div>

                        <div id="ultimasNoticias">
                            <!-- Se carga con JS -->
                        </div>

                        <div class="mt-4">
                            <a
                                href="noticias.php"
                                class="btn btn-primary w-100">
                                Ver todas las noticias
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>


    <!-- ====================================================== -->
    <!-- FOOTER -->
    <!-- ====================================================== -->
    <footer class="footer py-4">
        <div class="container">
            <div class="text-center">
                © 2026 Colegio de Podólogos de Entre Ríos
            </div>
        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="js/noticia.js"></script>
</body>

</html>