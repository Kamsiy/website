<header>
  <?php
    $shelf = $_SERVER['PHP_SELF'];
    $last = strripos($shelf, '/');
    $last = (substr($shelf, $last));
  ?>
  <div id="nav">
      <nav class="navbar navbar-expand-md navbar-light">
        <a href="index.html" class="navbar-brand"><img src="public/img/logo1.png" style="width: 100px; height: 70px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
          <ul class="navbar-nav navbar-right text-center">
            <li class="nav-item <?php echo ($last == '/index.php' ? ' active' : '');?>">
              <a href="<?php echo(ROOT . '/index.php') ?>">HOME</a>
            </li>
            <li class="nav-item <?php echo ($last == '/projects.php' ? ' active' : '');?>">
              <a href="<?php echo(ROOT . '/projects.php') ?>">PROJECTS</a>
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
