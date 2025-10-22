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
        <li class="active"><a href="#overview" data-toggle="tab" style="font-size:18px;">IQAC Overview</a></li>
        <li><a href="#functions" data-toggle="tab" style="font-size:18px;">Functions</a></li>
        <li><a href="#composition" data-toggle="tab" style="font-size:18px;">Composition</a></li>
        <li><a href="#minutes" data-toggle="tab" style="font-size:18px;">Minutes of Meetings</a></li>
        <li><a href="#initiatives" data-toggle="tab" style="font-size:18px;">Quality Initiatives</a></li>
        <li><a href="#aqar" data-toggle="tab" style="font-size:18px;">AQAR Preparation</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="overview">
          <div class="sec-card">
            <div class="message"><h4 class="animated-title" style="padding-left:5px;">Internal Quality Assurance Cell (IQAC)</h4></div>
            <p style="text-align:justify;">IQAC fosters quality culture by planning, guiding and monitoring Quality Assurance (QA) and Quality Enhancement (QE) activities. It coordinates and documents academic and administrative processes, feedback, and continuous improvement.</p>
          </div>
        </div>
        <div class="tab-pane" id="functions">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Functions of IQAC</h4></div>
            <ul>
              <li>Facilitate learner-centric environment and faculty development.</li>
              <li>Arrange feedback from stakeholders on quality processes.</li>
              <li>Disseminate information on quality parameters.</li>
              <li>Organize workshops/seminars and promote quality circles.</li>
              <li>Document quality improvement programs/activities.</li>
              <li>Act as nodal agency for best practices and benchmarking.</li>
              <li>Prepare and submit AQAR to NAAC.</li>
            </ul>
          </div>
        </div>
        <div class="tab-pane" id="composition">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">IQAC Composition</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Name</th><th>Role</th><th>Affiliation</th></tr></thead>
                <tbody>
                  <tr><td>Dr. Principal</td><td>Chairperson</td><td>Head of Institution</td></tr>
                  <tr><td>Dean Academics</td><td>Coordinator</td><td>Internal Member</td></tr>
                  <tr><td>HoDs (All)</td><td>Members</td><td>Departments</td></tr>
                  <tr><td>Industry Expert</td><td>External Member</td><td>Industry</td></tr>
                  <tr><td>Alumni Representative</td><td>Member</td><td>Alumni</td></tr>
                  <tr><td>Student Representative</td><td>Member</td><td>Student</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="minutes">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Minutes of IQAC Meetings</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIQAC').setAttribute('src','/public/assets/vendor/sknscoe/pdf/dj.pdf');">Minutes of Meeting — 12 June, 2025</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIQAC').setAttribute('src','<?php echo $pdf; ?>');">Minutes of Meeting — 10 Feb, 2025</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIQAC').setAttribute('src','<?php echo $pdf; ?>');">Minutes of Meeting — 10 Aug, 2024</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIQAC').setAttribute('src','<?php echo $pdf; ?>');">Minutes of Meeting — 06 April, 2024</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerIQAC').setAttribute('src','<?php echo $pdf; ?>');">Minutes of Meeting — 14 Dec, 2023</a></li>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerIQAC" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh; border:1px solid #ccc;">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="initiatives">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Quality Initiatives</h4></div>
            <ul>
              <li>Outcome Based Education (OBE) implementation and review.</li>
              <li>Curriculum enrichment and value-added programs.</li>
              <li>Feedback collection, analysis and action taken report (ATR).</li>
              <li>Faculty development programs (FDPs) and workshops.</li>
            </ul>
          </div>
        </div>
        <div class="tab-pane" id="aqar">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">AQAR Preparation</h4></div>
            <p>IQAC consolidates department submissions, verifies metrics and compiles the Annual Quality Assurance Report (AQAR) as per NAAC guidelines.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
