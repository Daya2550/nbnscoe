<?php
// Update DB credentials if needed
define('DB_HOST', 'localhost');
define('DB_NAME', 'sknscoe');
define('DB_USER', 'root');
define('DB_PASS', '2550');

// Dynamically compute the absolute base URL to this app's root directory (parent of /public)
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
$doc    = rtrim(str_replace('\\','/', $_SERVER['DOCUMENT_ROOT'] ?? ''), '/');
$app    = str_replace('\\','/', dirname(__DIR__)); // filesystem path to app root
$rel    = '';
if ($doc && strpos($app, $doc) === 0) {
    $rel = substr($app, strlen($doc));
    $rel = $rel === '' ? '' : (str_starts_with($rel, '/') ? $rel : '/' . $rel);
}
define('BASE_URL', rtrim($scheme . '://' . $host . $rel, '/'));
