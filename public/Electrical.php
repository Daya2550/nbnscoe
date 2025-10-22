<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
<style>
  .table-responsive { width: 100%; overflow-x: auto; }
  .table th { background-color: #007bff; color: #fff; }
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
      <div class="text-container"><span class="animated-text">ELECTRICAL ENGINEERING</span></div><br>
      <div class="tab-content">
        <div class="tab-pane active" id="about">
          <p>The Department of Electrical Engineering offers B.Tech with honors in EV. It has state-of-the-art labs (Machines, Power Systems, Control, Power Electronics), ICT-enabled classrooms, and strong industry connect.</p>
        </div>
        <div class="tab-pane" id="vm"><ul><li>Vision: To be a leading center in electrical engineering.</li><li>Mission: Quality education, research and ethics.</li></ul></div>
        <div class="tab-pane" id="po"><p>Standard Engineering POs.</p></div>
        <div class="tab-pane" id="pso"><ul><li>PSO1: Design, analyze electrical systems.</li><li>PSO2: Apply modern tools in multidisciplinary settings.</li></ul></div>
        <div class="tab-pane" id="peo"><ul><li>PEO1: Professional career</li><li>PEO2: Higher studies</li><li>PEO3: Ethics</li></ul></div>
        <div class="tab-pane" id="co"><div class="pdf-viewer"><embed src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div></div>
        <div class="tab-pane" id="faculty">
          <div class="table-responsive"><table class="table table-striped"><thead><tr><th>Sr</th><th>Name</th><th>Qual</th><th>Desig</th><th>Exp</th></tr></thead><tbody>
            <tr><td>1</td><td>Dr. Kondooru Shivashanker</td><td>M.Tech, Ph.D</td><td>HoD & Assoc Prof</td><td>10</td></tr>
            <tr><td>2</td><td>Mr. V. P. More</td><td>M.E.</td><td>Asst Prof</td><td>13</td></tr>
          </tbody></table></div>
        </div>
        <div class="tab-pane" id="labs"><ul><li>Machines Lab</li><li>Power Electronics Lab</li><li>Control Systems Lab</li></ul></div>
        <div class="tab-pane" id="visits"><ul><li>MSETCL Substation visit — 2023</li><li>RYB Power Pvt Ltd — 2023</li></ul></div>
        <div class="tab-pane" id="internships"><div class="table-responsive"><table class="table table-striped"><thead><tr><th>Student</th><th>Company</th><th>Period</th></tr></thead><tbody><tr><td>Sample</td><td>Spartan Tech</td><td>Feb–May 2024</td></tr></tbody></table></div></div>
        <div class="tab-pane" id="newsletter"><ul><li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfElec').setAttribute('src','<?php echo $pdf; ?>');">Department Newsletter</a></li></ul><embed id="pdfElec" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
        <div class="tab-pane" id="mous"><ul><li>MoU with Spartan Technologies — 2023</li></ul></div>
        <div class="tab-pane" id="achievements"><ul><li>Multiple student competition winners.</li></ul></div>
        <div class="tab-pane" id="research"><ul><li>Faculty publications in journals 2023-24.</li></ul></div>
        <div class="tab-pane" id="result"><table class="table table-striped"><thead><tr><th>AY</th><th>Pass%</th></tr></thead><tbody><tr><td>2023-24</td><td>88%</td></tr></tbody></table></div>
        <div class="tab-pane" id="association"><p>EESA conducts workshops, visits, competitions.</p></div>
        <div class="tab-pane" id="seminars"><ul><li>Power Quality & Harmonics — 2023</li></ul></div>
        <div class="tab-pane" id="gallery"><div class="row"><div class="col-sm-3"><img src="<?php echo BASE_URL; ?>/public/assets/department/cse/img/IoT Lab.jpg" class="img-rounded" style="width:100%"></div></div></div>
        <div class="tab-pane" id="downloads"><ul><li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfElec2').setAttribute('src','<?php echo $pdf; ?>');">Syllabus (PDF)</a></li></ul><embed id="pdfElec2" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>