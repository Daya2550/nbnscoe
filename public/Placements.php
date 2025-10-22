<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php
  // Static data arrays (self-contained)
  $kpis = [
    ['label'=>'Total Offers (2023-24)','value'=>'210+'],
    ['label'=>'Highest Package','value'=>'12 LPA'],
    ['label'=>'Average Package','value'=>'3.8 LPA'],
    ['label'=>'Companies Visited','value'=>'70+'],
  ];
  $stats = [
    ['ay'=>'2023-24','eligible'=>280,'offers'=>210,'highest'=>12,'average'=>3.8],
    ['ay'=>'2022-23','eligible'=>265,'offers'=>198,'highest'=>10,'average'=>3.6],
    ['ay'=>'2021-22','eligible'=>250,'offers'=>185,'highest'=>9,'average'=>3.4],
    ['ay'=>'2020-21','eligible'=>240,'offers'=>172,'highest'=>8.2,'average'=>3.2],
    ['ay'=>'2019-20','eligible'=>230,'offers'=>168,'highest'=>7.5,'average'=>3.0],
  ];
  $internships = [
    ['company'=>'TCS iON','domain'=>'Analytics','duration'=>'8 weeks','students'=>32],
    ['company'=>'Infosys Springboard','domain'=>'Full Stack','duration'=>'6 weeks','students'=>28],
    ['company'=>'QuickHeal','domain'=>'Cyber Security','duration'=>'6 weeks','students'=>18],
    ['company'=>'AWS Academy','domain'=>'Cloud','duration'=>'6 weeks','students'=>20],
  ];
  $recruiters = ['TCS','Accenture','Cognizant','Wipro','Tech Mahindra','Capgemini','Infosys','LTI','Persistent','Birlasoft','QuickHeal','Jio','Tata Power','LTTS','Cybage','Hexaware','Zensar'];
  $team = [
    ['name'=>'Prof. ABC XYZ','role'=>'Training & Placement Officer (TPO)','email'=>'tpo@sknscoe.ac.in','phone'=>'+91 8308614875'],
    ['name'=>'Prof. PQR DEF','role'=>'Assistant TPO','email'=>'atpo@sknscoe.ac.in','phone'=>'+91 9876543210'],
  ];
  $activities = [
    'Aptitude & Reasoning Training','Campus to Corporate (C2C) Program','Coding Bootcamps (C/CPP/DSA)','Soft Skills, GD & PI Sessions','Company Specific Training','Alumni Interaction & Mentoring'
  ];
?>
<style>
  .kpi-box{background:#fff;border-radius:4px;box-shadow:0 0 6px #e1e1e1;padding:14px;text-align:center;margin-bottom:14px}
  .kpi-box h3{margin:4px 0;color:#b6124a}
  .recruiter{background:#fff;border:1px solid #eee;border-radius:4px;padding:10px;text-align:center;box-shadow:0 0 4px #efefef;margin-bottom:12px}
  .recruiter img{max-height:46px;width:auto}
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .table th{background:#007bff;color:#fff}
.skn-sidebar{padding-top:8px}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#overview" data-toggle="tab" style="font-size:18px;">Overview</a></li>
        <li><a href="#about" data-toggle="tab" style="font-size:18px;">About T&P Cell</a></li>
        <li><a href="#team" data-toggle="tab" style="font-size:18px;">Placement Team</a></li>
        <li><a href="#training" data-toggle="tab" style="font-size:18px;">Training Activities</a></li>
        <li><a href="#stats" data-toggle="tab" style="font-size:18px;">Placement Statistics</a></li>
        <li><a href="#internships" data-toggle="tab" style="font-size:18px;">Internships</a></li>
        <li><a href="#recruiters" data-toggle="tab" style="font-size:18px;">Our Recruiters</a></li>
        <li><a href="#activities" data-toggle="tab" style="font-size:18px;">Activities</a></li>
        <li><a href="#contact" data-toggle="tab" style="font-size:18px;">Contact</a></li>
      </ul>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="overview">
          <div class="row">
            <?php foreach ($kpis as $k): ?>
              <div class="col-md-3 col-sm-6"><div class="kpi-box"><div><?php echo htmlspecialchars($k['label'], ENT_QUOTES); ?></div><h3><?php echo htmlspecialchars($k['value'], ENT_QUOTES); ?></h3></div></div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="tab-pane" id="about">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">About Training & Placement Cell</h4></div>
            <p style="text-align:justify">The Training & Placement (T&P) Cell at SKNSCOE facilitates campus recruitment by leading companies, conducts employability enhancement programs, and organizes internships, industry interactions, mock interviews, aptitude and soft-skill sessions to make students industry-ready.</p>
            <div class="message"><h4 style="padding-left:5px;">Highlights</h4></div>
            <ul>
              <li>Regular aptitude, reasoning, coding and soft skills training</li>
              <li>Company-specific preparation and mock interviews</li>
              <li>Internship assistance and industry projects</li>
              <li>Strong recruiter network with IT, Core and Consulting domains</li>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="team">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Placement Team</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Name</th><th>Role</th><th>Email</th><th>Phone</th></tr></thead>
                <tbody>
                  <?php foreach ($team as $m): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($m['name'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($m['role'], ENT_QUOTES); ?></td>
                      <td><a href="mailto:<?php echo htmlspecialchars($m['email'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($m['email'], ENT_QUOTES); ?></a></td>
                      <td><a href="tel:<?php echo preg_replace('/\s+/', '', htmlspecialchars($m['phone'], ENT_QUOTES)); ?>"><?php echo htmlspecialchars($m['phone'], ENT_QUOTES); ?></a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="training">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Training Activities</h4></div>
            <ul>
              <?php foreach ($activities as $a): ?><li><?php echo htmlspecialchars($a, ENT_QUOTES); ?></li><?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="stats">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Placement Statistics</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr><th>AY</th><th>Eligible</th><th>Offers</th><th>Highest (LPA)</th><th>Average (LPA)</th></tr>
                </thead>
                <tbody>
                  <?php foreach ($stats as $s): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($s['ay'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars((string)$s['eligible'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars((string)$s['offers'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars((string)$s['highest'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars((string)$s['average'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="internships">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Internships</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Company</th><th>Domain</th><th>Duration</th><th>Students</th></tr></thead>
                <tbody>
                  <?php foreach ($internships as $it): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($it['company'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($it['domain'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($it['duration'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars((string)$it['students'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="recruiters">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Our Recruiters</h4></div>
            <div class="row">
              <?php foreach ($recruiters as $r): ?>
                <div class="col-xs-6 col-sm-4 col-md-3"><div class="recruiter"><?php echo htmlspecialchars($r, ENT_QUOTES); ?></div></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="activities">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Activities</h4></div>
            <ul>
              <?php foreach ($activities as $a): ?><li><?php echo htmlspecialchars($a, ENT_QUOTES); ?></li><?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="contact">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">T&P Contact</h4></div>
            <p><strong>Training & Placement Office</strong><br>
              SKN Sinhgad College of Engineering, Pandharpur<br>
              Mobile: <a href="tel:+918308614875">+91 8308614875</a><br>
              Email: <a href="mailto:principal@sknscoe.ac.in">principal@sknscoe.ac.in</a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
