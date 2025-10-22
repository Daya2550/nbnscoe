<?php require_once __DIR__ . '/../templates/header.php'; ?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
.skn-sidebar{padding-top:8px}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#hostel" data-toggle="tab" style="font-size:18px;">Hostel facility</a></li>
        <li><a href="#canteen" data-toggle="tab" style="font-size:18px;">Canteen & Mess</a></li>
        <li><a href="#shopping" data-toggle="tab" style="font-size:18px;">Shopping Complex</a></li>
        <li><a href="#transport" data-toggle="tab" style="font-size:18px;">Transportation Facilities</a></li>
        <li><a href="#sports" data-toggle="tab" style="font-size:18px;">Sport & Gymnasium</a></li>
        <li><a href="#security" data-toggle="tab" style="font-size:18px;">Security</a></li>
        <li><a href="#quarters" data-toggle="tab" style="font-size:18px;">Staff Quarters</a></li>
        <li><a href="#clean" data-toggle="tab" style="font-size:18px;">Cleanliness/ Housekeeping</a></li>
        <li><a href="#medical" data-toggle="tab" style="font-size:18px;">Medical Facility</a></li>
        <li><a href="#other" data-toggle="tab" style="font-size:18px;">Other Facilities</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="hostel">
          <div class="sec-card"><h4>Hostel facility</h4><p>Separate boys and girls hostels with modern amenities, furnished rooms (4-seater), attached bath, 24x7 security, anti-ragging mechanism, and mess facility.</p></div>
        </div>
        <div class="tab-pane" id="canteen">
          <div class="sec-card"><h4>Canteen & Mess</h4><p>Hygienic canteen and mess serving nutritious food with RO water and ample seating.</p></div>
        </div>
        <div class="tab-pane" id="shopping">
          <div class="sec-card"><h4>Shopping Complex</h4><p>On-campus stores for daily essentials and stationery.</p></div>
        </div>
        <div class="tab-pane" id="transport">
          <div class="sec-card"><h4>Transportation Facilities</h4><p>College buses and easy connectivity to the city.</p></div>
        </div>
        <div class="tab-pane" id="sports">
          <div class="sec-card"><h4>Sport & Gymnasium</h4><p>Well-equipped gym and indoor/outdoor sports facilities.</p></div>
        </div>
        <div class="tab-pane" id="security">
          <div class="sec-card"><h4>Security</h4><p>Round-the-clock security with surveillance at key locations.</p></div>
        </div>
        <div class="tab-pane" id="quarters">
          <div class="sec-card"><h4>Staff Quarters</h4><p>Residential quarters available for staff within campus.</p></div>
        </div>
        <div class="tab-pane" id="clean">
          <div class="sec-card"><h4>Cleanliness/ Housekeeping</h4><p>Regular housekeeping and campus cleanliness drives.</p></div>
        </div>
        <div class="tab-pane" id="medical">
          <div class="sec-card"><h4>Medical Facility</h4><p>On-campus clinic and first-aid facilities for students and staff.</p></div>
        </div>
        <div class="tab-pane" id="other">
          <div class="sec-card"><h4>Other Facilities</h4><p>ATM, Wi-Fi, auditorium, seminar halls, and ample parking.</p></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>