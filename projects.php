<?php
    require_once('private/initialize.php');
    $pageTitle = "PROJECTS";
    ?>
<!DOCTYPE html>
<html>
<head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
<body>

<main>
<?php
    include(TEMPLATE_PATH . '/header.php');
    include(CONTENT_PATH . '/snowplow.php');
    include(CONTENT_PATH . '/battlebots.php');
    include(CONTENT_PATH . '/exosuit.php');
    include(TEMPLATE_PATH . '/footer.php');
    ?>
</main>
<?php include(TEMPLATE_PATH . '/script.php') ?>
</body>
</html>
