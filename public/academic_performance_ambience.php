<?php require_once __DIR__ . '/../templates/header.php'; ?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .table th{background:#007bff;color:#fff}
  .feedback-links a{display:block;margin:6px 0;color:#b6124a}
  .form-group label{font-weight:600}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row">
    <div class="col-md-12">
      <div class="message"><h4 style="padding-left:5px;">Stakeholder Feedback</h4></div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="sec-card">
        <p>Click on the following links to give your valuable feedback</p>
        <div class="feedback-links">
          <a href="#students-form">Students Feedback Form</a>
          <a href="#parents-form">Parents Feedback Form</a>
          <a href="#employer-form">Employer Feedback Form</a>
          <a href="#alumni-form">Alumni Feedback Form</a>
        </div>
      </div>
      <div class="sec-card">
        <div class="message"><h4 style="padding-left:5px;">Academic Performance & Ambience</h4></div>
        <p style="text-align:justify;">
          The Institute adheres to the syllabus designed by affiliating University. During the course of delivery of syllabus
          content to the students, our faculty members enrich it with their own expertise and experience so as to enhance
          the learners’ understanding, skills and employability. The institute maintains a conducive academic ambience through
          well-equipped laboratories, library resources, and student support systems.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="sec-card" id="students-form">
        <div class="message"><h4 style="padding-left:5px;">Students Feedback Form</h4></div>
        <form method="post" action="<?php echo BASE_URL; ?>/public/feedback_submit.php">
          <input type="hidden" name="type" value="student">
          <div class="form-group"><label>Name</label><input class="form-control" name="name" type="text" required></div>
          <div class="form-group"><label>Program / Department</label><input class="form-control" name="program" type="text" required></div>
          <div class="form-group"><label>Semester</label><input class="form-control" name="semester" type="text"></div>
          <div class="form-group"><label>Feedback</label><textarea class="form-control" name="feedback" rows="4" required></textarea></div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="sec-card" id="parents-form">
        <div class="message"><h4 style="padding-left:5px;">Parents Feedback Form</h4></div>
        <form method="post" action="<?php echo BASE_URL; ?>/public/feedback_submit.php">
          <input type="hidden" name="type" value="parent">
          <div class="form-group"><label>Parent Name</label><input class="form-control" name="name" type="text" required></div>
          <div class="form-group"><label>Student Name</label><input class="form-control" name="student_name" type="text" required></div>
          <div class="form-group"><label>Program / Department</label><input class="form-control" name="program" type="text" required></div>
          <div class="form-group"><label>Feedback</label><textarea class="form-control" name="feedback" rows="4" required></textarea></div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="sec-card" id="employer-form">
        <div class="message"><h4 style="padding-left:5px;">Employer Feedback Form</h4></div>
        <form method="post" action="<?php echo BASE_URL; ?>/public/feedback_submit.php">
          <input type="hidden" name="type" value="employer">
          <div class="form-group"><label>Organization</label><input class="form-control" name="organization" type="text" required></div>
          <div class="form-group"><label>Contact Person</label><input class="form-control" name="contact_person" type="text" required></div>
          <div class="form-group"><label>Feedback</label><textarea class="form-control" name="feedback" rows="4" required></textarea></div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="sec-card" id="alumni-form">
        <div class="message"><h4 style="padding-left:5px;">Alumni Feedback Form</h4></div>
        <form method="post" action="<?php echo BASE_URL; ?>/public/feedback_submit.php">
          <input type="hidden" name="type" value="alumni">
          <div class="form-group"><label>Name</label><input class="form-control" name="name" type="text" required></div>
          <div class="form-group"><label>Batch / Year</label><input class="form-control" name="batch_year" type="text" required></div>
          <div class="form-group"><label>Current Organization</label><input class="form-control" name="organization" type="text"></div>
          <div class="form-group"><label>Feedback</label><textarea class="form-control" name="feedback" rows="4" required></textarea></div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
