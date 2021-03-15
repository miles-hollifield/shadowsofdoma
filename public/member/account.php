<?php
  require_once('../../private/initialize.php');
  include(SHARED_PATH . '/member_header.php');
?>
    
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Account</h1>
              <button class="button-style"><a class="button-link-style" href="logout.php">Log Out <?php echo $session->user_name; ?></a></button>
          </div>
        </div>
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
