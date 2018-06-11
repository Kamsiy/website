<header>
  <?php
    $shelf = $_SERVER['PHP_SELF'];
    $last = strripos($shelf, '/');
    $last = (substr($shelf, $last));
  ?>
  <div id="nav" class = " fixed-top">
      <nav class="navbar container navbar-expand-md navbar-light ">
        <a href="<?php echo ROOT?>" class="navbar-brand"><img src="public/img/logo1.png" style="width: 100px; height: 70px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
          <ul class="navbar-nav navbar-right text-center">
            <li class="nav-item <?php echo ($last == '/index.php' ? ' active' : '');?>">
              <a href="<?php echo(ROOT . '/index.php') ?>">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a id="projects" class = " 
              <?php switch($last){ 
                case '/snowplow.php'; 
                  echo ' active'; 
                  break;
                case '/exosuit.php'; 
                  echo 'active'; 
                  break;
                case '/battlebots.php'; 
                  echo 'active'; 
                  break;
                break;
              }
              ?>">PROJECTS</a>
              <div class="projects-content">
                <a href="<?php echo(ROOT . '/snowplow.php') ?>" class="<?php echo ($last == '/snowplow.php' ? ' active' : '');?>">Snow Plough</a>
                <a href="<?php echo(ROOT . '/exosuit.php') ?>"  class="<?php echo ($last == '/exosuit.php' ? ' active' : '');?>">Exo Suit</a>
                <a href="<?php echo(ROOT . '/battlebots.php') ?>"  class="<?php echo ($last == '/battlebots.php' ? ' active' : '');?>">Battle Bots</a>
              </div>
            </li>
            <li class="nav-item <?php echo ($last == '/officers.php' ? ' active' : '');?>">
              <a href="<?php echo(ROOT . '/officers.php') ?>">OFFICERS</a>
            </li>
            <li class="nav-item <?php echo ($last == '/calendar.php' ? ' active' : '');?>">
              <a href="<?php echo(ROOT . '/calendar.php') ?>">CALENDAR</a>
            </li>
            <li class="nav-item <?php echo ($last == '/gallery.php' ? ' active' : '');?>">
              <a href="<?php echo(ROOT . '/gallery.php') ?>">GALLERY</a>
            </li>
          </ul>
        </div>
      </nav>
  </div>
</header>
