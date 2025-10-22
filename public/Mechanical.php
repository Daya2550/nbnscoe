<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
<style>
  .table th{background:#007bff;color:#fff}
.skn-sidebar{padding-top:8px}
</style>
<div class="container-fluid" style="margin-top:0; padding-left:0; padding-right:0;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#about" data-toggle="tab" style="font-size:18px;">About Department</a></li>
        <li><a href="#vm" data-toggle="tab" style="font-size:18px;">Vision and Mission</a></li>
        <li><a href="#po" data-toggle="tab" style="font-size:18px;">POs</a></li>
        <li><a href="#pso" data-toggle="tab" style="font-size:18px;">PSOs</a></li>
        <li><a href="#peo" data-toggle="tab" style="font-size:18px;">PEOs</a></li>
        <li><a href="#co" data-toggle="tab" style="font-size:18px;">COs</a></li>
        <li><a href="#faculty" data-toggle="tab" style="font-size:18px;">Faculty</a></li>
        <li><a href="#labs" data-toggle="tab" style="font-size:18px;">Labs</a></li>
        <li><a href="#visits" data-toggle="tab" style="font-size:18px;">Industrial Visits</a></li>
        <li><a href="#internships" data-toggle="tab" style="font-size:18px;">Internships</a></li>
        <li><a href="#newsletter" data-toggle="tab" style="font-size:18px;">Newsletter</a></li>
        <li><a href="#mous" data-toggle="tab" style="font-size:18px;">MoUs</a></li>
        <li><a href="#achievements" data-toggle="tab" style="font-size:18px;">Achievements</a></li>
        <li><a href="#research" data-toggle="tab" style="font-size:18px;">Research</a></li>
        <li><a href="#result" data-toggle="tab" style="font-size:18px;">Result</a></li>
        <li><a href="#association" data-toggle="tab" style="font-size:18px;">Association</a></li>
        <li><a href="#seminars" data-toggle="tab" style="font-size:18px;">Seminars</a></li>
        <li><a href="#gallery" data-toggle="tab" style="font-size:18px;">Gallery</a></li>
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="text-container"><span class="animated-text">MECHANICAL ENGINEERING</span></div><br>
      <div class="tab-content">
        <div class="tab-pane active" id="about"><p>Mechanical Engineering department with Design, Thermal, and Manufacturing labs; strong project-based learning and industry tie-ups.</p></div>
        <div class="tab-pane" id="vm"><ul><li>Vision: Excellence in Mechanical Engineering.</li><li>Mission: Practical skills, research, ethics.</li></ul></div>
        <div class="tab-pane" id="po"><p>Standard POs.</p></div>
        <div class="tab-pane" id="pso"><ul><li>PSO1: Design and analysis.</li><li>PSO2: Manufacturing and management.</li></ul></div>
        <div class="tab-pane" id="peo"><ul><li>PEO1: Career</li><li>PEO2: Higher studies</li><li>PEO3: Ethics</li></ul></div>
        <div class="tab-pane" id="co"><embed src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
        <div class="tab-pane" id="faculty"><table class="table table-striped"><thead><tr><th>Sr</th><th>Name</th><th>Qual</th><th>Desig</th></tr></thead><tbody><tr><td>1</td><td>Dr. Mech HoD</td><td>Ph.D.</td><td>Professor</td></tr></tbody></table></div>
        <div class="tab-pane" id="labs"><ul><li>Design Lab</li><li>Thermal Lab</li><li>CAD/CAM Lab</li></ul></div>
        <div class="tab-pane" id="visits"><ul><li>Thermal power plant visit — 2023</li></ul></div>
        <div class="tab-pane" id="internships"><table class="table table-striped"><thead><tr><th>Student</th><th>Company</th></tr></thead><tbody><tr><td>Sample</td><td>Tata Motors</td></tr></tbody></table></div>
        <div class="tab-pane" id="newsletter"><ul><li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfME').setAttribute('src','<?php echo $pdf; ?>');">Newsletter</a></li></ul><embed id="pdfME" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
        <div class="tab-pane" id="mous"><ul><li>MoU with OEM Partner — 2023</li></ul></div>
        <div class="tab-pane" id="achievements"><ul><li>Project competition awards.</li></ul></div>
        <div class="tab-pane" id="research"><ul><li>Publications, patents.</li></ul></div>
        <div class="tab-pane" id="result"><table class="table table-striped"><thead><tr><th>AY</th><th>Pass%</th></tr></thead><tbody><tr><td>2023-24</td><td>87%</td></tr></tbody></table></div>
        <div class="tab-pane" id="association"><p>MESA activities.</p></div>
        <div class="tab-pane" id="seminars"><ul><li>Workshops/STTPs — 2024</li></ul></div>
        <div class="tab-pane" id="gallery"><div class="row"><div class="col-sm-3"><img src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/img/Slider/College.webp" class="img-rounded" style="width:100%"></div></div></div>
        <div class="tab-pane" id="downloads"><ul><li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfME2').setAttribute('src','<?php echo $pdf; ?>');">Syllabus (PDF)</a></li></ul><embed id="pdfME2" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>