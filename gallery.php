<?php
  require_once('init/initialize.php');
  $pageTitle = "GALLERY";
?>
<!DOCTYPE html>
<html>
  <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
  <body>

    <main>
      <?php
        include(TEMPLATE_PATH . '/header.php');
        include(TEMPLATE_PATH . '/footer.php');
       ?>
    </main>
    <?php include(TEMPLATE_PATH . '/script.php') ?>
  </body>
</html>
