
<?php
  require_once('init/initialize.php');
  $pageTitle = "Battlebots";
?>

<!DOCTYPE html>
<html lang="en">
  <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
  <body>
    <main>
    <?php include(TEMPLATE_PATH . '/header.php'); ?>
    <section id="battlebots" class="projects" >
        <div class="bg" style="background-image: url(public/img/gallery_2017_2018/batbot_7.png);">
            <div class="overlay">
                <h2>Battlebots</h2>
            </div>
        </div>
        <div class="content main-container">
            <p>The Battlebots project is one that aims to bring extreme engineering and excitement to club 
                members in a safe and educational manner. One can learn engineering concepts such as finite 
                element analysis, basic circuit construction, and professional CAD modeling. This project 
                uniquely dangerous and there is a high level of caution when dealing with testing; however, 
                due to our dedicated team, Iowa State University has approved all testing and building of 
                battlebots.
            </p>
            <p>
            The Iowa State Robotics Club participated in our very first regional competition, BotsKC, on 
            April 7th, 2018 at Olathe Northwest High School. In this regional, our team placed 9th out of 27 teams. 
            “Bulkhead”, our team’s robot, was built in about a week and a half with only one member who had experience
             working with these technologies. We were happy to represent Iowa State and can't wait to compete again.
            </p>
            <p>
            In the future, we hope to compete with multiple teams, as this project always receives a lot of interest from Clubfest. 
            We plan on having one team that improves previous robots, such as Bulkhead, to learn the ropes of this 
            type of competition. The other team will be run by project managers and work on creating new and innovative 
            designs, as well as communicating with industry professionals.
            </p>
        </div>
    </section>
     <?php include(TEMPLATE_PATH . '/footer.php'); ?>
    
   </main>

    <?php include(TEMPLATE_PATH . '/script.php'); ?>
  </body>
</html>

