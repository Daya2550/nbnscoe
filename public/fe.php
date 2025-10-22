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
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="text-container"><span class="animated-text">FIRST YEAR ENGINEERING</span></div><br>
      <div class="tab-content">
        <div class="tab-pane active" id="about"><p>First Year Engineering (FE) provides foundation courses in Mathematics, Physics, Chemistry and Basics of Programming and Engineering drawing with emphasis on skill building.</p></div>
        <div class="tab-pane" id="vm"><ul><li>Vision: Strong fundamentals for engineering.</li><li>Mission: Conceptual clarity and applications.</li></ul></div>
        <div class="tab-pane" id="po"><p>Standard POs.</p></div>
        <div class="tab-pane" id="pso"><p>Not applicable.</p></div>
        <div class="tab-pane" id="peo"><ul><li>PEO1: Readiness for branch courses</li><li>PEO2: Problem solving</li></ul></div>
        <div class="tab-pane" id="co"><embed src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
        <div class="tab-pane" id="faculty"><table class="table table-striped"><thead><tr><th>Sr</th><th>Name</th><th>Dept</th><th>Qual</th></tr></thead><tbody><tr><td>1</td><td>Dr. FE HoD</td><td>FE</td><td>Ph.D.</td></tr></tbody></table></div>
        <div class="tab-pane" id="labs"><ul><li>Physics Lab</li><li>Chemistry Lab</li><li>Programming Lab</li></ul></div>
        <div class="tab-pane" id="visits"><ul><li>Local industry familiarization</li></ul></div>
        <div class="tab-pane" id="internships"><p>Internships commence from 2nd year.</p></div>
        <div class="tab-pane" id="newsletter"><ul><li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfFE').setAttribute('src','<?php echo $pdf; ?>');">FE Newsletter</a></li></ul><embed id="pdfFE" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
        <div class="tab-pane" id="downloads"><ul><li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfFE2').setAttribute('src','<?php echo $pdf; ?>');">Syllabus (PDF)</a></li></ul><embed id="pdfFE2" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh;border:1px solid #ccc;"></div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
