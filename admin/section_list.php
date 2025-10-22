<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../lib/db.php';
require_once __DIR__ . '/../lib/helpers.php';
require_login();
$sections = require __DIR__ . '/../config/sections.php';
$s = get_param('s');
if (!isset($sections[$s])) { http_response_code(404); echo 'Unknown section'; exit; }
$conf = $sections[$s];
$table = $conf['table'];
$orderBy = $conf['order_by'] ?? 'id DESC';
$where = '';
$params = [];
$types = '';
if (!empty($conf['fixed_fields'])) {
    $clauses = [];
    foreach ($conf['fixed_fields'] as $k=>$v) { $clauses[] = "$k = ?"; $params[] = $v; $types .= 's'; }
    $where = 'WHERE ' . implode(' AND ', $clauses);
}
$mysqli = db();
$sql = "SELECT * FROM `$table` $where ORDER BY $orderBy";
$stmt = $params ? $mysqli->prepare($sql) : null;
if ($params) { $stmt->bind_param($types, ...$params); $stmt->execute(); $res = $stmt->get_result(); }
else { $res = $mysqli->query($sql); }
$rows = $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
include __DIR__ . '/partials/header.php';
?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="mb-0"><?php echo e($conf['title']); ?></h4>
  <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/admin/section_edit.php?s=<?php echo urlencode($s); ?>">Add New</a>
</div>
<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <?php foreach ($conf['fields'] as $f): ?>
        <th><?php echo e($f['label']); ?></th>
      <?php endforeach; ?>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($rows as $row): ?>
    <tr>
      <td><?php echo e($row['id']); ?></td>
      <?php foreach ($conf['fields'] as $f): $name=$f['name']; ?>
        <td>
          <?php if(($f['type']??'')==='checkbox'): ?>
            <?php echo !empty($row[$name]) ? 'Yes' : 'No'; ?>
          <?php else: ?>
            <?php echo e((string)($row[$name] ?? '')); ?>
          <?php endif; ?>
        </td>
      <?php endforeach; ?>
      <td>
        <a class="btn btn-sm btn-outline-secondary" href="<?php echo BASE_URL; ?>/admin/section_edit.php?s=<?php echo urlencode($s); ?>&id=<?php echo e($row['id']); ?>">Edit</a>
        <a class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this item?');" href="<?php echo BASE_URL; ?>/admin/section_delete.php?s=<?php echo urlencode($s); ?>&id=<?php echo e($row['id']); ?>">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
  <?php if (empty($rows)): ?>
    <tr><td colspan="<?php echo count($conf['fields']) + 2; ?>" class="text-muted">No records.</td></tr>
  <?php endif; ?>
  </tbody>
</table>
</div>
<?php include __DIR__ . '/partials/footer.php'; ?>
