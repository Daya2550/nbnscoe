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
        <li class="active"><a href="#overview" data-toggle="tab" style="font-size:18px;">Institutional Distinctiveness</a></li>
        <li><a href="#initiatives" data-toggle="tab" style="font-size:18px;">Key Initiatives</a></li>
        <li><a href="#impact" data-toggle="tab" style="font-size:18px;">Impact</a></li>
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="overview">
          <div class="sec-card">
            <div class="message"><h4 class="animated-title" style="padding-left:5px;">Societal Contribution of Institute Being At Holy Place</h4></div>
            <p style="text-align:justify;">SKNSCOE emphasizes holistic development of students with humanity, ethics and social sensitivity. The institute contributes to crowd management, public information and environmental awareness during the annual pilgrim events at Pandharpur through technology, NSS activities and collaborations with civic bodies.</p>
          </div>
        </div>
        <div class="tab-pane" id="initiatives">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Key Initiatives</h4></div>
            <ul>
              <li>Mobile app for routes, facilities, medical and water points.</li>
              <li>CPM/PERT-based coordination tool for Nagar Palika tasks.</li>
              <li>IoT-based river water quality awareness and cleanliness drives.</li>
              <li>Student volunteers for first-aid, traffic guidance and help desks.</li>
            </ul>
          </div>
        </div>
        <div class="tab-pane" id="impact">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Impact</h4></div>
            <ul>
              <li>Improved information dissemination to pilgrims.</li>
              <li>Recognition from local administration for social contribution.</li>
              <li>Enhanced student empathy and problem-solving in real settings.</li>
            </ul>
          </div>
        </div>
        <div class="tab-pane" id="downloads">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Downloads</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerID').setAttribute('src','<?php echo $pdf; ?>');">Institutional Distinctiveness (PDF) — View</a></li>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerID" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh; border:1px solid #ccc;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
