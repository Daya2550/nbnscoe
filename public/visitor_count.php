<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');


require_once dirname(__DIR__) . '/config/config.php';

$count = 0;
$incremented = true;

// Connect to DB
$mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($mysqli->connect_errno) {
    http_response_code(200);
    echo json_encode(['count' => $count, 'incremented' => false, 'error' => 'db_connect_failed']);
    exit;
}
$mysqli->set_charset('utf8mb4');

// Ensure table exists (single row keyed by id=1)
$createSql = "CREATE TABLE IF NOT EXISTS visitor_counter (
    id TINYINT UNSIGNED NOT NULL PRIMARY KEY,
    count BIGINT UNSIGNED NOT NULL DEFAULT 0,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
$mysqli->query($createSql);

// Seed row if missing
$mysqli->query("INSERT IGNORE INTO visitor_counter (id, count) VALUES (1, 0)");

// Increment on every request
$mysqli->query("UPDATE `visitor_counter` SET `count` = `count` + 1 WHERE `id` = 1");

$res = $mysqli->query("SELECT `count` AS cnt FROM `visitor_counter` WHERE `id` = 1");
if ($res && ($row = $res->fetch_assoc())) {
    $count = (int)$row['cnt'];
}

if ($res) { $res->free(); }
$mysqli->close();

echo json_encode(['count' => $count, 'incremented' => $incremented]);
