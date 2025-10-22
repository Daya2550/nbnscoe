<?php
function e($s): string { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function redirect(string $path): void { header('Location: ' . BASE_URL . $path); exit; }
function get_param(string $k, $d=null) { return $_GET[$k] ?? $d; }
function post_param(string $k, $d=null) { return $_POST[$k] ?? $d; }
function checkbox_to_bool($v): int { return !empty($v) ? 1 : 0; }
