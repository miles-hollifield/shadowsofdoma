<?php
  require_once('../private/initialize.php');
  include(SHARED_PATH . '/public_header.php');

?>
        <nav>
          <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="staff.php">Meet Our Staff</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="roster.php">Roster</a></li>
            <?php if($session->is_logged_in()) { ?>
            <li><a href="account.php">Hello, <?php echo $admin->user_name; ?></a></li>
            <?php } else { ?>
            <li><a href="login.php">Log in/Register</a></li>
            <?php } ?>
          </ul>
        </nav>
      </header>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Welcome Shadows!</h1>
            <p>For us, it’s more than just a game. It’s about the experiences we make along the way.</p>
            <p>Shadows of Doma was built on the belief that promoting a welcoming and fun environment for both new and veteran players alike is what makes this game so special, and we carry that belief into everything we do.</p>
          </div>
        </div>
      </div>
      
      <div id="page-img-wrapper">
        <img src="img/ff14-house.png" alt="House" width="1096" height="616">
      </div>
      
      <footer>
        <p>&#169; Copyright 2021. Created by Miles Hollifield.</p>
      </footer>
      
    </div>
  </body>
</html>