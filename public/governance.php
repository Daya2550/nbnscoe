<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
<?php
  $policies = [
    'Administrative Setup','Deans and HoDs','Governing Policy Documents','Campus Clinic','Faculty Policy','Consultancy and Testing Policy','E-Governing Policy','Earn and Learn Scheme Policy','Examination Grievances Policy','FDP STTP Conference Circular','HR & Recruitment Policy','ICA ISE Policy and Rubrics','IT Policies','Best Department & Best Teacher Award','Innovation and Start-Up Policy','Internship Policy','Library Policy','Energy, Waste, Water Policies','MOOCs Courses Policy','Free of Cost Infrastructure Use','Ban of Plastic','Wearing Helmet','Publication Policy','Purchase Policy','Scrap Policy','Slow and Advanced Learner Policy','Student Welfare Policy','T&P Policy','Teacher Guardian (TG) System','Teacher Training Policy'
  ];
  $audit_years = ['2020-21','2021-22','2022-23','2023-24'];
?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .table th{background:#007bff;color:#fff}
.skn-sidebar{padding-top:8px}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#policies" data-toggle="tab" style="font-size:18px;">Policies</a></li>
        <li><a href="#audit" data-toggle="tab" style="font-size:18px;">Academic Audit</a></li>
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="policies">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Governing Policies</h4></div>
            <ul>
              <?php foreach ($policies as $p): ?>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerGovPol').setAttribute('src','<?php echo $pdf; ?>');"><?php echo htmlspecialchars($p, ENT_QUOTES); ?></a></li>
              <?php endforeach; ?>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerGovPol" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="audit">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Academic Audit Report</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Sr. No.</th><th>Academic Year</th><th>Report</th></tr></thead>
                <tbody>
                  <?php $i=1; foreach ($audit_years as $y): ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo htmlspecialchars($y, ENT_QUOTES); ?></td>
                      <td><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerAudit').setAttribute('src','<?php echo $pdf; ?>');">View</a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="pdf-viewer">
              <embed id="pdfViewerAudit" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="downloads">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Downloads</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerGovPol').setAttribute('src','<?php echo $pdf; ?>');">Policy Compendium (PDF)</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>