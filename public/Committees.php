<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
<?php
  $committees = [
    'Admission Committee','Alumni Meet Committee','Anti-Ragging Committee','Central Purchase Committee','Competitive Exams Cell','Cultural Committee','Data Center & Website Committee','Examination Committee','Finance Committee','Grievance Redressal Committee','Library Committee','NSS Committee','Research Committee','Sports Committee','T&P Committee'
  ];
?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
.skn-sidebar{padding-top:8px}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#all" data-toggle="tab" style="font-size:18px;">All Committees</a></li>
        <li><a href="#roles" data-toggle="tab" style="font-size:18px;">Roles & Responsibilities</a></li>
        <li><a href="#minutes" data-toggle="tab" style="font-size:18px;">Minutes of Meetings</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="all">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Committees</h4></div>
            <ul>
              <?php foreach ($committees as $c): ?>
                <li><?php echo htmlspecialchars($c, ENT_QUOTES); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="tab-pane" id="roles">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Committee Roles & Responsibilities</h4></div>
            <ul>
              <?php foreach ($committees as $c): ?>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerCR').setAttribute('src','<?php echo $pdf; ?>'); "><?php echo htmlspecialchars($c, ENT_QUOTES); ?> — Roles & Responsibilities (PDF)</a></li>
              <?php endforeach; ?>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerCR" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="minutes">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Minutes of Meetings</h4></div>
            <ul>
              <?php foreach ($committees as $c): ?>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerCM').setAttribute('src','<?php echo $pdf; ?>'); "><?php echo htmlspecialchars($c, ENT_QUOTES); ?> — Minutes (PDF)</a></li>
              <?php endforeach; ?>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerCM" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>