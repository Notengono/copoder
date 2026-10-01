<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Colegio de Podólogos de Entre Ríos">

    <title>Colegio de Podólogos de Entre Ríos</title>
    <link rel="shortcut icon" href="images/logo-122x184.jpg" type="image/x-icon">
    <!-- Bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- CSS propio -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php include_once 'cabecera.php' ?>


    <!-- ========================================================= -->
    <!-- CARRUSEL -->
    <!-- ========================================================= -->

    <section class="hero">
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- INDICADORES -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"> </button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <!-- SLIDE 1 -->
                <div class="carousel-item active">
                    <a href="noticia.html?id=1">
                        <img src="images/slide-01.jpg" class="d-block w-100" alt="Información institucional">
                        <div class="carousel-caption">
                            <h2>
                                Colegio de Podólogos de Entre Ríos
                            </h2>
                            <p>
                                Información institucional y novedades
                            </p>
                        </div>
                    </a>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item">
                    <a href="noticia.html?id=2">
                        <img src="images/slide-02.jpg" class="d-block w-100" alt="Capacitación profesional">
                        <div class="carousel-caption">
                            <h2>
                                Capacitación profesional
                            </h2>
                            <p>
                                Conocé nuestras próximas actividades
                            </p>
                        </div>
                    </a>
                </div>

                <!-- SLIDE 3 -->
                <div class="carousel-item">
                    <a href="noticia.html?id=3">
                        <img src="images/slide-03.jpg" class="d-block w-100" alt="Información para matriculados">
                        <div class="carousel-caption">
                            <h2>
                                Información para matriculados
                            </h2>
                            <p>
                                Accedé a toda la información del Colegio
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- PREVIOUS -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <!-- NEXT -->
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- ========================================================= -->
    <!-- ACCESOS RÁPIDOS -->
    <!-- ========================================================= -->

    <section class="quick-access">
        <div class="container">
            <div class="section-title">
                <span>GESTIONES</span>
                <h2>
                    Accesos rápidos
                </h2>
            </div>

            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <a href="matriculacion.html" class="quick-card">
                        <i class="bi bi-person-vcard"></i>
                        <span>
                            Matriculación
                        </span>
                    </a>
                </div>

                <div class="col-6 col-md-3">
                    <a href="profesionales.html" class="quick-card">
                        <i class="bi bi-search"></i>
                        <span>
                            Buscar profesional
                        </span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="legislacion.html" class="quick-card">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>
                            Legislación
                        </span>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="contacto.html" class="quick-card">
                        <i class="bi bi-envelope"></i>
                        <span>
                            Contacto
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================================================= -->
    <!-- INFORMACIÓN IMPORTANTE -->
    <!-- ========================================================= -->
    <section class="important-info">
        <div class="container">
            <div class="section-title">
                <span>INFORMACIÓN</span>
                <h2>
                    Información importante
                </h2>
            </div>
            <div class="important-list">
                <a href="informacion.html?id=1" class="important-item">
                    <div>
                        <i class="bi bi-info-circle"></i>
                        <strong>
                            Actualización de datos de matriculados
                        </strong>
                    </div>
                    <i class="bi bi-arrow-right"></i>
                </a>
                <a href="informacion.html?id=2" class="important-item">
                    <div>
                        <i class="bi bi-file-text"></i>
                        <strong>
                            Nueva normativa para profesionales
                        </strong>
                    </div>
                    <i class="bi bi-arrow-right"></i>
                </a>
                <a href="informacion.html?id=3" class="important-item">
                    <div>
                        <i class="bi bi-calendar-event"></i>
                        <strong>
                            Calendario institucional 2026
                        </strong>
                    </div>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- ========================================================= -->
    <!-- NOTICIAS + CAPACITACIONES -->
    <!-- ========================================================= -->

    <section class="news-section">
        <div class="container">
            <div class="section-title">
                <span>ACTUALIDAD</span>
                <h2>
                    Noticias y capacitaciones
                </h2>
            </div>
            <div class="row g-5">
                <!-- ================================================= -->
                <!-- NOTICIAS - 70% -->
                <!-- ================================================= -->
                <div class="col-lg-8">
                    <div class="content-title">
                        <h3>
                            Últimas noticias
                        </h3>
                        <a href="noticias.php">
                            Ver todas
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div id="contenedorNoticias"></div>
                </div>

                <!-- ================================================= -->
                <!-- CAPACITACIONES - 30% -->
                <!-- ================================================= -->

                <div class="col-lg-4">

                    <div class="content-title">

                        <h3>
                            Capacitaciones
                        </h3>

                        <a href="capacitaciones.html">
                            Ver todas
                        </a>

                    </div>


                    <div class="training-list">


                        <a href="capacitacion.html?id=1" class="training-item">

                            <div class="training-date">

                                AGO
                                <strong>20</strong>

                            </div>

                            <div>

                                <h4>
                                    Actualización en Podología Clínica
                                </h4>

                                <span>
                                    Ver información
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </div>

                        </a>


                        <a href="capacitacion.html?id=2" class="training-item">

                            <div class="training-date">

                                SEP
                                <strong>05</strong>

                            </div>

                            <div>

                                <h4>
                                    Jornada de actualización profesional
                                </h4>

                                <span>
                                    Ver información
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </div>

                        </a>


                        <a href="capacitacion.html?id=3" class="training-item">

                            <div class="training-date">

                                SEP
                                <strong>19</strong>

                            </div>

                            <div>

                                <h4>
                                    Taller de prevención y cuidado del pie
                                </h4>

                                <span>
                                    Ver información
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ========================================================= -->
    <!-- FOOTER -->
    <!-- ========================================================= -->

    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="footer-brand">
                        <strong>
                            Colegio de Podólogos
                        </strong>

                        <span>
                            de Entre Ríos
                        </span>
                    </div>
                    <p>
                        Institución destinada a representar,
                        acompañar y jerarquizar el ejercicio
                        profesional de la Podología en Entre Ríos.
                    </p>

                </div>


                <div class="col-lg-3">

                    <h5>
                        Navegación
                    </h5>

                    <ul>

                        <li>
                            <a href="#">
                                Inicio
                            </a>
                        </li>

                        <li>
                            <a href="institucional.html">
                                Institucional
                            </a>
                        </li>

                        <li>
                            <a href="matriculacion.html">
                                Matriculación
                            </a>
                        </li>

                        <li>
                            <a href="profesionales.html">
                                Profesionales
                            </a>
                        </li>

                    </ul>

                </div>


                <div class="col-lg-4">

                    <h5>
                        Contacto
                    </h5>

                    <p>
                        <i class="bi bi-geo-alt"></i>
                        Entre Ríos, Argentina
                    </p>

                    <p>
                        <i class="bi bi-envelope"></i>
                        contacto@colegiopodologos-er.ar
                    </p>

                    <p>
                        <i class="bi bi-telephone"></i>
                        (0343) 000-0000
                    </p>

                </div>

            </div>


            <div class="footer-bottom">

                <span>
                    © 2026 Colegio de Podólogos de Entre Ríos
                </span>

                <span>
                    Todos los derechos reservados
                </span>

            </div>

        </div>

    </footer>


    <a href="https://wa.me/5493434477339?text=Hola%2C%20quería%20hacer%20una%20consulta" target="_blank" rel="noopener"
        class="whatsapp-flotante" aria-label="Hablar por WhatsApp">
        <svg viewBox="0 0 24 24" fill="currentColor" width="28" height="28">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.297-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z">
            </path>
            <path
                d="M12.004 2.003c-5.514 0-9.997 4.483-9.997 9.997 0 1.763.464 3.489 1.346 5.007L2.05 21.951a.75.75 0 0 0 .917.917l4.944-1.303a9.96 9.96 0 0 0 4.093.878h.004c5.514 0 9.997-4.483 9.997-9.997s-4.483-9.997-9.997-9.997zm0 18.244a8.23 8.23 0 0 1-3.696-.876l-.265-.132-2.94.775.784-2.865-.172-.294a8.198 8.198 0 0 1-1.11-4.108c0-4.542 3.696-8.238 8.239-8.238a8.19 8.19 0 0 1 5.827 2.415 8.19 8.19 0 0 1 2.412 5.827c0 4.543-3.696 8.239-8.244 8.239z">
            </path>
        </svg>
    </a>
    <style>
        .whatsapp-flotante {
            position: fixed;
            right: 24px;
            bottom: 24px;
            width: 56px;
            height: 56px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
            z-index: 9999;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .whatsapp-flotante:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.32);
        }
    </style>

    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <script src="js/noticia_index.js"></script>
</body>

</html>