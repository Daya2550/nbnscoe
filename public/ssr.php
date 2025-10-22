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
        <li class="active"><a href="#ssr" data-toggle="tab" style="font-size:18px;">Self Study Report (SSR)</a></li>
        <li><a href="#annex" data-toggle="tab" style="font-size:18px;">Annexures</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="ssr">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Self Study Report</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerSSR').setAttribute('src','<?php echo $pdf; ?>');">NAAC SSR First Cycle</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerSSR').setAttribute('src','<?php echo $pdf; ?>');">NAAC SSR Second Cycle</a></li>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerSSR" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh; border:1px solid #ccc;">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="annex">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Annexures</h4></div>
            <ul>
              <li><a target="_blank" href="<?php echo $pdf; ?>">Annexure I</a></li>
              <li><a target="_blank" href="<?php echo $pdf; ?>">Annexure II</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
