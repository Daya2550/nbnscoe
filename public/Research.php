<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php
  // Self-contained static data (replace with exact items as needed)
  $policy_points = [
    'Promote quality research, publications, patents, and innovation.',
    'Encourage inter-disciplinary projects and industry collaboration.',
    'Support faculty/students for funding, IPR, and incubation.',
  ];
  $committee = [
    ['name'=>'Dr. ABC Principal','role'=>'Chairperson','email'=>'principal@sknscoe.ac.in'],
    ['name'=>'Dr. XYZ Dean R&D','role'=>'Coordinator','email'=>'rnd@sknscoe.ac.in'],
    ['name'=>'Prof. PQR','role'=>'Member','email'=>'pqr@sknscoe.ac.in'],
  ];
  $publications = [
    ['year'=>2024,'author'=>'Jagtap V. G.','title'=>'Efficient CNN architectures for crop disease detection','venue'=>'IJCAI','indexing'=>'Scopus'],
    ['year'=>2023,'author'=>'Sawant N. M.','title'=>'Blockchain-based Academic Credentials','venue'=>'Springer CCIS','indexing'=>'Scopus'],
    ['year'=>2022,'author'=>'Ingole S. S.','title'=>'IoT-enabled Smart Grid Monitoring','venue'=>'IEEE Access','indexing'=>'SCI'],
  ];
  $patents = [
    ['year'=>2024,'title'=>'Method for Real-time Crop Disease Detection','status'=>'Filed'],
    ['year'=>2023,'title'=>'Secure Firmware Update Mechanism for IoT','status'=>'Published'],
    ['year'=>2022,'title'=>'Campus Navigation App (Copyright)','status'=>'Registered'],
  ];
  $projects = [
    ['year'=>2024,'title'=>'AI-enabled Precision Irrigation','agency'=>'RGSTC','amount'=>'₹ 9,50,000','pi'=>'Dr. Jagtap V. G.'],
    ['year'=>2023,'title'=>'Secure IoT Gateway for Smart Homes','agency'=>'AICTE','amount'=>'₹ 5,00,000','pi'=>'Mr. Sawant N. M.'],
    ['year'=>2022,'title'=>'Solar-powered Edge Compute Node','agency'=>'BCUD','amount'=>'₹ 3,20,000','pi'=>'Mr. Ingole S. S.'],
  ];
  $consultancy = [
    ['year'=>2024,'client'=>'Local MSME','scope'=>'Web app automation','amount'=>'₹ 1,20,000'],
    ['year'=>2023,'client'=>'EdTech Startup','scope'=>'LMS customization','amount'=>'₹ 80,000'],
  ];
  $mous = [
    ['year'=>2024,'partner'=>'TCS iON','scope'=>'Internships, skill modules'],
    ['year'=>2023,'partner'=>'Infosys Springboard','scope'=>'Training & Certification'],
    ['year'=>2023,'partner'=>'Red Hat Academy','scope'=>'Linux & DevOps curriculum'],
  ];
  $workshops = [
    ['date'=>'Dec 2024','title'=>'FDP on Generative AI','type'=>'FDP (One Week)'],
    ['date'=>'Mar 2023','title'=>'STTP on Cyber Forensics Tools','type'=>'STTP'],
    ['date'=>'Jan 2022','title'=>'Seminar on Data Science & Applications','type'=>'Seminar'],
  ];
  $achievements = [
    ['year'=>2024,'detail'=>'18 SCI/Scopus publications; 3 funded projects sanctioned.'],
    ['year'=>2023,'detail'=>'Department recognized in ARIIA Band Performer category.'],
  ];
?>
<style>
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
        <li class="active"><a href="#policy" data-toggle="tab" style="font-size:18px;">Research Policy</a></li>
        <li><a href="#committee" data-toggle="tab" style="font-size:18px;">Research Committee</a></li>
        <li><a href="#publications" data-toggle="tab" style="font-size:18px;">Publications</a></li>
        <li><a href="#patents" data-toggle="tab" style="font-size:18px;">Patents & IPR</a></li>
        <li><a href="#projects" data-toggle="tab" style="font-size:18px;">Funded Projects</a></li>
        <li><a href="#consultancy" data-toggle="tab" style="font-size:18px;">Consultancy</a></li>
        <li><a href="#mous" data-toggle="tab" style="font-size:18px;">MoUs</a></li>
        <li><a href="#workshops" data-toggle="tab" style="font-size:18px;">Workshops / FDP / STTP</a></li>
        <li><a href="#achievements" data-toggle="tab" style="font-size:18px;">Achievements</a></li>
        <li><a href="#contact" data-toggle="tab" style="font-size:18px;">Contact</a></li>
      </ul>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="policy">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Research & Development Policy</h4></div>
            <ul><?php foreach ($policy_points as $p): ?><li><?php echo htmlspecialchars($p, ENT_QUOTES); ?></li><?php endforeach; ?></ul>
          </div>
        </div>

        <div class="tab-pane" id="committee">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Research Committee</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Name</th><th>Role</th><th>Email</th></tr></thead>
                <tbody>
                  <?php foreach ($committee as $m): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($m['name'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($m['role'], ENT_QUOTES); ?></td>
                      <td><a href="mailto:<?php echo htmlspecialchars($m['email'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($m['email'], ENT_QUOTES); ?></a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="publications">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Publications</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Year</th><th>Author(s)</th><th>Title</th><th>Venue</th><th>Indexing</th></tr></thead>
                <tbody>
                  <?php foreach ($publications as $pub): ?>
                    <tr>
                      <td><?php echo htmlspecialchars((string)$pub['year'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pub['author'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pub['title'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pub['venue'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pub['indexing'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="patents">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Patents & IPR</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Year</th><th>Title</th><th>Status</th></tr></thead>
                <tbody>
                  <?php foreach ($patents as $pt): ?>
                    <tr>
                      <td><?php echo htmlspecialchars((string)$pt['year'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pt['title'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pt['status'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="projects">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Funded Projects</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Year</th><th>Title</th><th>Agency</th><th>Amount</th><th>PI</th></tr></thead>
                <tbody>
                  <?php foreach ($projects as $pr): ?>
                    <tr>
                      <td><?php echo htmlspecialchars((string)$pr['year'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pr['title'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pr['agency'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pr['amount'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($pr['pi'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="consultancy">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Consultancy</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Year</th><th>Client</th><th>Scope</th><th>Amount</th></tr></thead>
                <tbody>
                  <?php foreach ($consultancy as $c): ?>
                    <tr>
                      <td><?php echo htmlspecialchars((string)$c['year'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($c['client'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($c['scope'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($c['amount'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="mous">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">MoUs</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Year</th><th>Partner</th><th>Scope</th></tr></thead>
                <tbody>
                  <?php foreach ($mous as $m): ?>
                    <tr>
                      <td><?php echo htmlspecialchars((string)$m['year'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($m['partner'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($m['scope'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="workshops">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Workshops / FDP / STTP</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Date</th><th>Title</th><th>Type</th></tr></thead>
                <tbody>
                  <?php foreach ($workshops as $w): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($w['date'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($w['title'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($w['type'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="achievements">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Research Achievements</h4></div>
            <ul>
              <?php foreach ($achievements as $a): ?><li><?php echo htmlspecialchars($a['year'] . ' — ' . $a['detail'], ENT_QUOTES); ?></li><?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="contact">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Contact</h4></div>
            <p><strong>Dean (R&D)</strong><br>
              SKN Sinhgad College of Engineering, Pandharpur<br>
              Email: <a href="mailto:rnd@sknscoe.ac.in">rnd@sknscoe.ac.in</a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>