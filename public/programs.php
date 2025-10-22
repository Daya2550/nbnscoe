<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
<?php
  $programs = [
    ['name'=>'B.Tech. (Mechanical Engineering)','year'=>'2010-11','duration'=>'Four Years','affiliation'=>'PAHSUS, Solapur','intake'=>'120'],
    ['name'=>'B.Tech. (Electronics and Telecommunication Engineering)','year'=>'2010-11','duration'=>'Four Years','affiliation'=>'PAHSUS, Solapur','intake'=>'60'],
    ['name'=>'B.Tech. (Civil Engineering)','year'=>'2010-11','duration'=>'Four Years','affiliation'=>'PAHSUS, Solapur','intake'=>'60'],
    ['name'=>'B.Tech. (Computer Science & Engineering)','year'=>'2010-11','duration'=>'Four Years','affiliation'=>'PAHSUS, Solapur','intake'=>'60'],
    ['name'=>'B.Tech. (Electrical Engineering)','year'=>'2010-11','duration'=>'Four Years','affiliation'=>'PAHSUS, Solapur','intake'=>'60'],
    ['name'=>'M.Tech. (Electronics Engineering)','year'=>'2012-13','duration'=>'Two Years','affiliation'=>'PAHSUS, Solapur','intake'=>'18'],
    ['name'=>'M.Tech. (Design Engineering)','year'=>'2012-13','duration'=>'Two Years','affiliation'=>'PAHSUS, Solapur','intake'=>'18'],
    ['name'=>'M.Tech. (Structural Engineering)','year'=>'2013-14','duration'=>'Two Years','affiliation'=>'PAHSUS, Solapur','intake'=>'18'],
    ['name'=>'M.Tech. (Computer Science & Engineering)','year'=>'2013-14','duration'=>'Two Years','affiliation'=>'PAHSUS, Solapur','intake'=>'18'],
    ['name'=>'Ph.D. (Electronics Engineering)','year'=>'2015-16','duration'=>'Three Years','affiliation'=>'PAHSUS, Solapur','intake'=>'-'],
    ['name'=>'Ph.D. (Civil Engineering)','year'=>'2019-20','duration'=>'Three Years','affiliation'=>'PAHSUS, Solapur','intake'=>'-'],
    ['name'=>'Ph.D. (Mechanical Engineering)','year'=>'2022-23','duration'=>'Three Years','affiliation'=>'PAHSUS, Solapur','intake'=>'-'],
  ];
?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .table th{background:#007bff;color:#fff}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="sec-card">
    <div class="message"><h4 style="padding-left:5px;">Programs</h4></div>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead><tr><th>Sr. No.</th><th>Name of Program</th><th>Year of Starting</th><th>Duration</th><th>Affiliation</th><th>Sanctioned Intake</th></tr></thead>
        <tbody>
          <?php $i=1; foreach ($programs as $p): ?>
            <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo htmlspecialchars($p['name'], ENT_QUOTES); ?></td>
              <td><?php echo htmlspecialchars($p['year'], ENT_QUOTES); ?></td>
              <td><?php echo htmlspecialchars($p['duration'], ENT_QUOTES); ?></td>
              <td><?php echo htmlspecialchars($p['affiliation'], ENT_QUOTES); ?></td>
              <td><?php echo htmlspecialchars($p['intake'], ENT_QUOTES); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>