<?php
  require_once('init/initialize.php');
  $pageTitle = "Donate";
?>
<!DOCTYPE html>
<html lang="en">
  <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
  <body>
    <main>
      <?php include(TEMPLATE_PATH . '/header.php'); ?>
      <section id="donate">
        <div class="main-container">
          
          <h1>Donate</h1>
          <p>
            Through the help of our sponsors, we are able to build projects, provide 
            outreach events, travel to competitions, and grow as a team. Since our club 
            is project based, and each project requires both monetary and gifts-in-kind 
            donations, it is vitally important that we reach out for any and all help in-order 
            for our club to grow. Please allow us to state in advance that we are very 
            grateful for any contributions you have made in the past and will be making
            in the future.
          </p>
          <p>
            Our club is willing to work with any and all sponsors in a collaborative
            effort to represent them. Some examples of representation have been sponsor
            logos on shirts, logos and links on our site, and logos on our banners and 
            posters. Similarly, during our competition presentations, we always make it 
            a point to share who were our sponsors.
          </p>
          <div class="flex-container">
            <div class="row">
              <div class="flex-card col-lg-3 col-md-6" id="fourth">
                <span class="amount">$100 - $250</span>
                <hr class="divider">
                <span class="level">Level 1</span>
                <ul>
                  <li>Posters & banners </li>
                  <li>Project Presentations</li>
                  <li class="empty"></li>
                  <li class="empty"></li>
                  <li class="empty"></li>
                </ul>
                
              </div>
              
              <div class="flex-card col-lg-3 col-md-6" id ="third">
                <span class="amount">$250 - $500</span>
                <hr class="divider">
                <span class="level">Level 2</span>
                <ul>
                  <li>Posters & banners </li>
                  <li>Project presentations</li>
                  <li>Club Website (logo) </li>
                  <li class="empty"></li>
                  <li class="empty"></li>
                </ul>
                
              </div>
              <div class="flex-card col-lg-3 col-md-6" id="second">
                <span class="amount">$500 - $1000</span>
                <hr class="divider">
                <span class="level">Level 3</span>
                <ul>
                  <li>Posters & banners </li>
                  <li>Project Presentations</li>
                  <li>On Shirts </li>
                  <li>Club Website (links, logo) </li>
                  <li class="empty"></li>
                </ul>
                
              </div>
              <div class="flex-card col-lg-3 col-md-6" id="first">
                <span class="amount"> > $1000</span>
                <hr class="divider">
                <span class="level">Level 4</span>
                <ul>
                  <li>Posters & banners </li>
                  <li>Project Presentations</li>
                  <li>On Shirts</li>
                  <li>Workshops & hackathons</li>
                  <li>Club website (links, logo, description) </li>
                 </ul>
              </div>
            </div>
            <a href="<?php echo(ROOT . '/#contact') ?>" class="button">Contact Us</a>
            
          </div>
        </div>
        
      </section>
      <?php  include(TEMPLATE_PATH . '/footer.php');?>
    </main>
    <?php include(TEMPLATE_PATH . '/script.php') ?>
  </body>
</html>
