<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

function volverAlLogin(): void
{
    header('Location: index.php?error=1');
    exit;
}

// Validar token CSRF
$token = $_POST['csrf_token'] ?? '';

if (
    !is_string($token) ||
    empty($_SESSION['csrf_token']) ||
    !hash_equals($_SESSION['csrf_token'], $token)
) {
    volverAlLogin();
}

// Validar entradas
$email = trim($_POST['email'] ?? '');
$password = $_POST['passw'] ?? '';

if (
    !is_string($email) ||
    !is_string($password) ||
    $email === '' ||
    $password === '' ||
    strlen($email) > 190 ||
    strlen($password) > 1024
) {
    volverAlLogin();
}

// Conexión a la base de datos
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conect = new mysqli(
        'localhost',
        'copoderc_laboratorio',
        'Turnera_2020',
        'copoderc_laboratorio' // Confirmar el nombre real de la base
    );

    $conect->set_charset('utf8mb4');

    // Compatible con las contraseñas guardadas mediante SHA2(..., 256)
    $sql = "SELECT identificacion FROM usuarios_copo
                WHERE identificacion = ? AND clave = SHA2(?, 256) LIMIT 1
    ";

    $stmt = $conect->prepare($sql);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($identificacion);
        $stmt->fetch();

        // Evitar fijación de sesión
        session_regenerate_id(true);

        $_SESSION['tiempo'] = time();
        $_SESSION['colegiado'] = $identificacion;

        // Renovar el token CSRF
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

        $stmt->close();
        $conect->close();

        // header('Location: index.php');
        header('Location: biblioteca.php');
        exit;
    }

    $stmt->close();
    $conect->close();

    unset($_SESSION['tiempo'], $_SESSION['colegiado']);
    volverAlLogin();
} catch (Throwable $e) {
    // Registrar el detalle en el log del servidor, nunca en pantalla.
    error_log('Error de autenticación: ' . $e->getMessage());

    unset($_SESSION['tiempo'], $_SESSION['colegiado']);
    volverAlLogin();
}
