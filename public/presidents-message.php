<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .animated-title{display:inline-block;animation: pulseTitle 2.5s ease-in-out infinite}
  @keyframes pulseTitle{0%{transform:scale(1)}50%{transform:scale(1.03)}100%{transform:scale(1)}}
.skn-sidebar{padding-top:8px}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#message" data-toggle="tab" style="font-size:18px;">President's Message</a></li>
        <li><a href="#vision" data-toggle="tab" style="font-size:18px;">Vision</a></li>
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="message">
          <div class="sec-card">
            <div class="message"><h4 class="animated-title" style="padding-left:5px;">Prof. M. N. Navale</h4></div>
            <p style="text-align:justify;">Dear Friends, SKNSCOE strives to provide quality education across disciplines with modern infrastructure and a vibrant, student-centric learning environment. We focus on holistic development through academics, research, innovation, and industry collaboration.</p>
          </div>
        </div>
        <div class="tab-pane" id="vision">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Institutional Vision</h4></div>
            <ul>
              <li>Quality engineering education and skill development</li>
              <li>Innovation, entrepreneurship, and societal impact</li>
              <li>Ethics, leadership, and lifelong learning</li>
            </ul>
          </div>
        </div>
        <div class="tab-pane" id="downloads">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Downloads</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerPM').setAttribute('src','<?php echo $pdf; ?>');">President's Message (PDF)</a></li>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerPM" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh; border:1px solid #ccc;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
