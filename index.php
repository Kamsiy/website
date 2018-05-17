<?php
  require_once('private/initialize.php');
  $pageTitle = "HOME";
?>
<!DOCTYPE html>
<html>
  <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
  <body>
    <main>
    <?php
      include(TEMPLATE_PATH . '/header.php');
      include(CONTENT_PATH . '/about.php');
      include(CONTENT_PATH . '/projects.php');
      include(CONTENT_PATH . '/sponsors.php');
      include(CONTENT_PATH . '/join.php');
      include(CONTENT_PATH . '/contact.php');
      include(TEMPLATE_PATH . '/footer.php');
     ?>
   </main>

    <?php include(TEMPLATE_PATH . '/script.php'); ?>
  </body>
</html>
