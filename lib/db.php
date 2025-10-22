<?php
require_once __DIR__ . '/../config/config.php';

function db(): mysqli {
    static $mysqli = null;
    if ($mysqli === null) {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($mysqli->connect_errno) {
            http_response_code(500);
            echo 'Database connection failed: ' . htmlspecialchars($mysqli->connect_error, ENT_QUOTES, 'UTF-8');
            exit;
        }
        $mysqli->set_charset('utf8mb4');
    }
    return $mysqli;
}
