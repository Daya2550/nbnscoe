<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../lib/db.php';
require_once __DIR__ . '/../lib/helpers.php';
require_login();
$sections = require __DIR__ . '/../config/sections.php';
$s = get_param('s');
$id = (int) get_param('id');
if (!$s || !$id || !isset($sections[$s])) { http_response_code(400); echo 'Bad request'; exit; }
$conf = $sections[$s];
$table = $conf['table'];
$mysqli = db();
$where = 'id = ?';
$params = [$id];
$types = 'i';
if (!empty($conf['fixed_fields'])) {
    foreach ($conf['fixed_fields'] as $k=>$v) { $where .= " AND $k = ?"; $params[] = $v; $types .= 's'; }
}
$stmt = $mysqli->prepare("DELETE FROM `$table` WHERE $where");
$stmt->bind_param($types, ...$params);
$stmt->execute();
redirect('/admin/section_list.php?s=' . urlencode($s));
