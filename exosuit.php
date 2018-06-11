
<?php
  require_once('init/initialize.php');
  $pageTitle = "HOME";
?>
<!DOCTYPE html>
<html lang ="en">
  <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
  <body>
    <main>
    <?php include(TEMPLATE_PATH . '/header.php'); ?>
    <section id="snowplow" class="projects">
        <div class="bg" style="background-image: url(public/img/suit.png);">
            <div class="overlay">
                <h2>Exo-skeleton</h2>
            </div>
        </div>
    </section>
     <?php include(TEMPLATE_PATH . '/footer.php'); ?>
    
   </main>

    <?php include(TEMPLATE_PATH . '/script.php'); ?>
  </body>
</html>

