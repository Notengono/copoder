<?php
// Detecta dinámicamente si usas http o https y la carpeta del proyecto
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$root_url = $protocol . $_SERVER['HTTP_HOST'] . "/";
// $root_url = $protocol . $_SERVER['HTTP_HOST'] . "/copoder_2026/";
?>

<!-- ========================================================= -->
<!-- BARRA SUPERIOR -->
<!-- ========================================================= -->

<div class="topbar">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="topbar-info">
                Colegio de Podólogos de Entre Ríos
            </div>
            <div class="social-links">
                <a href="#" aria-label="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#" aria-label="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://wa.me/5493434477339?text=Hola%2C%20quería%20hacer%20una%20consulta" target="_blank" aria-label="WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a href="#" aria-label="YouTube">
                    <i class="bi bi-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- ========================================================= -->
<!-- NAVBAR -->
<!-- ========================================================= -->

<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand" href="https://colegiodepodologosdeentrerios.ar/">
            <div class="logo-container">
                <div class="logo-placeholder">
                    <img src="<?php echo $root_url; ?>images/logo.jpg" class="d-block w-100" alt="COPODER">
                </div>

                <div class="logo-text">
                    <strong>
                        Colegio de Podólogos
                    </strong>
                    <span>
                        de Entre Ríos
                    </span>
                </div>
            </div>
        </a>
        <!-- BOTÓN MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- MENU -->
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="biblioteca.php">
                        Biblioteca
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informacion.php">
                        Información
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reglamento.php">
                        Reglamentación
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn" href="logout.php">Salir</a>
                </li>
            </ul>

        </div>

    </div>
</nav>