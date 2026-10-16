<?php require_once 'auth.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Colegio de Podólogos de Entre Ríos">
    <title>Colegio de Podólogos de Entre Ríos</title>
    <link rel="shortcut icon" href="../images/logo-184x184.jpg" type="image/x-icon">
    <!-- Bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- CSS propio -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php //include_once $_SERVER['DOCUMENT_ROOT'] . '/cabecera.php'; 
    ?>
    <?php include_once 'cabecera.php' ?>
    <!-- Encabezado -->
    <section class="quick-access">
        <div class="container">
            <div class="section-title">
                <span>libros</span>
                <h2>Biblioteca</h2>
            </div>
        </div>
    </section>

    <!-- Listado de noticias -->
    <!-- <section class="py-5">
        <div class="container">
            <div class="row g-4" id="contenedorNoticias">
            </div>
            <div id="sinNoticias"
                class="alert alert-info d-none">
                No hay noticias disponibles.
            </div>
            <nav class="mt-5" aria-label="Paginación de noticias">
                <ul
                    class="pagination justify-content-center"
                    id="paginacionNoticias">
                </ul>
            </nav>
        </div>
    </section> -->

    <section class="py-5">
        <div class="container">
            <div class="row g-4" id="contenedorNoticias">
                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/caratula-pie-y-tobillo-1076x1436.png"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i> Año de publicación: 2006
                        </div>
                        <h2 class="news-grid-title"> Monografía: Pie y Tobillo </h2>
                        <p>
                            Coordinadores: <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;M. Núñez-Samper y R. A. Probe
                        </p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="Pie y tobillo">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>


                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/caratula-pruebas-clinicas-1-739x1110.png"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i> Año de publicación: 1997
                        </div>
                        <h2 class="news-grid-title"> Pruebas clínicas para patología ósea, articular y muscular Exploraciones, signos y síntomas</h2>
                        <p>Autor: Klaus Buckup</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="pruebas-clinicas-para-patologia-osea-articular-y-muscular">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/pie-diabetico-atencion-integral-3a-506x611.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i> Edición: 3° Edición
                        </div>
                        <h2 class="news-grid-title"> Pie Diabético Atención Integral</h2>
                        <p>Autor: Fermín R. Martínez de Jesús</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="PieDiabAtInt">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/pie-diabetico-vaquero-506x714.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i> Año de publicación: 2012
                        </div>
                        <h2 class="news-grid-title">Pie Diabético</h2>
                        <p>Autor: Carlos Vaquero</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="Pie_diabetico_Vaquero">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/PodologiaGeriatrica_Caratula.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i> Año de publicación: 2007
                        </div>
                        <h2 class="news-grid-title">Podología Geriátrica</h2>
                        <p>Coordinadores: Isabelle Herbaux
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hubert Blain<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Claude Jeandel</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="podologia_geriatrica">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/LaAnatomiaDeLasLesionesDeportivas.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i> Año de publicación: 2005
                        </div>
                        <h2 class="news-grid-title">La Anatomia De Las Lesiones Deportivas</h2>
                        <p>Autor: Brad Walker</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="laanatomiadelaslesionesdeportivas">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/PodologiaAtlasDeCirugiaUngueal.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i> Año de publicación: 2010
                        </div>
                        <h2 class="news-grid-title">Podologia Atlas De Cirugia Ungueal</h2>
                        <p>Autor: Alfonso Martínez Nova</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="podologiaatlasdecirugiaungueal">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/Patologia_Ungueal.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i> Editorial: Doyma<br> Año: 1983
                        </div>
                        <h2 class="news-grid-title">Patología Ungueal</h2>
                        <p>Autor: H. Zaun</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="patologia_ungueal">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/Guia_de_Actuacion_en_Personas_Mayores.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i>Edición: 2ª<br> Año: 2002
                        </div>
                        <h2 class="news-grid-title">Guía de Actuación en Personas Mayores en Atención Primaria</h2>
                        <p>Servicio Canario de Salud<br>Conserjería de Sanidad y Consumo del Gobierno de Canarias</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="guia_de_actuacion_en_personas_mayores">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/AtlasAnatomiaPalpatoria.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i>Año de publicación: 2014
                        </div>
                        <h2 class="news-grid-title">Atlas de Anatomia Palpatoria</h2>
                        <p>Autor: Serge Tixa</p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="atlasanatomiapalpatoria">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>

                <article class="news-grid-card h-100 col-md-6 col-lg-4">
                    <img
                        src="assets/libros/Biomecanica.jpg"
                        alt="Colegio de Podólogos de Entre Ríos"
                        class="grid-image">

                    <div class="news-grid-content">
                        <div class="news-date">
                            <i class="bi bi-calendar3"></i>Año de publicación: 2015
                        </div>
                        <h2 class="news-grid-title">Biomecánica básica. Aplicada a la actividad física y el deporte</h2>
                        <p>Coordinadores:<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr. Pedro Pérez-Soriano<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr. Salvador Llana Belloch
                        </p>
                        <form action="libro.php" target="_blank" method="POST">
                            <input type="hidden" name="libro" value="biomecanica">
                            <div class="mbr-section-btn align-left">
                                <div class="col-auto ">
                                    <button type="submit" class="btn btn-text read-more"><i class="bi bi-download"></i> Descargar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
            </div>
        </div>

        <!-- </div> -->
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
</body>

</html>