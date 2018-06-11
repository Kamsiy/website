
<?php
  require_once('init/initialize.php');
  $pageTitle = "HOME";
?>
<!DOCTYPE html>
<html lang="en">
  <head><?php include(TEMPLATE_PATH . '/head.php'); ?></head>
  <body>
    <main>
    <?php include(TEMPLATE_PATH . '/header.php'); ?>
    <section id="snowplow" class="projects">
        <div class="bg" style="background-image: url(public/img/gallery_2017_2018/plow7.png);">
            <div class="overlay">
                <h2>SNOWPLOW</h2>
            </div>
        </div>
        <div class="content main-container">
            <p>The purpose of this project is to design, build and operate a fully autonomous snowplow for the purpose of 
                removing snow from a designated path. This project requires mechanical, electrical, and software expertise. 
                What makes this project unique in the world of robotics is its heavy focus on path planning combined with 
                location sensing and obstacle avoidance. All of this is combined in an environment where mechanical ability 
                and sensors can be highly limited. With the rise of autonomous vehicles, the importance of solving these 
                problems is at an all-time high. In this project, we aim to provide a unique solution to these problems in 
                an attempt to advance such an important field of research.
            </p>
            <p>Last year two major events happened that set this project up for success. First, we designed and built, thanks to our
                sponsors, a plow capable of competing in the most rigorous winter environments. This plow was designed with
                the idea that it would be used in many future competitions. Second, we brought ten team members to the ION 
                Snowplow Competition in St. Paul Minnesota, where we competed against seven other teams. Although we weren't
                able to take home the win, we took home an endless supply of ideas for the following year.</p>
            <p>Major changes in the year to come encompass all aspects of our design. Mechanically, we plan to change our
                motors, although powerful enough, were not owned by the robotics club. We also intend to alter our drive 
                shaft to motor connection to better accommodate torque distribution. Electrically, we intend to better 
                regulate our battery temperature with a shell casing and incorporate sensors and reactive measures when
                our system changes. SICK Sensors donated a lidar, and we intend to use this to sense the world. We are 
                intending to construct a better software architecture that incorporates a more proactive approach to our 
                sensing and a faster reactive approach to our mechanics. Our team is currently working on these upgrades 
                and we are excited to see where this project will be within half a year.</p>        
        </div>
    </section>
     <?php include(TEMPLATE_PATH . '/footer.php'); ?>
    
   </main>

    <?php include(TEMPLATE_PATH . '/script.php'); ?>
  </body>
</html>
