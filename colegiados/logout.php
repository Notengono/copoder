<?php

// Iniciar la sesión si todavía no está iniciada
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Eliminar todas las variables de sesión
$_SESSION = [];

// Eliminar la cookie de sesión del navegador
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();

    setcookie(session_name(), '', [
        'expires'  => time() - 42000,
        'path'     => $params['path'],
        'domain'   => $params['domain'],
        'secure'   => $params['secure'],
        'httponly' => $params['httponly'],
        'samesite' => $params['samesite'] ?? 'Lax'
    ]);
}

// Destruir la sesión en el servidor
session_destroy();

// Redirigir al login
header('Location: index.php');
exit;
