<?php
// Root index.php: redirect to project public directory
$target = '/public/';
// Avoid redirect loop
if (!isset($_SERVER['REQUEST_URI']) || $_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '') {
    header('Location: ' . $target, true, 302);
    echo '<!doctype html><html><head><meta http-equiv="refresh" content="0; url=' . htmlspecialchars($target, ENT_QUOTES) . '"><title>Redirecting…</title></head><body>Redirecting to <a href="' . htmlspecialchars($target, ENT_QUOTES) . '">project</a>…</body></html>';
    exit;
}
// If someone hits another path here, just send them along
header('Location: ' . $target, true, 302);
echo '<!doctype html><html><head><meta http-equiv="refresh" content="0; url=' . htmlspecialchars($target, ENT_QUOTES) . '"><title>Redirecting…</title></head><body>Redirecting to <a href="' . htmlspecialchars($target, ENT_QUOTES) . '">project</a>…</body></html>';
