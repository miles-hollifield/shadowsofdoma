<?php
  require_once('../../private/initialize.php');
  $page = 'home';
  $pageTitle = 'Home';
  include(SHARED_PATH . '/member_header.php');
?>
    
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <?php if ($session->is_admin()) { ?>
            <h1>Welcome Admin <?php echo $session->user_name; ?>!</h1>
            <?php } else if ($session->is_logged_in()) { ?>
            <h1>Welcome <?php echo $session->user_name; ?>!</h1>
            <?php } ?>
            <p>For us, it’s more than just a game. It’s about the experiences we make along the way.</p>
            <p>Shadows of Doma was built on the belief that promoting a welcoming and fun environment for both new and veteran players alike is what makes this game so special, and we carry that belief into everything we do.</p>
          </div>
        </div>
      </div>
      
      <div id="page-img-wrapper">
        <img src="<?php echo url_for('/img/ff14-free-company.jpg'); ?>" alt="House" width="1190" height="742">
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
