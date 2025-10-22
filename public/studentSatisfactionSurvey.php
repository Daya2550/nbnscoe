<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
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
        <li class="active"><a href="#reports" data-toggle="tab" style="font-size:18px;">Student Satisfaction Survey</a></li>
        <li><a href="#summary" data-toggle="tab" style="font-size:18px;">Summary</a></li>
        <li><a href="#method" data-toggle="tab" style="font-size:18px;">Methodology</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="reports">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Student Satisfaction Survey Reports</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerSSS').setAttribute('src','<?php echo $pdf; ?>');">Student Satisfaction Survey 2024-25</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerSSS').setAttribute('src','<?php echo $pdf; ?>');">Student Satisfaction Survey 2023-24</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerSSS').setAttribute('src','<?php echo $pdf; ?>');">Student Satisfaction Survey 2022-23</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerSSS').setAttribute('src','<?php echo $pdf; ?>');">Student Satisfaction Survey 2021-22</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerSSS').setAttribute('src','<?php echo $pdf; ?>');">Student Satisfaction Survey 2020-21</a></li>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerSSS" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh; border:1px solid #ccc;">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="summary">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">SSS Summary</h4></div>
            <p>Overall satisfaction improved year-on-year with positive feedback on teaching quality, infrastructure and student support services.</p>
          </div>
        </div>
        <div class="tab-pane" id="method">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Methodology</h4></div>
            <p>Survey based on NAAC SSS template; responses collected online; results analyzed and action taken reports prepared.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
