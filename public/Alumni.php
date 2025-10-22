<?php require_once __DIR__ . '/../templates/header.php'; ?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .download-list a{display:block;margin:6px 0;color:#b6124a}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row">
    <div class="col-md-12">
      <div class="message"><h4 style="padding-left:5px;">Alumni</h4></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="sec-card">
        <h5>About Alumni</h5>
        <p style="text-align:justify;">The Alumni Association connects graduates with the institution, fosters networking, and supports mentorship, placements, and institute development. Alumni are invited to register and participate in events and initiatives.</p>
        <div class="download-list">
          <a href="<?php echo BASE_URL; ?>/public/assets/alumni/Alumni_Registration_Form.pdf" target="_blank">Alumni Registration Form</a>
          <a href="<?php echo BASE_URL; ?>/public/assets/alumni/Alumni_Bylaws.pdf" target="_blank">Alumni Association By-Laws</a>
        </div>
      </div>
      <div class="sec-card">
        <h5>Alumni Activities</h5>
        <ul>
          <li>Alumni Meet and Felicitation (Annual)</li>
          <li>Career Guidance Sessions</li>
          <li>Industry Interaction & Mentoring</li>
          <li>Campus Recruitment Support</li>
        </ul>
      </div>
      <div class="sec-card">
        <h5>Alumni Committee</h5>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead><tr><th>Name</th><th>Role</th><th>Contact</th></tr></thead>
            <tbody>
              <tr><td>Prof. Coordinator</td><td>Faculty Coordinator</td><td>alumni@sknscoe.ac.in</td></tr>
              <tr><td>Mr. Alumni Rep</td><td>President</td><td>+91 9000000000</td></tr>
              <tr><td>Ms. Alumni Rep</td><td>Secretary</td><td>+91 9000000001</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="sec-card">
        <h5>Contact</h5>
        <p>
          Alumni Cell, SKNSCOE<br>
          A/P Korti, Pandharpur, Solapur (413304)<br>
          Email: <a href="mailto:alumni@sknscoe.ac.in">alumni@sknscoe.ac.in</a>
        </p>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
