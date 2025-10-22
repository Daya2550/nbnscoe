<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php
  // Self-contained static data for Library page
  $about = 'The Central Library of SKNSCOE supports teaching, learning and research by providing rich collections, modern services and conducive reading spaces. The library houses printed as well as digital resources and offers user-centric services to students and faculty.';
  $services = [
    'Circulation (Issue/Return/Renewal)',
    'OPAC (Online Public Access Catalogue)',
    'Reference and Referral Service',
    'Book Bank for Economically Weaker Section',
    'Current Awareness Service (CAS)',
    'Newspaper Clippings',
    'Question Paper Repository',
    'Inter-Library Loan (ILL)',
    'Reprography/Printing/Scanning',
    'Institutional Repository (IR)'
  ];
  $collections = [
    ['label'=>'Total Books','value'=>'28,500+'],
    ['label'=>'Titles','value'=>'7,800+'],
    ['label'=>'Print Journals & Magazines','value'=>'85'],
    ['label'=>'E-Books','value'=>'10,000+'],
    ['label'=>'E-Journals (packages)','value'=>'3,500+'],
    ['label'=>'Newspapers','value'=>'12'],
    ['label'=>'CD/DVDs','value'=>'450+'],
  ];
  $rules = [
    'Maintain silence and keep mobiles on silent mode in the library premises.',
    'Identity card is compulsory for availing library services.',
    'Books are issued for 7/14 days and are renewable if not reserved by others.',
    'Users are responsible for books issued to them; loss/damage must be reported immediately.',
    'No personal belongings (bags, etc.) inside the stack area; use the property counter.',
    'Food and beverages are not allowed inside the library.',
  ];
  $timings = [
    ['day'=>'Monday to Friday','time'=>'9:00 AM to 5:30 PM'],
    ['day'=>'Saturday','time'=>'9:00 AM to 2:00 PM'],
    ['day'=>'Sunday & Holidays','time'=>'Closed'],
  ];
  $staff = [
    ['name'=>'Mr. A. B. Librarian','designation'=>'Librarian','qualification'=>'MLISc, NET'],
    ['name'=>'Ms. C. D. Assistant','designation'=>'Library Assistant','qualification'=>'BLISc'],
    ['name'=>'Mr. E. F. Attendant','designation'=>'Library Attendant','qualification'=>'Graduate'],
  ];
  $eresources = [
    'NPTEL Video Lectures',
    'National Digital Library of India (NDLI)',
    'DELNET (Document Delivery & ILL)',
    'E-Shodh Sindhu open resources',
    'Free and Open Source E-books/E-journals',
  ];
  $qpapers = [
    ['name'=>'BE CSE Sem VII (Sample)','url'=> BASE_URL . '/public/assets/library/question-papers/BE_CSE_Sem7.pdf'],
    ['name'=>'BE ENTC Sem V (Sample)','url'=> BASE_URL . '/public/assets/library/question-papers/BE_ENTC_Sem5.pdf'],
    ['name'=>'FE Common (Sample)','url'=> BASE_URL . '/public/assets/library/question-papers/FE_Common.pdf'],
  ];
  $downloads = [
    ['name'=>'Library Membership Form','url'=> BASE_URL . '/public/assets/library/forms/Library_Membership_Form.pdf'],
    ['name'=>'Book Bank Form','url'=> BASE_URL . '/public/assets/library/forms/Book_Bank_Form.pdf'],
    ['name'=>'Library Rules & Regulations','url'=> BASE_URL . '/public/assets/library/forms/Library_Rules.pdf'],
  ];
  $gallery = [
    BASE_URL . '/public/assets/department/cse/img/401-OOP Lab.JPG',
    BASE_URL . '/public/assets/department/cse/img/402-CN Lab.JPG',
    BASE_URL . '/public/assets/department/cse/img/403-ADS Lab.jpg',
    BASE_URL . '/public/assets/department/cse/img/Pre-Incubation-center.jpg',
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
        <li class="active"><a href="#about" data-toggle="tab" style="font-size:18px;">About Library</a></li>
        <li><a href="#services" data-toggle="tab" style="font-size:18px;">Library Services</a></li>
        <li><a href="#collections" data-toggle="tab" style="font-size:18px;">Collections</a></li>
        <li><a href="#rules" data-toggle="tab" style="font-size:18px;">Rules & Regulations</a></li>
        <li><a href="#timings" data-toggle="tab" style="font-size:18px;">Timings</a></li>
        <li><a href="#staff" data-toggle="tab" style="font-size:18px;">Library Staff</a></li>
        <li><a href="#webopac" data-toggle="tab" style="font-size:18px;">Library WEBOPAC</a></li>
        <li><a href="#eresources" data-toggle="tab" style="font-size:18px;">E-Resources</a></li>
        <li><a href="#qpapers" data-toggle="tab" style="font-size:18px;">Question Papers</a></li>
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
        <li><a href="#gallery" data-toggle="tab" style="font-size:18px;">Gallery</a></li>
        <li><a href="#contact" data-toggle="tab" style="font-size:18px;">Contact</a></li>
      </ul>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="about">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">About Library</h4></div>
            <p style="text-align:justify;"><?php echo htmlspecialchars($about, ENT_QUOTES); ?></p>
          </div>
        </div>

        <div class="tab-pane" id="services">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Library Services</h4></div>
            <ul>
              <?php foreach ($services as $s): ?><li><?php echo htmlspecialchars($s, ENT_QUOTES); ?></li><?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="collections">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Collections</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Resource</th><th>Count</th></tr></thead>
                <tbody>
                  <?php foreach ($collections as $c): ?>
                  <tr><td><?php echo htmlspecialchars($c['label'], ENT_QUOTES); ?></td><td><?php echo htmlspecialchars($c['value'], ENT_QUOTES); ?></td></tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="rules">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Rules & Regulations</h4></div>
            <ul>
              <?php foreach ($rules as $r): ?><li><?php echo htmlspecialchars($r, ENT_QUOTES); ?></li><?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="timings">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Timings</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Day</th><th>Time</th></tr></thead>
                <tbody>
                  <?php foreach ($timings as $t): ?>
                  <tr><td><?php echo htmlspecialchars($t['day'], ENT_QUOTES); ?></td><td><?php echo htmlspecialchars($t['time'], ENT_QUOTES); ?></td></tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="staff">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Library Staff</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Name</th><th>Designation</th><th>Qualification</th></tr></thead>
                <tbody>
                  <?php foreach ($staff as $st): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($st['name'], ENT_QUOTES); ?></td>
                    <td><?php echo htmlspecialchars($st['designation'], ENT_QUOTES); ?></td>
                    <td><?php echo htmlspecialchars($st['qualification'], ENT_QUOTES); ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="webopac">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Library WEBOPAC</h4></div>
            <p>Use the Online Public Access Catalogue to search for books and other materials by title, author, subject or keyword.</p>
            <p><em>Note:</em> WEBOPAC is available within the campus network. Please visit the library counter for assistance.</p>
          </div>
        </div>

        <div class="tab-pane" id="eresources">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">E-Resources</h4></div>
            <ul>
              <?php foreach ($eresources as $e): ?><li><?php echo htmlspecialchars($e, ENT_QUOTES); ?></li><?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="qpapers">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Question Papers</h4></div>
            <ul>
              <?php foreach ($qpapers as $q): ?>
                <li><a target="_blank" href="<?php echo htmlspecialchars($q['url'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($q['name'], ENT_QUOTES); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="downloads">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Downloads</h4></div>
            <ul>
              <?php foreach ($downloads as $d): ?>
                <li><a target="_blank" href="<?php echo htmlspecialchars($d['url'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($d['name'], ENT_QUOTES); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="tab-pane" id="gallery">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Gallery</h4></div>
            <div class="row">
              <?php foreach ($gallery as $img): ?>
                <div class="col-sm-6 col-md-4"><img class="img-rounded" style="width:100%;height:180px;object-fit:cover;" src="<?php echo htmlspecialchars($img, ENT_QUOTES); ?>" alt="Library"></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="contact">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Contact</h4></div>
            <p>
              <strong>Central Library, SKNSCOE</strong><br>
              Gat No. 664, A/P Korti, Pandharpur, Solapur (413304)<br>
              Email: <a href="mailto:library@sknscoe.ac.in">library@sknscoe.ac.in</a><br>
              Phone: <a href="tel:+919850888223">+91 98508 88223</a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
