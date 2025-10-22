<?php /* SKNSCOE-like homepage */ ?>
<!-- Hero slider (with same animation and sliding as source) -->
<header id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:0;">
  <div class="carousel-inner">
    <div class="active item"><img src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/img/Slider/111.webp" alt="SKNSCOE"></div>
    <div class="item"><img src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/img/Slider/1612893054116_1.webp" alt="SKNSCOE"></div>
    <div class="item"><img src="<?php echo BASE_URL; ?>/public/assets/vendor/sknscoe/img/Slider/College.webp" alt="SKNSCOE"></div>
  </div>
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  
</header>
<script>
  (function($){
    function startCarousel(){
      var $c = $("#myCarousel");
      if ($c.length && typeof $c.carousel === 'function') {
        $c.carousel({ interval: 3000, pause: false });
      }
    }
    $(startCarousel);
    $(window).on('load', startCarousel);
  })(jQuery);
</script>

<div id="container" class="mt-4">
<section class="container-fluid" style="height: fit-content; padding-left:2vw; padding-right:2vw;">
    <div class="row" style="height:100%;">
      <div class="col-md-4">
        <div class="featured-box">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">PRESIDENT'S MESSAGE</title></figure></div>
          <?php if (!empty($president)): $p=$president[0]; ?>
            <?php if(!empty($p['image_url'])): ?><img src="<?php echo e($p['image_url']); ?>" align="left" height="75" width="75"><?php endif; ?>
            <div class="text" style="text-align:justify;">
              <strong><?php echo e($p['title']); ?></strong><br>
              <?php echo nl2br(e($p['body'])); ?>
            </div>
          <?php else: ?><p class="text-muted">No message yet.</p><?php endif; ?>
          <a href="<?php echo BASE_URL; ?>/public/presidents-message.php" style="float:right;color:#b6124a;">Read More</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="featured-box">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">PRINCIPAL'S MESSAGE</title></figure></div>
          <?php if (!empty($principal)): $p=$principal[0]; ?>
            <?php if(!empty($p['image_url'])): ?><img src="<?php echo e($p['image_url']); ?>" align="left" height="75" width="75"><?php endif; ?>
            <div class="text" style="text-align:justify;">
              <strong><?php echo e($p['title']); ?></strong><br>
              <?php echo nl2br(e($p['body'])); ?>
            </div>
          <?php else: ?><p class="text-muted">No message yet.</p><?php endif; ?>
          <a href="<?php echo BASE_URL; ?>/public/principals-desk.php" style="float:right;color:#b6124a;">Read More</a>
        </div>
      </div>
      <div class="col-md-4" style="height:100%;">
        <div id="news" class="featured-box" style="height:100%;">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">NEWS / ANNOUNCEMENT</title></figure></div>
          <div class="list styled custom-list" style="height:calc(100% - 2.5em);">
            <marquee style="height:100%;" direction="down" behavior="scroll" scrollamount="2" scrolldelay="0" onmouseover="this.stop();" onmouseout="this.start();">
              <ul style="text-align:justify;">
                <?php foreach ($news as $n): ?>
                  <li>
                    <?php if(!empty($n['link_url'])): ?><a href="<?php echo e($n['link_url']); ?>" target="_blank"><?php endif; ?>
                      <?php echo e($n['title']); ?>
                    <?php if(!empty($n['link_url'])): ?></a><?php endif; ?>
                  </li>
                <?php endforeach; ?>
                <?php if (empty($news)): ?><li class="text-muted">No news yet.</li><?php endif; ?>
              </ul>
            </marquee>
            <a href="#news" style="float:right;color:#b6124a;margin-top:-5px;">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news-box mt-4">
    <div class="container-fluid" style="padding-left:2vw; padding-right:2vw;">
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">PUBLICATION</title></figure></div>
          <div class="list styled custom-list">
            <ul>
              <?php foreach ($publications as $p): ?>
                <li>
                  <?php if(!empty($p['link_url'])): ?><a href="<?php echo e($p['link_url']); ?>" target="_blank"><?php endif; ?>
                    <?php echo e($p['title']); ?>
                  <?php if(!empty($p['link_url'])): ?></a><?php endif; ?>
                </li>
              <?php endforeach; ?>
              <?php if (empty($publications)): ?><li class="text-muted">No publications.</li><?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">Workshop / FDP / STTP / Seminar</title></figure></div>
          <div class="list styled custom-list">
            <ul>
              <?php foreach ($workshops as $w): ?>
                <li style="color:#b6124a;">
                  <?php if(!empty($w['brochure_url'])): ?><a href="<?php echo e($w['brochure_url']); ?>" target="_blank"><?php endif; ?>
                    <?php echo e($w['title']); ?>
                  <?php if(!empty($w['brochure_url'])): ?></a><?php endif; ?>
                </li>
              <?php endforeach; ?>
              <?php if (empty($workshops)): ?><li class="text-muted">No items.</li><?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail"><figure><title style="font-size:15px;text-transform:uppercase;">NEWS LETTERS</title></figure>
            <?php if (!empty($newsletters)): $n=$newsletters[0]; ?>
              <?php $nl_link = !empty($n['pdf_url']) ? $n['pdf_url'] : (!empty($n['link_url']) ? $n['link_url'] : null); ?>
              <?php if ($nl_link): ?>
                <a href="<?php echo e($nl_link); ?>" target="_blank" rel="noopener">
                  <img src="<?php echo e($n['thumbnail_url'] ?? ($n['image_url'] ?? 'https://www.sknscoe.ac.in/Newsletters/Newsletter_2.jpg')); ?>" class="img-responsive" style="max-width:100%;height:auto;">
                </a>
              <?php else: ?>
                <div class="text-muted">No newsletter.</div>
              <?php endif; ?>
            <?php else: ?>
              <div class="text-muted">No newsletter.</div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- VIDEO GALLARY -->
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">VIDEO GALLARY</title></figure></div>
          <?php if (!empty($videos)): ?>
            <div class="video-scroll" style="display:flex; gap:12px; overflow-x:auto; flex-wrap:nowrap; scroll-snap-type:x mandatory; -webkit-overflow-scrolling: touch; padding-bottom:8px;">
              <?php foreach ($videos as $v): ?>
                <div class="video-item" style="flex:0 0 360px; scroll-snap-align:start;">
                  <div class="card h-100">
                    <div class="card-body">
                      <?php if (!empty($v['embed_html'])): ?>
                        <?php echo $v['embed_html']; ?>
                      <?php elseif (!empty($v['youtube_url'])): ?>
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="<?php echo preg_replace('/watch\\?v=([^&]+)/', 'embed/$1', e($v['youtube_url'])); ?>" allowfullscreen></iframe>
                        </div>
                      <?php elseif (!empty($v['video_url'])): ?>
                        <video controls style="width:100%;"><source src="<?php echo e($v['video_url']); ?>"></video>
                      <?php else: ?>
                        <div class="text-muted">No video source.</div>
                      <?php endif; ?>
                      <?php if (!empty($v['title'])): ?><h6 class="mt-2"><?php echo e($v['title']); ?></h6><?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php else: ?>
            <p class="text-muted">No videos.</p>
          <?php endif; ?>
        </div>
      </div>

      <!-- GATE Qualifiers -->
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">GATE Qualifiers</title></figure></div>
          <ul class="list-group">
            <?php foreach ($gate as $g): ?>
              <li class="list-group-item">
                <?php
                  $year = !empty($g['year']) ? $g['year'] : (!empty($g['created_at']) ? substr($g['created_at'],0,4) : '');
                  $name = !empty($g['name']) ? $g['name'] : (!empty($g['student_name']) ? $g['student_name'] : (!empty($g['title']) ? $g['title'] : ''));
                ?>
                <?php if ($year): ?><?php echo e($year); ?> - <?php endif; ?><?php echo e($name); ?>
                <?php if (!empty($g['branch'])): ?> (<?php echo e($g['branch']); ?>)<?php endif; ?>
                <?php if (!empty($g['score'])): ?> - Score: <?php echo e($g['score']); ?><?php endif; ?>
              </li>
            <?php endforeach; ?>
            <?php if (empty($gate)): ?><li class="list-group-item text-muted">No GATE qualifiers.</li><?php endif; ?>
          </ul>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">LATEST EVENT</title></figure></div>
          <div class="row">
            <!-- Left: Latest Events -->
            <div class="col-md-6">
            <div class="auto-scroll" data-interval="2500">
              <div class="auto-scroll-track">
                <?php foreach ($latest_events as $e): ?>
                  <div class="col-sm-6">
                    <div class="card h-100">
                      <?php if($e['image_url']): ?><img class="card-img-top" src="<?php echo e($e['image_url']); ?>" alt="Event"><?php endif; ?>
                      <div class="card-body">
<div class="small-muted"><?php echo e($e['date']); ?></div>
                        <h6 class="card-title"><?php echo e($e['title']); ?></h6>
                        <?php if (!empty($e['description'])): ?>
                          <p class="small-muted mt-1"><?php echo nl2br(e($e['description'])); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <?php if (empty($latest_events)): ?><p class="text-muted">No latest events.</p><?php endif; ?>
              </div>
            </div>
            </div>
            <!-- Right: Previous Events -->
            <div class="col-md-6">
              <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">Previous Events</title></figure></div>
              <div class="auto-scroll" data-interval="2800">
                <div class="auto-scroll-track">
                  <?php foreach ($prev_events as $e): ?>
                    <div class="col-sm-6">
                      <div class="card h-100">
                        <?php if($e['image_url']): ?><img class="card-img-top" src="<?php echo e($e['image_url']); ?>" alt="Event"><?php endif; ?>
                        <div class="card-body">
<div class="small-muted"><?php echo e($e['date']); ?></div>
                          <h6 class="card-title"><?php echo e($e['title']); ?></h6>
                          <?php if (!empty($e['description'])): ?>
                            <p class="small-muted mt-1"><?php echo nl2br(e($e['description'])); ?></p>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                  <?php if (empty($prev_events)): ?><p class="text-muted">No previous events.</p><?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">Previous Events</title></figure></div>
          <div class="auto-scroll" data-interval="2600">
            <div class="auto-scroll-track">
              <?php foreach ($prev_events as $e): ?>
                <div class="col-md-3">
                  <div class="card h-100">
                    <?php if($e['image_url']): ?><img class="card-img-top" src="<?php echo e($e['image_url']); ?>" alt="Event"><?php endif; ?>
                    <div class="card-body">
<div class="small-muted"><?php echo e($e['date']); ?></div>
                      <h6 class="card-title"><?php echo e($e['title']); ?></h6>
                      <?php if (!empty($e['description'])): ?>
                        <p class="small-muted mt-1"><?php echo nl2br(e($e['description'])); ?></p>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              <?php if (empty($prev_events)): ?><p class="text-muted">No previous events.</p><?php endif; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">IN THE NEWS</title></figure></div>
          <?php $pressCols = [[],[],[]]; $i=0; foreach ($press as $p) { $pressCols[$i % 3][] = $p; $i++; } ?>
          <div class="row">
            <?php for ($c=0; $c<3; $c++): ?>
              <div class="col-md-4">
                <ul class="list-group">
                  <?php foreach ($pressCols[$c] as $p): ?>
                    <li class="list-group-item d-flex justify-content-between">
                      <div>
                        <strong><?php echo e($p['title']); ?></strong>
                        <?php if(!empty($p['source'])): ?> <span class="small-muted">— <?php echo e($p['source']); ?></span><?php endif; ?>
                        <?php if(!empty($p['date'])): ?> <div class="small-muted"><?php echo e($p['date']); ?></div><?php endif; ?>
                      </div>
                      <?php if(!empty($p['link_url'])): ?><a target="_blank" class="btn btn-sm btn-outline-primary" href="<?php echo e($p['link_url']); ?>">Link</a><?php endif; ?>
                    </li>
                  <?php endforeach; ?>
                  <?php if (empty($pressCols[$c])): ?><li class="list-group-item text-muted">No items.</li><?php endif; ?>
                </ul>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12">
          <div class="thumbnail title"><figure><title style="font-size:15px;text-transform:uppercase;">Student's Achievement</title></figure></div>
          <div class="auto-scroll" data-interval="2700">
            <div class="auto-scroll-track">
              <?php foreach ($achievements as $a): ?>
                <div class="col-md-4">
                  <div class="card h-100">
                    <?php if($a['image_url']): ?><img class="card-img-top" src="<?php echo e($a['image_url']); ?>" alt="Achievement"><?php endif; ?>
                    <div class="card-body">
                      <h6 class="card-title"><?php echo e($a['title'] ?: $a['student_name']); ?></h6>
                      <div class="small-muted"><?php echo e($a['date']); ?></div>
                      <?php if($a['description']): ?><p class="mt-2"><?php echo nl2br(e($a['description'])); ?></p><?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              <?php if (empty($achievements)): ?><p class="text-muted">No achievements.</p><?php endif; ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

<script>
  (function($){
    function initAutoScroll(){
      $('.auto-scroll').each(function(){
        var $wrap = $(this);
        var $track = $wrap.find('.auto-scroll-track');
        if(!$track.length) return;
        var delay = parseInt($wrap.data('interval'), 10) || 3000;
        var hover = false;
        $wrap.on('mouseenter', function(){ hover = true; });
        $wrap.on('mouseleave', function(){ hover = false; });
        setInterval(function(){
          if(hover) return;
          var step = Math.max(240, Math.round($wrap.innerWidth() * 0.8));
          var cur = $track.scrollLeft();
          var max = $track[0].scrollWidth - $track.innerWidth();
          var next = cur + step;
          if(next >= max - 5) next = 0;
          $track.animate({ scrollLeft: next }, 600);
        }, delay);
      });
    }
    $(initAutoScroll);
    $(window).on('load', initAutoScroll);
  })(jQuery);
</script>
