<?php
// Ambil URI dari request
$request = $_SERVER['REQUEST_URI'];

// Bersihkan URI dari query string
$request = strtok($request, '?');

// Definisikan rute
switch ($request) {
    case '/crud':
    case '/crud/':
        require __DIR__ . '/frontend/index.php';
        break;
    case '/crud/about':
        require __DIR__ . '/frontend/about.php';
        break;
    case '/crud/contact':
        require __DIR__ . '/frontend/contact.php';
        break;
    // Tambahkan rute lainnya sesuai kebutuhan
    default:
        http_response_code(404);
        require __DIR__ . '/frontend/404.php';
        break;
}
