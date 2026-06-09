<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Método no permitido']);
    exit;
}

$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$tipo  = htmlspecialchars(trim($_POST['tipo_consulta'] ?? 'Sin especificar'));
$fecha = date('Y-m-d H:i:s');

if (!$email) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Email inválido']);
    exit;
}

$csv_file = __DIR__ . '/registros.csv';
$nueva_fila = [$fecha, $email, $tipo];

// Crear archivo con encabezado si no existe
if (!file_exists($csv_file)) {
    $fp = fopen($csv_file, 'w');
    fputcsv($fp, ['Fecha', 'Email', 'Tipo de consulta']);
    fclose($fp);
}

$fp = fopen($csv_file, 'a');
if ($fp === false) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'No se pudo escribir el registro']);
    exit;
}

fputcsv($fp, $nueva_fila);
fclose($fp);

echo json_encode(['ok' => true]);
