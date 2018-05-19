<?php
  require_once('init/initialize.php');
  $str = file_get_contents(PUBLIC_PATH . "/data/team.json");
  $json = json_decode($str, true);
  $pageTitle = "OFFICERS";
?>
<!DOCTYPE html>
<html>
  <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
  <body>
    <main>
      <?php
        include(TEMPLATE_PATH . '/header.php');
        include(CONTENT_PATH . '/team.php');
        include(TEMPLATE_PATH . '/footer.php');
       ?>
    </main>
    <?php include(TEMPLATE_PATH . '/script.php') ?>
  </body>
</html>
