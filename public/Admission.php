<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php
  // Self-contained static data for Admission page (no external imports)
  $programs = [
    ['name'=>'B.Tech - Civil Engineering','intake'=>60,'duration'=>'4 Years','fees'=>'₹ 95,000 / Year'],
    ['name'=>'B.Tech - Computer Science & Engineering','intake'=>120,'duration'=>'4 Years','fees'=>'₹ 1,05,000 / Year'],
    ['name'=>'B.Tech - Electrical Engineering','intake'=>60,'duration'=>'4 Years','fees'=>'₹ 95,000 / Year'],
    ['name'=>'B.Tech - Electronics & Telecommunication','intake'=>60,'duration'=>'4 Years','fees'=>'₹ 95,000 / Year'],
    ['name'=>'B.Tech - Mechanical Engineering','intake'=>60,'duration'=>'4 Years','fees'=>'₹ 95,000 / Year'],
    ['name'=>'M.Tech - Computer Science & Engineering','intake'=>18,'duration'=>'2 Years','fees'=>'₹ 90,000 / Year'],
  ];
  $eligibility = [
    ['program'=>'B.Tech (First Year)','criteria'=>'Passed HSC (10+2) with Physics and Mathematics + one from Chemistry/Biology/Computer Science/IT and obtained at least 45% marks (40% for reserved category) AND Valid MHT-CET/JEE(Main) score as per State CET Cell rules.'],
    ['program'=>'B.Tech (Direct Second Year)','criteria'=>'Passed Diploma in relevant branch with at least 45% marks (40% for reserved category) from a recognized Board/University.'],
    ['program'=>'M.Tech','criteria'=>'BE/B.Tech in relevant discipline with minimum 50% (45% for reserved) and valid score in GATE (preferred) or as per DTE norms.'],
  ];
  $process_steps = [
    'Register for CAP rounds at State CET Cell, Maharashtra (for B.Tech and M.Tech as applicable).',
    'Document verification at Facilitation Center (FC).',
    'Choice filling and locking of options within schedule.',
    'Seat allotment as per merit and reservation policies.',
    'Report to the Institute with allotment letter and required documents for admission confirmation.',
  ];
  $important_dates = [
    ['event'=>'CAP Registration Window','date'=>'June–July (As per CET Cell schedule)'],
    ['event'=>'Document Verification','date'=>'As per notified schedule'],
    ['event'=>'Round-wise Allotments','date'=>'As per CET Cell notifications'],
    ['event'=>'Institute Reporting','date'=>'Within 3 working days after allotment'],
  ];
  $documents = [
    'Allotment Letter (if applicable)',
    'SSC (10th) Marksheet & Certificate',
    'HSC (12th) Marksheet & Certificate / Diploma Marksheet (DSY)',
    'MHT-CET/JEE(Main)/GATE Score Card (as applicable)',
    'School/College Leaving Certificate (LC/TC)',
    'Nationality Certificate / Birth Certificate',
    'Caste Certificate, Caste Validity, Non-Creamy Layer (if applicable)',
    'Domicile Certificate (if applicable)',
    'Aadhar Card (Photocopy)',
    'Passport size photographs (6 Nos.)',
  ];
  $scholarships = [
    'Government of Maharashtra Scholarship (Social Justice/Tribal/SEBC/OBC/VJNT) as per GRs',
    'EBC (Economically Backward Class) concession as per norms',
    'Freeship/Scholarship for reserved categories subject to eligibility',
    'AICTE and other central/state schemes announced from time to time',
  ];
  $fees_note = 'Fees are subject to final approval by the Fee Regulating Authority (FRA) and may change as per directives. Separate one-time development/eligibility/university fees may apply.';
?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .table th{background:#007bff;color:#fff}
  .notice-marquee{background:#fff7e6;border:1px solid #ffd699;border-radius:4px;padding:6px 10px;box-shadow:0 0 6px #ffe0a6}
.skn-sidebar{padding-top:8px}
  .animated-title{display:inline-block;animation: pulseTitle 2.5s ease-in-out infinite;}
  @keyframes pulseTitle{0%{transform:scale(1)}50%{transform:scale(1.03)}100%{transform:scale(1)}}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#overview" data-toggle="tab" style="font-size:18px;">Overview</a></li>
        <li><a href="#programs" data-toggle="tab" style="font-size:18px;">Programs Offered</a></li>
        <li><a href="#eligibility" data-toggle="tab" style="font-size:18px;">Eligibility</a></li>
        <li><a href="#intake_fees" data-toggle="tab" style="font-size:18px;">Intake & Fees</a></li>
        <li><a href="#process" data-toggle="tab" style="font-size:18px;">Admission Process</a></li>
        <li><a href="#dates" data-toggle="tab" style="font-size:18px;">Important Dates</a></li>
        <li><a href="#documents" data-toggle="tab" style="font-size:18px;">Documents Required</a></li>
        <li><a href="#scholarships" data-toggle="tab" style="font-size:18px;">Scholarships</a></li>
        <li><a href="#anti_ragging" data-toggle="tab" style="font-size:18px;">Anti Ragging</a></li>
        <li><a href="#contact" data-toggle="tab" style="font-size:18px;">Contact</a></li>
        <li><a href="#faqs" data-toggle="tab" style="font-size:18px;">FAQs</a></li>
      </ul>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="notice-marquee">
        <marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
          Admissions open for AY 2025-26. Apply through State CET Cell CAP rounds. For queries call +91 8308614875 or email admissions@sknscoe.ac.in.
        </marquee>
      </div>
      <div class="tab-content">
        <div class="tab-pane active" id="overview">
          <div class="sec-card">
            <div class="message"><h4 class="animated-title" style="padding-left:5px;">Admission Overview</h4></div>
            <p style="text-align:justify;">SKNSCOE offers undergraduate and postgraduate programs in Engineering. Admissions are conducted strictly as per the norms of the State CET Cell, Government of Maharashtra and Punyashlok Ahilyadevi Holkar Solapur University regulations. Candidates are advised to follow the CAP process timelines and keep the necessary documents ready.</p>
          </div>
        </div>

        <div class="tab-pane" id="programs">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Programs Offered</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Program</th><th>Intake</th><th>Duration</th><th>Tuition Fees</th></tr></thead>
                <tbody>
                  <?php foreach ($programs as $p): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($p['name'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars((string)$p['intake'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($p['duration'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($p['fees'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="eligibility">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Eligibility</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Program</th><th>Criteria</th></tr></thead>
                <tbody>
                  <?php foreach ($eligibility as $e): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($e['program'], ENT_QUOTES); ?></td>
                      <td><?php echo htmlspecialchars($e['criteria'], ENT_QUOTES); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="intake_fees">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Intake & Fees</h4></div>
            <p>The following intake and fee details are indicative for AY 2025-26 and are subject to FRA approval.</p>
            <ul>
              <li>Total UG Intake: 360+</li>
              <li>Total PG Intake: 18</li>
            </ul>
            <p class="text-muted"><?php echo htmlspecialchars($fees_note, ENT_QUOTES); ?></p>
          </div>
        </div>

        <div class="tab-pane" id="process">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Admission Process</h4></div>
            <ol>
              <?php foreach ($process_steps as $s): ?><li><?php echo htmlspecialchars($s, ENT_QUOTES); ?></li><?php endforeach; ?>
            </ol>
          </div>
        </div>

        <div class="tab-pane" id="dates">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Important Dates</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Event</th><th>Schedule</th></tr></thead>
                <tbody>
                  <?php foreach ($important_dates as $d): ?>
                    <tr><td><?php echo htmlspecialchars($d['event'], ENT_QUOTES); ?></td><td><?php echo htmlspecialchars($d['date'], ENT_QUOTES); ?></td></tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="documents">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Documents Required</h4></div>
            <ul>
              <?php foreach ($documents as $doc): ?><li><?php echo htmlspecialchars($doc, ENT_QUOTES); ?></li><?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="scholarships">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Scholarships & Concessions</h4></div>
            <ul>
              <?php foreach ($scholarships as $s): ?><li><?php echo htmlspecialchars($s, ENT_QUOTES); ?></li><?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="anti_ragging">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Anti Ragging</h4></div>
            <p>SKNSCOE maintains zero tolerance for ragging. Students and parents are required to submit the anti-ragging undertaking at the time of admission. Any incidents can be reported to the Anti-Ragging Committee.</p>
          </div>
        </div>

        <div class="tab-pane" id="contact">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Admission Contact</h4></div>
            <p>
              <strong>Admission Cell, SKNSCOE</strong><br>
              A/P Korti, Pandharpur, Solapur (413304)<br>
              Mobile: <a href="tel:+918308614875">+91 8308614875</a><br>
              Email: <a href="mailto:admissions@sknscoe.ac.in">admissions@sknscoe.ac.in</a>
            </p>
          </div>
        </div>

        <div class="tab-pane" id="faqs">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">FAQs</h4></div>
            <div class="panel-group" id="faqAccordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h5 class="panel-title"><a data-toggle="collapse" data-parent="#faqAccordion" href="#faq1">How do I apply for B.Tech admissions?</a></h5>
                </div>
                <div id="faq1" class="panel-collapse collapse in">
                  <div class="panel-body">Apply through State CET Cell CAP portal within the announced schedule and select SKNSCOE in option form.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h5 class="panel-title"><a data-toggle="collapse" data-parent="#faqAccordion" href="#faq2" class="collapsed">Is hostel facility available?</a></h5>
                </div>
                <div id="faq2" class="panel-collapse collapse">
                  <div class="panel-body">Yes, separate boys and girls hostels are available on campus with mess and essential amenities.</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
