<?php require_once __DIR__ . '/../templates/header.php'; ?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .download-list a{display:block;margin:6px 0;color:#b6124a}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row">
    <div class="col-md-12">
      <div class="message"><h4 style="padding-left:5px;">Academic Calendar</h4></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="sec-card">
        <div class="download-list">
          <a href="<?php echo BASE_URL; ?>/public/assets/academic/calendar/Academic_Calendar_2024-25.pdf" target="_blank">Academic Calendar 2024-25</a>
          <a href="<?php echo BASE_URL; ?>/public/assets/academic/calendar/Academic_Calendar_2023-24.pdf" target="_blank">Academic Calendar 2023-24</a>
          <a href="<?php echo BASE_URL; ?>/public/assets/academic/calendar/Academic_Calendar_2022-23.pdf" target="_blank">Academic Calendar 2022-23</a>
          <a href="<?php echo BASE_URL; ?>/public/assets/academic/calendar/Academic_Calendar_2021-22.pdf" target="_blank">Academic Calendar 2021-22</a>
          <a href="<?php echo BASE_URL; ?>/public/assets/academic/calendar/Academic_Calendar_2020-21.pdf" target="_blank">Academic Calendar 2020-21</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="sec-card">
        <div class="message"><h4 style="padding-left:5px;">Downloads</h4></div>
        <div class="download-list">
          <a href="<?php echo BASE_URL; ?>/public/assets/other/AICTE-Rules-Ragging.pdf" target="_blank">Anti Ragging Act</a>
          <a href="<?php echo BASE_URL; ?>/public/assets/other/rti-act.pdf" target="_blank">RTI Act</a>
          <a href="<?php echo BASE_URL; ?>/public/assets/downloads/Mandatory_Disclosure.pdf" target="_blank">Mandatory Disclosure</a>
          <a href="<?php echo BASE_URL; ?>/public/assets/downloads/SKNSCOE-Brochure.pdf" target="_blank">College Brochure</a>
        </div>
      </div>
      <div class="sec-card">
        <div class="message"><h4 style="padding-left:5px;">Contact</h4></div>
        <p>
          Gat No. 664, SKN Sinhgad College of Engineering,<br>
          A/P Korti, Pandharpur, Solapur (413304)<br>
          Mobile: <a href="tel:+917350508899">+91 7350508899</a><br>
          Email: <a href="mailto:principal@sknscoe.ac.in">principal@sknscoe.ac.in</a>
        </p>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
