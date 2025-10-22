<?php require_once __DIR__ . '/../templates/header.php'; ?>
<?php
  $pdf = BASE_URL . '/public/assets/naac/sample.pdf';
  $practices = [
    [
      'title' => 'Blended Learning through MOODLE and E-Content',
      'objectives' => [
        'Enhance teaching-learning with flexible access to content and assessments.',
        'Increase student engagement via quizzes, forums, and assignments.',
      ],
      'context' => 'To support diverse learners and ensure continuity of learning beyond classroom hours, faculty integrate MOODLE LMS with face-to-face sessions.',
      'practice' => [
        'Pre-lecture resources (PPTs, videos) uploaded ahead of classes.',
        'Weekly quizzes and programming assignments on MOODLE.',
        'Integration of recorded lectures and YouTube e-content.',
        'Virtual labs and simulation tools for experiential learning.',
      ],
      'evidence' => [
        'Improved quiz participation and timely submissions.',
        'Positive feedback in Student Satisfaction Survey (SSS).',
      ],
      'problems' => 'Bandwidth constraints for some learners; addressed by offline handouts and lab access.',
      'resources' => [$pdf],
    ],
    [
      'title' => 'Community Outreach and Rural Engagement at Holy Place',
      'objectives' => [
        'Promote social responsibility and problem solving for local needs.',
        'Expose students to real-world applications and service learning.',
      ],
      'context' => 'Being at a holy place draws large pilgrim crowds; institute contributes through tech-enabled crowd management and cleanliness drives.',
      'practice' => [
        'Mobile app for information dissemination (routes, facilities).',
        'Cleanliness, water distribution and first-aid camps by NSS.',
        'IoT-based monitoring demos during festivals.',
      ],
      'evidence' => [
        'App usage analytics and beneficiary feedback.',
        'Recognition from civic authorities for support.',
      ],
      'problems' => 'Coordination across multiple civic stakeholders; handled via MoUs and prior planning.',
      'resources' => [$pdf],
    ],
  ];
?>
<style>
  .sec-card{background:#fff;box-shadow:0 0 6px #e1e1e1;border-radius:4px;padding:14px;margin-bottom:16px}
  .animated-title{display:inline-block;animation: pulseTitle 2.5s ease-in-out infinite}
  @keyframes pulseTitle{0%{transform:scale(1)}50%{transform:scale(1.03)}100%{transform:scale(1)}}
.skn-sidebar{padding-top:8px}
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row" style="margin-left:0; margin-right:0;">
<button type="button" class="btn skn-sidebar-toggle" aria-label="Open sidebar">
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>
    </button>
<div class="col-lg-3 col-md-3 col-sm-12 sidebar skn-sidebar">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#p1" data-toggle="tab" style="font-size:18px;">Best Practice 1</a></li>
        <li><a href="#p2" data-toggle="tab" style="font-size:18px;">Best Practice 2</a></li>
        <li><a href="#downloads" data-toggle="tab" style="font-size:18px;">Downloads</a></li>
      </ul>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9"><br>
      <div class="tab-content">
        <div class="tab-pane active" id="p1">
          <div class="sec-card">
            <div class="message"><h4 class="animated-title" style="padding-left:5px;"><?php echo htmlspecialchars($practices[0]['title'], ENT_QUOTES); ?></h4></div>
            <h5>Objectives</h5>
            <ul><?php foreach ($practices[0]['objectives'] as $o): ?><li><?php echo htmlspecialchars($o, ENT_QUOTES); ?></li><?php endforeach; ?></ul>
            <h5>Context</h5>
            <p><?php echo htmlspecialchars($practices[0]['context'], ENT_QUOTES); ?></p>
            <h5>The Practice</h5>
            <ul><?php foreach ($practices[0]['practice'] as $o): ?><li><?php echo htmlspecialchars($o, ENT_QUOTES); ?></li><?php endforeach; ?></ul>
            <h5>Evidence of Success</h5>
            <ul><?php foreach ($practices[0]['evidence'] as $o): ?><li><?php echo htmlspecialchars($o, ENT_QUOTES); ?></li><?php endforeach; ?></ul>
            <h5>Problems Encountered and Resources Required</h5>
            <p><?php echo htmlspecialchars($practices[0]['problems'], ENT_QUOTES); ?></p>
          </div>
        </div>
        <div class="tab-pane" id="p2">
          <div class="sec-card">
            <div class="message"><h4 class="animated-title" style="padding-left:5px;"><?php echo htmlspecialchars($practices[1]['title'], ENT_QUOTES); ?></h4></div>
            <h5>Objectives</h5>
            <ul><?php foreach ($practices[1]['objectives'] as $o): ?><li><?php echo htmlspecialchars($o, ENT_QUOTES); ?></li><?php endforeach; ?></ul>
            <h5>Context</h5>
            <p><?php echo htmlspecialchars($practices[1]['context'], ENT_QUOTES); ?></p>
            <h5>The Practice</h5>
            <ul><?php foreach ($practices[1]['practice'] as $o): ?><li><?php echo htmlspecialchars($o, ENT_QUOTES); ?></li><?php endforeach; ?></ul>
            <h5>Evidence of Success</h5>
            <ul><?php foreach ($practices[1]['evidence'] as $o): ?><li><?php echo htmlspecialchars($o, ENT_QUOTES); ?></li><?php endforeach; ?></ul>
            <h5>Problems Encountered and Resources Required</h5>
            <p><?php echo htmlspecialchars($practices[1]['problems'], ENT_QUOTES); ?></p>
          </div>
        </div>
        <div class="tab-pane" id="downloads">
          <div class="sec-card">
            <div class="message"><h4 style="padding-left:5px;">Downloads</h4></div>
            <ul>
              <li><a href="#" onclick="event.preventDefault(); document.getElementById('pdfViewerBP').setAttribute('src','<?php echo $pdf; ?>');">Best Practices Document (Consolidated) — View</a></li>
            </ul>
            <div class="pdf-viewer">
              <embed id="pdfViewerBP" src="<?php echo $pdf; ?>" type="application/pdf" width="100%" style="height:70vh; border:1px solid #ccc;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>
