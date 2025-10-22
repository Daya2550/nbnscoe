<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../lib/db.php';
require_once __DIR__ . '/../lib/helpers.php';
require_login();
$mysqli = db();
$res = $mysqli->query('SELECT * FROM feedback ORDER BY created_at DESC, id DESC');
$rows = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
include __DIR__ . '/partials/header.php';
?>
<h4 class="mb-3">Stakeholder Feedback</h4>
<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Name</th>
        <th>Student Name</th>
        <th>Program</th>
        <th>Semester</th>
        <th>Batch/Year</th>
        <th>Organization</th>
        <th>Contact Person</th>
        <th>Feedback</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $r): ?>
        <tr>
          <td><?php echo e($r['id']); ?></td>
          <td><?php echo e($r['type']); ?></td>
          <td><?php echo e($r['name']); ?></td>
          <td><?php echo e($r['student_name']); ?></td>
          <td><?php echo e($r['program']); ?></td>
          <td><?php echo e($r['semester']); ?></td>
          <td><?php echo e($r['batch_year']); ?></td>
          <td><?php echo e($r['organization']); ?></td>
          <td><?php echo e($r['contact_person']); ?></td>
          <td style="white-space:pre-wrap;max-width:400px;">&ldquo;<?php echo e($r['feedback']); ?>&rdquo;</td>
          <td><?php echo e($r['created_at']); ?></td>
        </tr>
      <?php endforeach; ?>
      <?php if (empty($rows)): ?>
        <tr><td colspan="11" class="text-muted">No feedback yet.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>
<?php include __DIR__ . '/partials/footer.php'; ?>
