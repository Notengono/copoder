<!-- https://chatgpt.com/share/6ad0f870-2ab4-83e9-b778-c1de5243fe66 -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Acceso para Colegiados | Colegio de Podólogos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/estilo.css">
</head>

<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$root_url = $protocol . $_SERVER['HTTP_HOST'] . "/copoder_2026/";
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<body>
    <div class="container login-container d-flex align-items-center py-4">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-lg-10 col-xl-9">
                <div class="card login-card">
                    <div class="row g-0">

                        <!-- Formulario -->
                        <div class="col-md-7">
                            <div class="login-form">
                                <div class="login-icon" aria-hidden="true">
                                    <img src="<?php echo $root_url; ?>images/logo.jpg" class="d-block w-100" alt="COPODER">
                                </div>
                                <p class="login-brand mb-1">Colegio de Podólogos</p>
                                <p class="text-secondary mb-4">de Entre Ríos</p>


                                <h1 class="h3 fw-bold mb-2">
                                    Acceso para Colegiados
                                </h1>

                                <p class="text-secondary mb-4">
                                    Ingresá tus credenciales para acceder
                                    al área exclusiva.
                                </p>

                                <?php if (!empty($_GET['error'])): ?>
                                    <div class="alert alert-danger" role="alert">
                                        Usuario o contraseña incorrectos.
                                    </div>
                                <?php endif; ?>

                                <form action="login.php" method="POST">
                                    <input type="hidden" name="csrf_token"
                                        value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

                                    <div class="mb-3">
                                        <label for="email" class="form-label">
                                            Email o identificación
                                        </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="email"
                                            name="email"
                                            autocomplete="username"
                                            maxlength="190"
                                            required
                                            autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="passw" class="form-label">
                                            Contraseña
                                        </label>
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="passw"
                                            name="passw"
                                            autocomplete="current-password"
                                            required>
                                    </div>

                                    <button type="submit"
                                        class="btn btn-ingresar w-100 mt-2">
                                        Ingresar
                                    </button>
                                </form>

                                <div class="mt-4">
                                    <a href="recuperar-clave.php"
                                        class="text-decoration-none">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>

                                <hr class="my-4">

                                <small class="text-secondary">
                                    Acceso exclusivo para profesionales
                                    matriculados en el Colegio.
                                </small>
                            </div>
                        </div>

                        <!-- Panel institucional -->
                        <div class="col-md-5">
                            <div class="login-info h-100">
                                <h2 class="h3 fw-bold mb-3">
                                    Tu Colegio, más cerca
                                </h2>

                                <p class="mb-4">
                                    Accedé a información institucional,
                                    capacitaciones, novedades y servicios
                                    para colegiados.
                                </p>

                                <ul class="list-unstyled lh-lg mb-0">
                                    <li>✓ Información institucional</li>
                                    <li>✓ Capacitaciones y formación</li>
                                    <li>✓ Noticias y novedades</li>
                                    <li>✓ Servicios para colegiados</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <p class="text-center text-secondary small mt-3 mb-0">
                    Colegio de Podólogos de Entre Ríos
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>