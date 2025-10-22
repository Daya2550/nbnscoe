<?php
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../lib/db.php';
require_once __DIR__ . '/../lib/helpers.php';
require_login();
$sections = require __DIR__ . '/../config/sections.php';
$s = get_param('s');
$id = (int) get_param('id', 0);
if (!isset($sections[$s])) { http_response_code(404); echo 'Unknown section'; exit; }
$conf = $sections[$s];
$table = $conf['table'];
$fixed = $conf['fixed_fields'] ?? [];
$fields = $conf['fields'];
$mysqli = db();

$values = [];
if ($id) {
    // fetch existing
    $where = 'id = ?';
    $params = [$id]; $types = 'i';
    foreach ($fixed as $k=>$v) { $where .= " AND $k = ?"; $params[] = $v; $types .= 's'; }
    $stmt = $mysqli->prepare("SELECT * FROM `$table` WHERE $where LIMIT 1");
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $res = $stmt->get_result();
    $values = $res->fetch_assoc();
    if (!$values) { http_response_code(404); echo 'Not found'; exit; }
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [];
    foreach ($fields as $f) {
        $name = $f['name'];
        $type = $f['type'] ?? 'text';
        if ($type === 'checkbox') { $data[$name] = checkbox_to_bool($_POST[$name] ?? 0); }
        else { $data[$name] = trim((string)($_POST[$name] ?? '')); }
        if (!empty($f['required']) && $data[$name] === '') { $errors[$name] = $f['label'] . ' is required'; }
    }
    foreach ($fixed as $k=>$v) { $data[$k] = $v; }

    if (!$errors) {
        if ($id) {
            // update
            $cols = array_keys($data);
            $set = implode(', ', array_map(fn($c)=>"`$c`=?", $cols));
            $sql = "UPDATE `$table` SET $set WHERE id=?";
            $stmt = $mysqli->prepare($sql);
            $types = str_repeat('s', count($cols)) . 'i';
            $params = array_values($data);
            $params[] = $id;
            $stmt->bind_param($types, ...$params);
            $stmt->execute();
        } else {
            // insert
            $cols = array_keys($data);
            $place = implode(',', array_fill(0, count($cols), '?'));
            $sql = "INSERT INTO `$table` (`" . implode('`,`', $cols) . "`) VALUES ($place)";
            $stmt = $mysqli->prepare($sql);
            $types = str_repeat('s', count($cols));
            $stmt->bind_param($types, ...array_values($data));
            $stmt->execute();
        }
        redirect('/admin/section_list.php?s=' . urlencode($s));
    } else {
        $values = array_merge($values ?: [], $data);
    }
}

include __DIR__ . '/partials/header.php';
?>
<h4 class="mb-3"><?php echo e($conf['title']); ?> — <?php echo $id ? 'Edit' : 'Add'; ?></h4>
<form method="post">
  <?php foreach ($fields as $f): $name=$f['name']; $type=$f['type'] ?? 'text'; $label=$f['label']; $val=$values[$name] ?? ''; ?>
    <div class="mb-3">
      <label class="form-label"><?php echo e($label); ?><?php if(!empty($f['required'])): ?> <span class="text-danger">*</span><?php endif; ?></label>
      <?php if ($type === 'textarea'): ?>
        <textarea class="form-control" name="<?php echo e($name); ?>" rows="4"><?php echo e($val); ?></textarea>
      <?php elseif ($type === 'checkbox'): ?>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="<?php echo e($name); ?>" value="1" <?php echo !empty($val) ? 'checked' : '';?>>
          <label class="form-check-label">Yes</label>
        </div>
      <?php elseif ($type === 'select'): $opts=$f['options'] ?? []; ?>
        <select class="form-select" name="<?php echo e($name); ?>">
          <?php foreach ($opts as $opt): ?>
            <option value="<?php echo e($opt); ?>" <?php echo ($val==$opt)?'selected':''; ?>><?php echo e($opt); ?></option>
          <?php endforeach; ?>
        </select>
      <?php else: ?>
        <input class="form-control" type="<?php echo $type==='number'?'number':($type==='date'?'date':'text'); ?>" name="<?php echo e($name); ?>" value="<?php echo e($val); ?>">
      <?php endif; ?>
      <?php if (!empty($errors[$name])): ?><div class="text-danger small"><?php echo e($errors[$name]); ?></div><?php endif; ?>
    </div>
  <?php endforeach; ?>
  <button class="btn btn-primary" type="submit">Save</button>
  <a class="btn btn-secondary" href="<?php echo BASE_URL; ?>/admin/section_list.php?s=<?php echo urlencode($s); ?>">Cancel</a>
</form>
<?php include __DIR__ . '/partials/footer.php'; ?>
