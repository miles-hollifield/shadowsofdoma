<?php
  require_once('../../private/initialize.php');
  $page = 'home';
  $pageTitle = 'Home';
  include(SHARED_PATH . '/admin_header.php');
?>

      <!----------------------- Page Marker ----------------------------->

      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <?php if ($session->is_logged_in() && $session->is_admin()) { ?>
            <h1>Welcome Admin <?php echo $session->user_name; ?>!</h1>
            <?php } ?>
            <p>For us, it’s more than just a game. It’s about the experiences we make along the way.</p>
            <p>Shadows of Doma was built on the belief that promoting a welcoming and fun environment for both new and veteran players alike is what makes this game so special, and we carry that belief into everything we do.</p>
          </div>
        </div>
      </div>
      
      <main id="page-img-wrapper">
        <img class="responsive" src="<?php echo url_for('/img/ff14-free-company.jpg'); ?>" alt="House" width="1190" height="742">
      </main>

      <!--------------------- 3 Calls to Action ------------------------->

      <article class="index-section">

        <section id="index-item-1" class="index-item-container">
          <div class="index-item background">
            <div class="item-img">
              <a href="<?php echo url_for('/admin/about.php'); ?>"><img id="img1" class="responsive" src="<?php echo url_for('/img/ff14-welcome.jpg'); ?>" alt="Free Company Welcome" width="360" height="202"></a>
            </div>
            <h2 class="center">About the Free Company</h2>
            <p>Shadows of Doma is a Free Company (guild) in the MMORPG game Final Fantasy XIV on Sargatanas server! Shadows of Doma is a social FC for the friendly and considerate,those looking to expand their...</p>
            <div class="learn">
              <a class="button-style button-link-style" href="<?php echo url_for('/admin/about.php'); ?>">Learn More</a>
            </div>
          </div>
        </section>
        
        <section id="index-item-2" class="index-item-container">
          <div class="index-item background">
            <div class="item-img">
              <a href="<?php echo url_for('/admin/staff.php'); ?>"><img id="img2" class="responsive" src="<?php echo url_for('/img/ff14-beach-small.png'); ?>" alt="Free Company Beach Photo" width="359" height="202"></a>
            </div>
            <h2 class="center">Meet Our Staff</h2>
            <p>Questions, comments, or concerns? Our Leadership Team is here to help! Be it big or small, our Council and Officer members are here to make sure you have the bestexperience possible during your..</p>
            <div class="learn">
              <a class="button-style button-link-style" href="<?php echo url_for('/admin/staff.php'); ?>">Learn More</a>
            </div>
          </div>
        </section>
        
        <section id="index-item-3" class="index-item-container">
          <div class="index-item background">
            <div class="item-img">
              <a href="<?php echo url_for('/admin/roster.php'); ?>"><img id="img3" class="responsive" src="<?php echo url_for('/img/ff14-board-small.jpg'); ?>" alt="Free Company Group Photo" width="359" height="202"></a>
            </div>
            <h2 class="center">The Roster</h2>
            <p>Here you'll find a list of our guildmates! Every one from our new recruits to our guildmaster is listed on this page. Our rankings in the guild determine yourwillingness to participate in our guild...</p>
            <div class="learn">
              <a class="button-style button-link-style" href="<?php echo url_for('/admin/roster.php'); ?>">Learn More</a>
            </div>
          </div>
        </section>
          
      </article>

      <!---------------------------- Mobile ----------------------------->

      <article class="index-section mobile">
        <section id="index-item-1" class="index-item-container-mobile">
          <div class="index-item background">
            <div class="item-img">
              <a href="<?php echo url_for('/admin/about.php'); ?>"><img id="img1" class="responsive" src="<?php echo url_for('/img/ff14-fc-desk-small.png'); ?>" alt="Free CompanyDesk" width="360" height="202"></a>
            </div>
            <h2 class="center">About the Free Company</h2>
            <p>Shadows of Doma is a Free Company (guild) in the MMORPG game Final Fantasy XIV on Sargatanas server! Shadows of Doma is a social FC for the friendly and considerate,those looking to expand their...</p>
            <div class="learn">
              <a class="button-style" href="<?php echo url_for('/admin/about.php'); ?>">Learn More</a>
            </div>
          </div>
        </section>
        
        <section id="index-item-2" class="index-item-container-mobile">
          <div class="index-item background">
            <div class="item-img">
              <a href="<?php echo url_for('/admin/staff.php'); ?>"><img id="img2" class="responsive" src="<?php echo url_for('/img/ff14-beach-small.png'); ?>" alt="Free CompanyBeach Photo" width="359" height="202"></a>
            </div>
            <h2 class="center">Meet Our Staff</h2>
            <p>Questions, comments, or concerns? Our Leadership Team is here to help! Be it big or small, our Council and Officer members are here to make sure you have the bestexperience possible during your..</p>
            <div class="learn">
              <a class="button-style" href="<?php echo url_for('/admin/staff.php'); ?>">Learn More</a>
            </div>
          </div>
        </section>
        
        <section id="index-item-3" class="index-item-container-mobile">
          <div class="index-item background">
            <div class="item-img">
              <a href="<?php echo url_for('/admin/roster.php'); ?>"><img id="img3" class="responsive" src="<?php echo url_for('/img/ff14-board-small.jpg'); ?>" alt="Free CompanyGroup Photo" width="359" height="202"></a>
            </div>
            <h2 class="center">The Roster</h2>
            <p>Here you'll find a list of our guildmates! Every one from our new recruits to our guildmaster is listed on this page. Our rankings in the guild determine yourwillingness to participate in ourguild activities, and...</p>
            <div class="learn">
              <a class="button-style" href="<?php echo url_for('/admin/roster.php'); ?>">Learn More</a>
            </div>
          </div>
        </section>        
    
      </article>

<?php
include(SHARED_PATH . '/public_footer.php');
?>
