<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
<style>
  .table-responsive { width: 100%; overflow-x: auto; }
  .table { width: 100%; border-collapse: collapse; }
  .table th, .table td { padding: 10px; border: 1px solid #ccc; text-align: left; vertical-align: top; }
  .table th { background-color: #007bff; color: #fff; }
.skn-sidebar{padding-top:8px}
</style>
<div class="container-fluid container-mob" style="margin-top:0; padding-left:0; padding-right:0;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#about" data-toggle="tab" style="font-size:18px;">About Department</a></li>
        <li><a href="#vm" data-toggle="tab" style="font-size:18px;">Vision and Mission</a></li>
        <li><a href="#po" data-toggle="tab" style="font-size:18px;">Program Outcomes (POs)</a></li>
        <li><a href="#pso" data-toggle="tab" style="font-size:18px;">Program Specific Outcome (PSOs)</a></li>
        <li><a href="#peo" data-toggle="tab" style="font-size:18px;">Program Educational Objectives (PEOs)</a></li>
        <li><a href="#co" data-toggle="tab" style="font-size:18px;">Course Outcomes (COs)</a></li>
        <li><a href="#faculty" data-toggle="tab" style="font-size:18px;">Faculty Details</a></li>
        <li><a href="#labs" data-toggle="tab" style="font-size:18px;">About Laboratories</a></li>
        <li><a href="#industrial_visits" data-toggle="tab" style="font-size:18px;">Department Industrial Visits</a></li>
        <li><a href="#internships" data-toggle="tab" style="font-size:18px;">Department Internships</a></li>
        <li><a href="#newsletter" data-toggle="tab" style="font-size:18px;">Newsletter</a></li>
        <li><a href="#mous" data-toggle="tab" style="font-size:18px;">MoUs</a></li>
        <li><a href="#achievements" data-toggle="tab" style="font-size:18px;">Achievements</a></li>
        <li><a href="#research" data-toggle="tab" style="font-size:18px;">Research Contribution</a></li>
        <li><a href="#result" data-toggle="tab" style="font-size:18px;">Result</a></li>
        <li><a href="#association" data-toggle="tab" style="font-size:18px;">Student Association</a></li>
        <li><a href="#seminars" data-toggle="tab" style="font-size:18px;">Seminars/ Workshops</a></li>
        <li><a href="#gallery" data-toggle="tab" style="font-size:18px;">Gallery</a></li>
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
      </ul>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="text-container"><span class="animated-text">CIVIL ENGINEERING</span></div><br>
      <div class="tab-content">
        <div class="tab-pane active" id="about">
          <div class="inner_wrapper"><div class="inner_section"><div class="row"><div class="col-md-12">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12" style=" float: right; ">
              <img class="delay-03s img-rounded wow zoomIn" src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/img/Departments/civil_hod.jpg" style="width: 100%;" alt="">
              <h4 align="center">Head of Department</h4>
              <h6 align="center">M.Tech, Ph.D.</h6>
            </div>
            <p>
              The Department of Civil Engineering was established in 2010 with an intake of 60. It offers quality education with well-equipped laboratories and experienced faculty. The department regularly organizes expert talks, workshops, industrial visits and value added programs.
            </p>
          </div></div></div></div>
        </div>

        <div class="tab-pane" id="vm">
          <section>
            <div class="inner_wrapper">
              <div class="row"><div class="col-lg-10 col-md-10 col-sm-10">
                <div class="message"><h4 style="padding-left:5px;">Vision</h4></div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <p style="text-align:justify; font-size:14px;">To be a center of excellence in Civil Engineering education nurturing competent professionals with ethical values.</p>
                </div>
              </div></div>
              <div class="row"><div class="col-lg-10 col-md-10 col-sm-10">
                <div class="message"><h4 style="padding-left:5px;">Mission</h4></div>
                <div class="col-lg-12">
                  <ul style="text-align:justify">
                    <li>M1: Provide strong fundamentals and practical exposure.</li>
                    <li>M2: Encourage innovation, research and industry interaction.</li>
                    <li>M3: Inculcate ethics, teamwork and social responsibility.</li>
                  </ul>
                </div>
              </div></div>
            </div>
          </section>
        </div>

        <div class="tab-pane" id="po">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Program Outcomes (POs)</h4></div>
            <p>Same as standard Engineering graduate POs.</p>
          </div></div></div>
        </div>

        <div class="tab-pane" id="pso">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Program Specific Outcomes (PSOs)</h4></div>
            <ul><li>PSO1: Apply Civil engineering concepts and modern tools.</li><li>PSO2: Plan, analyze and design civil infrastructure.</li></ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="peo">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Program Educational Objectives (PEOs)</h4></div>
            <ul><li>PEO1: Employability</li><li>PEO2: Higher studies and research</li><li>PEO3: Ethics and leadership</li></ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="co">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Course Outcomes (COs)</h4></div>
            <div class="pdf-viewer"><embed id="pdfViewerCO" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="faculty">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Faculty Details</h4></div><br>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Sr.No</th><th>Staff Name</th><th>Qualification</th><th>Designation</th><th>Experience (years)</th></tr></thead>
                <tbody>
                  <tr><td>1</td><td>Dr. A. B. Civil</td><td>M.Tech, Ph.D.</td><td>HoD & Professor</td><td>15</td></tr>
                  <tr><td>2</td><td>Mr. C. D. Expert</td><td>M.E.</td><td>Assistant Professor</td><td>10</td></tr>
                </tbody>
              </table>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="labs">
          <div class="service_wrapper"><div class="inner_section">
            <h3 class="title">Surveying Lab</h3>
            <p>Equipped with Total Station, Theodolite, Levels.</p>
            <h3 class="title">Concrete Technology Lab</h3>
            <p>Mix design, testing of materials and concrete.</p>
          </div></div>
        </div>

        <div class="tab-pane" id="industrial_visits">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Department Industrial Visits</h4></div>
            <ul><li>Metro construction site, Pune — 2024</li><li>RMC Plant, Solapur — 2023</li></ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="internships">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Department Internships</h4></div>
            <div class="table-responsive"><table class="table table-striped"><thead><tr><th>Company</th><th>Topic</th><th>Duration</th><th>Year</th></tr></thead><tbody>
              <tr><td>L&T</td><td>Site Supervision</td><td>6 weeks</td><td>2024</td></tr>
            </tbody></table></div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="newsletter">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Newsletter</h4></div>
            <ul><li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerDL').setAttribute('src','<?php echo $pdf; ?>');">Department Newsletter 2024</a></li></ul>
            <div class="pdf-viewer"><embed id="pdfViewerDL" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="mous">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">MoUs</h4></div>
            <ul><li>MoU with ABC Constructions — Training & Projects</li></ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="achievements">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Achievements</h4></div>
            <ul><li>Student team won Bridge Design Contest — 2024</li></ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="research">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Research Contribution</h4></div>
            <ul><li>Publications in materials and structural engineering.</li></ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="result">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Result</h4></div>
            <div class="table-responsive"><table class="table table-striped"><thead><tr><th>AY</th><th>Pass %</th></tr></thead><tbody><tr><td>2023-24</td><td>90%</td></tr></tbody></table></div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="association">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Student Association</h4></div>
            <p>CESA conducts technical events, workshops and social activities.</p>
          </div></div></div>
        </div>

        <div class="tab-pane" id="seminars">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Seminars/ Workshops</h4></div>
            <ul><li>Career opportunities in Civil Engineering — 2024</li></ul>
          </div></div></div>
        </div>

        <div class="tab-pane" id="gallery">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Gallery</h4></div>
            <div class="row">
              <div class="col-sm-3"><img src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/img/Slider/111.webp" class="img-rounded" alt="Lab"></div>
              <div class="col-sm-3"><img src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/img/Slider/College.webp" class="img-rounded" alt="Visit"></div>
            </div>
          </div></div></div>
        </div>

        <div class="tab-pane" id="downloads">
          <div class="inner_wrapper"><div class="row"><div class="col-lg-12">
            <div class="message"><h4 style="padding-left:5px;">Downloads</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerDL2').setAttribute('src','<?php echo $pdf; ?>');">Syllabus (PDF)</a></li>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerDL2').setAttribute('src','<?php echo $pdf; ?>');">Timetable (PDF)</a></li>
            </ul>
            <div class="pdf-viewer"><embed id="pdfViewerDL2" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
          </div></div></div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
