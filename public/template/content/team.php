<section id="officers">
  <h2>EXECUTIVE TEAM</h2>
  <div class="inner">
    <div class="row">
      <?php
        $person  = $json['team'];
        foreach ($person as $officers):
      ?>
        <div class="col-md-4 col-lg-3 col-12">
          <div class="box">
            <div class="inner-box">
            <img src=<?php echo $officers['image']; ?> alt="">
              <div class="info">
                <span class="name"><?php echo $officers['name']; ?></span>
                <span class="position"><?php echo $officers['position']; ?></span>
                <span class="box-links">
                </span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
    </div>
  </div>
  <h2>ADVISORS</h2>
  <div class="inner">
    <div class="row">
      <?php
        $person  = $json['advisers'];
        foreach ($person as $advisor):
      ?>
        <div class="col-md-4 col-lg-3 col-12">
          <div class="box">
            <div class="inner-box">
            <img src=<?php echo $advisor['image']; ?> alt="">
              <div class="info">
                <span class="name"><?php echo $advisor['name']; ?></span>
                <span class="position"><?php echo $advisor['position']; ?></span>
                <span class="box-links">
                </span>
              </div>
            </div>
          </div>

        </div>
        <?php endforeach ?>
    </div>
  </div>
    <h2>ALUMNI</h2>
</section>
