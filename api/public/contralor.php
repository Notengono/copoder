<?php
// apiProxy.php
// Proxy simple y seguro para reenviar peticiones desde el frontend (HTTPS) a un backend HTTP interno.
// CONFIGURA ESTOS VALORES ANTES DE USAR:
$BACKEND_BASE = "http://190.57.232.173/contralor/api/public/index.php/"; // <<-- backend real (HTTP)
$ALLOWED_PREFIXES = ["profesionales", "otraEntidad"]; // <<-- rutas permitidas para evitar proxy abierto

// ---- No tocar más abajo salvo que sepas lo que hacés ----

// Obtener la parte de la ruta luego de /apiProxy.php/ o /apiProxy/ (según cómo lo expongas)
$reqUri = $_SERVER['REQUEST_URI'];
$scriptName = $_SERVER['SCRIPT_NAME'];
// quitamos la parte del script para quedarnos con la "ruta" del recurso
$path = preg_replace('#^' . preg_quote(dirname($scriptName), '#') . '#', '', $reqUri);
$path = preg_replace('#^/+#', '', $path);

// Si expones como apiProxy.php (sin rewrite), obtener ruta manual:
if (empty($path) && isset($_GET['r'])) {
    $path = ltrim($_GET['r'], '/');
}

// Separar query string si existe
$queryString = $_SERVER['QUERY_STRING'];

// Validar path: bloquear requests vacíos
if (empty($path)) {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(["error" => "Bad request - no path provided"]);
    exit;
}

// Validar que la ruta comience con alguno de los prefijos permitidos
$firstSegment = explode('/', $path)[1];
$secondSegment = explode('/', $path)[2];
if (!in_array($firstSegment, $ALLOWED_PREFIXES, true)) {
    http_response_code(403);
    header('Content-Type: application/json');
    echo json_encode(["error" => "Forbidden - path not allowed"]);
    exit;
}

$path_aux = $firstSegment . '/' . $secondSegment;

// Construir URL destino
$target = rtrim($BACKEND_BASE, '/') . '/' . $path_aux;
if (!empty($queryString)) $target .= '?' . $queryString;

// Preparar cURL
$ch = curl_init($target);

// Determinar método
$method = $_SERVER['REQUEST_METHOD'];
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

// Pasar body en caso de POST/PUT/PATCH/DELETE
$input = file_get_contents('php://input');
if ($input !== false && strlen($input) > 0) {
    curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
}

// Forward headers from client (except Host, Content-Length)
$forwardHeaders = [];
// foreach (getallheaders() as $name => $value) {
//     $lower = strtolower($name);
//     if (in_array($lower, ['host', 'content-length'])) continue;
//     // Mantener Authorization si viene desde front (si corresponde)
//     $forwardHeaders[] = $name . ': ' . $value;
// }
// // Forzar content-type si no se pasó y hay body
// if (!array_filter($forwardHeaders, fn($h)=>stripos($h,'content-type')!==false) && !empty($input)) {
$forwardHeaders[] = 'Content-Type: application/json';
// }
curl_setopt($ch, CURLOPT_HTTPHEADER, $forwardHeaders);

// Opciones: recibir body como string y seguir location (si necesario)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

// Ejecutar
$response = curl_exec($ch);

$curlErr = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

curl_close($ch);

if ($response === false) {
    http_response_code(502);
    header('Content-Type: application/json');
    echo json_encode(["error" => "Bad gateway", "detail" => $curlErr]);
    exit;
}

// Reenviar status y Content-Type al navegador
if (!empty($contentType)) header('Content-Type: ' . $contentType);
http_response_code($httpCode);

// Imprimir body tal cual
echo $response;
