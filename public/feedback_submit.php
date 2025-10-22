<?php
require_once __DIR__ . '/../lib/db.php';
require_once __DIR__ . '/../lib/helpers.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: ' . BASE_URL . '/public/academic_performance_ambience.php');
  exit;
}

$mysqli = db();

// Ensure feedback table exists
$mysqli->query("CREATE TABLE IF NOT EXISTS feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  type ENUM('student','parent','employer','alumni') NOT NULL,
  name VARCHAR(255) NULL,
  student_name VARCHAR(255) NULL,
  program VARCHAR(255) NULL,
  semester VARCHAR(64) NULL,
  batch_year VARCHAR(64) NULL,
  organization VARCHAR(255) NULL,
  contact_person VARCHAR(255) NULL,
  feedback TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

$type = strtolower(trim($_POST['type'] ?? ''));
$allowed = ['student','parent','employer','alumni'];
if (!in_array($type, $allowed, true)) {
  http_response_code(400);
  echo 'Invalid type';
  exit;
}

// Collect fields generically
$name = trim((string)($_POST['name'] ?? ''));
$student_name = trim((string)($_POST['student_name'] ?? ''));
$program = trim((string)($_POST['program'] ?? ''));
$semester = trim((string)($_POST['semester'] ?? ''));
$batch_year = trim((string)($_POST['batch_year'] ?? ''));
$organization = trim((string)($_POST['organization'] ?? ''));
$contact_person = trim((string)($_POST['contact_person'] ?? ''));
$feedback = trim((string)($_POST['feedback'] ?? ''));

if ($feedback === '') {
  http_response_code(400);
  echo 'Feedback is required';
  exit;
}

$stmt = $mysqli->prepare('INSERT INTO feedback (type, name, student_name, program, semester, batch_year, organization, contact_person, feedback) VALUES (?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('sssssssss', $type, $name, $student_name, $program, $semester, $batch_year, $organization, $contact_person, $feedback);
$stmt->execute();

?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feedback Submitted</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta http-equiv="refresh" content="2;url=<?php echo htmlspecialchars(BASE_URL . '/public/academic_performance_ambience.php', ENT_QUOTES); ?>">
</head>
<body class="bg-light d-flex align-items-center" style="min-height:100vh;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="alert alert-success shadow-sm">
          Thank you! Your feedback has been submitted.
        </div>
        <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/public/academic_performance_ambience.php">Back</a>
      </div>
    </div>
  </div>
</body>
</html>
