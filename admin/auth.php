<?php
session_start();
require_once __DIR__ . '/../lib/db.php';
require_once __DIR__ . '/../lib/helpers.php';

function require_login(): void {
    if (empty($_SESSION['user_id'])) {
        redirect('/admin/login.php');
    }
}

function attempt_login(string $username, string $password): bool {
    $mysqli = db();
    // Bootstrap admin if no users exist
    $res = $mysqli->query('SELECT COUNT(*) AS c FROM users');
    $row = $res ? $res->fetch_assoc() : ['c' => 0];
    if ((int)$row['c'] === 0) {
        $stmt = $mysqli->prepare('INSERT INTO users (username, password_hash) VALUES (?, ?)');
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param('ss', $username, $hash);
        $stmt->execute();
    }

    $stmt = $mysqli->prepare('SELECT id, password_hash FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->bind_result($id, $hash);
    if ($stmt->fetch() && password_verify($password, $hash)) {
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $username;
        return true;
    }
    return false;
}
