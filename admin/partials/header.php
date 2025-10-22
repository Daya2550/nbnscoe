<?php require_once __DIR__ . '/../../config/config.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>/admin/dashboard.php">Admin</a>
    <div>
      <a class="btn btn-outline-light btn-sm" href="<?php echo BASE_URL; ?>/admin/logout.php">Logout</a>
    </div>
  </div>
</nav>
<div class="container my-4">
