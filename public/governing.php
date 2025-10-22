<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php $pdf = BASE_URL . '/public/assets/naac/sample.pdf'; ?>
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
        <li class="active"><a href="#gb" data-toggle="tab" style="font-size:18px;">Governing Body (GB)</a></li>
        <li><a href="#cdc" data-toggle="tab" style="font-size:18px;">College Development Committee (CDC)</a></li>
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="gb">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Governing Body</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Sr. No.</th><th>Name</th><th>Designation</th></tr></thead>
                <tbody>
                  <tr><td>1</td><td>Prof. Maruti N. Navale</td><td>Chairman</td></tr>
                  <tr><td>2</td><td>Dr. (Mrs.) Sunanda M. Navale</td><td>Member</td></tr>
                  <tr><td>3</td><td>Mrs. Rachana Navale Ashtekar</td><td>Member</td></tr>
                  <tr><td>4</td><td>Dr. Rohit M. Navale</td><td>Member</td></tr>
                  <tr><td>5</td><td>Mrs. Shruti R. Navale</td><td>Member</td></tr>
                  <tr><td>6</td><td>Dr. Arvind V. Deshpande</td><td>Director, SPSPM</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="cdc">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">College Development Committee (CDC)</h4></div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead><tr><th>Sr. No.</th><th>Name</th><th>Designation</th></tr></thead>
                <tbody>
                  <tr><td>1</td><td>Prof. Maruti N. Navale</td><td>Chairman</td></tr>
                  <tr><td>2</td><td>Dr. (Mrs.) Sunanda M. Navale</td><td>Member</td></tr>
                  <tr><td>3</td><td>Mrs. Rachana Navale Ashtekar</td><td>Member</td></tr>
                  <tr><td>4</td><td>Dr. Rohit M. Navale</td><td>Member</td></tr>
                  <tr><td>5</td><td>Mrs. Shruti R. Navale</td><td>Member</td></tr>
                  <tr><td>6</td><td>Dr. K. J. Karande</td><td>Member Secretary</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="downloads">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Downloads</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerGov').setAttribute('src','<?php echo $pdf; ?>');">GB & CDC Constitution (PDF)</a></li>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerGov" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh; border:1px solid #ccc;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
