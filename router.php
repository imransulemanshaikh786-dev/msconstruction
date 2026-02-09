<?php
// router.php
// This script allows PHP's built-in server to parse HTML files as PHP,
// mimicking the .htaccess configuration: AddType application/x-httpd-php .html

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// If root request, serve index.html
if ($uri === '/' || $uri === '/index.php') {
    $uri = '/index.html';
}

$file = __DIR__ . $uri;

// If the file exists
if (file_exists($file) && !is_dir($file)) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);

    // If it's an HTML file, include it (executing any PHP inside)
    if ($ext === 'html' || $ext === 'htm') {
        include $file;
        return true;
    }

    // For other files (css, js, images), return false to let the built-in server handle them
    return false;
}

// If file doesn't exist, return false (404 will be handled by server)
return false;

