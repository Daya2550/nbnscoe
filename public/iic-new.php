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
        <li class="active"><a href="#overview" data-toggle="tab" style="font-size:18px;">Institution's Innovation Council (IIC)</a></li>
        <li><a href="#ratings" data-toggle="tab" style="font-size:18px;">IIC Ratings & Certificates</a></li>
        <li><a href="#appreciation" data-toggle="tab" style="font-size:18px;">Appreciation Letters</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="overview">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Overview</h4></div>
            <p style="text-align:justify;">IIC fosters innovation and entrepreneurship through regular events: ideation, PoC, design thinking, IPR, start-up support, and mentoring. The institute has pre-incubation/incubation and IPR cells, collaborations with incubation centers, and mentoring support to other institutes.</p>
          </div>
        </div>
        <div class="tab-pane" id="ratings">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">IIC Rating Certificates</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIIC').setAttribute('src','<?php echo $pdf; ?>');">IIC Rating Certificate 2023-24</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIIC').setAttribute('src','<?php echo $pdf; ?>');">IIC Rating Certificate 2022-23</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIIC').setAttribute('src','<?php echo $pdf; ?>');">IIC Rating Certificate 2021-22</a></li>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerIIC" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh; border:1px solid #ccc;">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="appreciation">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Appreciation Letters</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIIC').setAttribute('src','<?php echo $pdf; ?>');">IIC Appreciation Letter 2023-24</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIIC').setAttribute('src','<?php echo $pdf; ?>');">IIC Appreciation Letter 2022-23</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIIC').setAttribute('src','<?php echo $pdf; ?>');">IIC Appreciation Letter 2021-22</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>