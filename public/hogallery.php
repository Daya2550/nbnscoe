<?php require_once __DIR__ . '/../templates/header.php'; ?>
<style>
  .album-title { font-weight:600; margin:8px 0 12px; }
  .gallery-card { background:#fff; padding:8px; box-shadow:0 0 6px #d9d9d9; border-radius:4px; margin-bottom:16px; height:100%; }
  .gallery-card img { width:100%; height:180px; object-fit:cover; border-radius:3px; }
  .gallery-caption { font-size:13px; margin-top:6px; text-align:center; }
</style>
<div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
  <div class="row">
    <div class="col-md-12">
      <div class="message"><h4 style="padding-left:5px;">PHOTO GALLERY</h4></div>
    </div>
  </div>

  <?php
    // Local gallery items (self-contained)
    $photos = [
      ['title'=>'1. CARNIVAL 2K23 Inauguration', 'src'=> BASE_URL . '/public/assets/vendor/sknscoe/img/Slider/111.webp'],
      ['title'=>'2. FE Project Exhibition Competition', 'src'=> BASE_URL . '/public/assets/department/cse/img/IoT Lab.jpg'],
      ['title'=>'3. SPECTRUM 2K19 Inaguration', 'src'=> BASE_URL . '/public/assets/vendor/sknscoe/img/Slider/1612893054116_1.webp'],
      ['title'=>'4. SPECTRUM 2K22', 'src'=> BASE_URL . '/public/assets/vendor/sknscoe/img/Slider/College.webp'],
      ['title'=>'5. WEENGS 2K20', 'src'=> BASE_URL . '/public/assets/department/cse/img/401-OOP Lab.JPG'],
      ['title'=>'6. CARNIVAL 2K23 Dance Performance', 'src'=> BASE_URL . '/public/assets/department/cse/img/402-CN Lab.JPG'],
      ['title'=>'7. CARNIVAL 2K23 Prize Distribution', 'src'=> BASE_URL . '/public/assets/department/cse/img/403-ADS Lab.jpg'],
      ['title'=>'8. Girls Forum Activity - Arogyavishayak Shibir', 'src'=> BASE_URL . '/public/assets/department/cse/img/404-AI & ML Lab.JPG'],
      ['title'=>'9. SPECTRUM 2K18', 'src'=> BASE_URL . '/public/assets/department/cse/img/COA-LAB.jpg'],
      ['title'=>'10. Industrial Visit', 'src'=> BASE_URL . '/public/assets/department/cse/img/Pre-Incubation-center.jpg'],
      ['title'=>'11. PG Research Lab', 'src'=> BASE_URL . '/public/assets/department/cse/img/lab2.JPG'],
      ['title'=>'12. IoT Workshop', 'src'=> BASE_URL . '/public/assets/department/cse/img/IoT Lab.jpg'],
    ];
  ?>

  <div class="row">
    <?php foreach ($photos as $p): ?>
      <div class="col-sm-6 col-md-3">
        <div class="gallery-card">
          <img src="<?php echo htmlspecialchars($p['src'], ENT_QUOTES); ?>" alt="Gallery">
          <div class="gallery-caption"><?php echo htmlspecialchars($p['title'], ENT_QUOTES); ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="row" style="margin-top:16px;">
    <div class="col-md-12">
      <div class="message"><h4 style="padding-left:5px;">VIDEO GALLERY</h4></div>
    </div>
    <div class="col-md-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6lt2JfJdGSY" allowfullscreen></iframe>
      </div>
      <div class="gallery-caption">Video: SKNSCOE Pandharpur</div>
    </div>
    <div class="col-md-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PkZNo7MFNFg" allowfullscreen></iframe>
      </div>
      <div class="gallery-caption">Video: Event Highlights</div>
    </div>
    <div class="col-md-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ysz5S6PUM-U" allowfullscreen></iframe>
      </div>
      <div class="gallery-caption">Video: Campus Tour</div>
    </div>
  </div>

  <div class="row" style="margin-top:16px;">
    <div class="col-md-12">
      <div class="message"><h4 style="padding-left:5px;">Student Testimonials</h4></div>
    </div>
    <div class="col-md-6">
      <ul>
        <li>Miss. Vaishnavi Kulkarni</li>
        <li>Miss. Vaibhavi Kulkarni</li>
        <li>Miss. Girija Dhamodare</li>
        <li>Mr. Parijat Navale, MECH</li>
        <li>Mr. Mubin Pirjade, CSE</li>
      </ul>
    </div>
    <div class="col-md-6">
      <ul>
        <li>Miss. Sonali Patil, CSE</li>
        <li>Miss. Alisha Tamboli, MECH</li>
        <li>Ms. Dhanashree Chavan, CSE</li>
        <li>Mr. Shubhankar Damodare, MECH</li>
        <li>Miss. Aishwarya Badave, ENTC</li>
      </ul>
    </div>
  </div>
</div>
<?php require_once __DIR__ . '/../templates/footer.php'; ?>