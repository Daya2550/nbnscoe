<?php
require_once __DIR__ . '/auth.php';
require_login();
$sections = require __DIR__ . '/../config/sections.php';
include __DIR__ . '/partials/header.php';
?>
<h3 class="mb-4">Dashboard</h3>
<div class="list-group">
  <?php foreach ($sections as $key => $conf): ?>
    <a class="list-group-item list-group-item-action" href="<?php echo BASE_URL; ?>/admin/section_list.php?s=<?php echo urlencode($key); ?>">
      Manage <?php echo e($conf['title']); ?>
    </a>
  <?php endforeach; ?>
  <a class="list-group-item list-group-item-action" href="<?php echo BASE_URL; ?>/admin/feedback.php">
    View Stakeholder Feedback
  </a>
</div>
<?php include __DIR__ . '/partials/footer.php'; ?>
