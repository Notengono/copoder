<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$tiempoMaximoInactividad = 1800; // 30 minutos

if (
    empty($_SESSION['colegiado']) ||
    empty($_SESSION['tiempo']) ||
    (time() - $_SESSION['tiempo']) > $tiempoMaximoInactividad
) {
    $_SESSION = [];

    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();

        setcookie(session_name(), '', [
            'expires'  => time() - 42000,
            'path'     => $params['path'],
            'domain'   => $params['domain'],
            'secure'   => $params['secure'],
            'httponly' => $params['httponly'],
            'samesite' => 'Lax'
        ]);
    }

    session_destroy();

    header('Location: index.php');
    exit;
}

// Renovar el tiempo de actividad
$_SESSION['tiempo'] = time();
