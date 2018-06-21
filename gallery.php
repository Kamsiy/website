<?php
  require_once('init/initialize.php');
  $pageTitle = "GALLERY";
?>
<!DOCTYPE html>
<html lang="en">
  <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
  <body>

    <main>
      <?php
        include(TEMPLATE_PATH . '/header.php');
      ?>
      <section id="gallery">
        <div class="gallery-container">
            <h2>GALLERY</h2>
            <div class="row">
                <div class="column">
                    <div class="gallery-picture">
                    <img src="public/img/gallery_2017_2018/plow2.png">
                    </div>
                </div>
                <div class="column">
                    <div class="gallery-picture">
                    <img src="public/img/gallery_2017_2018/plow14.png">
                    </div>
                </div>
                <div class="column">
                    <div class="gallery-picture">
                    <img src="public/img/gallery_2017_2018/plow16.png" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="gallery-picture">
                        <img src="public/img/gallery_2017_2018/batbot_12.png">
                    </div>
                </div>
                <div class="column">
                    <div class="gallery-picture">
                        <img src="public/img/gallery_2017_2018/batbot_11.png" >
                    </div>
                </div>
                <div class="column">
                    <div class="gallery-picture">
                        <img src="public/img/gallery_2017_2018/plow18.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="gallery-picture">
                    <img src="public/img/gallery_2017_2018/plow13.png">
                    </div>
                </div>
                <div class="column">
                    <div class="gallery-picture">
                        <img src="public/img/gallery_2017_2018/plow17.png" >
                    </div>
                </div>
                <div class="column">
                    <div class="gallery-picture">
                        <img src="public/img/gallery_2017_2018/plow15.png" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="gallery-picture">
                    <img src="public/img/gallery_2017_2018/plow1.png">
                    </div>
                </div>
                <!-- <div class="column">
                    <div class="gallery-picture"></div>
                </div>
                <div class="column">
                    <div class="gallery-picture">

                    </div>
                </div> -->
            </div>
        </div>
      </section>
      <?php include(TEMPLATE_PATH . '/footer.php');
       ?>
    </main>
    <?php include(TEMPLATE_PATH . '/script.php') ?>
  </body>
</html>
