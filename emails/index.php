<?php
$csvFile = 'emails.csv';

// Configuración de autenticación HTTP
$username = 'bloemen_2601';
$password = '951Q&ijsd9';

// Verificar la autenticación
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != $username || $_SERVER['PHP_AUTH_PW'] != $password) {
    header('WWW-Authenticate: Basic realm="Acceso restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Acceso no autorizado.';
    exit;
}

// Descargar el archivo
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . basename($csvFile) . '"');
readfile($csvFile);