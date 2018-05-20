<?php
  define('PRIVATE_PATH', dirname(__FILE__));
  define('PROJECT_PATH', dirname(PRIVATE_PATH));
  define('PUBLIC_PATH', PROJECT_PATH . '/public');
  define('TEMPLATE_PATH', PUBLIC_PATH . '/template');
  define('CONTENT_PATH', TEMPLATE_PATH . '/content');
  define('VIEWS_PATH', PUBLIC_PATH . '/views');

  $pub = strpos($_SERVER['SCRIPT_NAME'], '/public') + 8;
  $doc = substr($_SERVER['SCRIPT_NAME'], 0, $pub);
  define("ROOT", $doc);

?>
