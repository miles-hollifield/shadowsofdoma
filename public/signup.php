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
            <li><a class="current" href="login.php">Log in/Register</a></li>
          </ul>
        </nav>
      </header>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <?php

            if(is_post_request()) {

              // Create record using post parameters
              $args = $_POST['admin'];
              $admin = new Admin($args);
              $result = $admin->save();

              if($result === true) {
                $session->login($admin);
                $session->message('Welcome to Shadows of Doma!');
                redirect_to(url_for('index.php'));
              } else {
                // show errors
              }

            } else {
              // display the form
              $admin = new Admin;
            }

            ?>
            <h1>Sign Up</h1>
            <p>Please fill out the form below to become a member:</p>

            <?php echo display_errors($admin->errors); ?>

            <form action="<?php echo url_for('signup.php'); ?>" method="post">
              
              <div>
                <label for="first_name">First Name:</label>
                <input type="text" id="user_first_name" name="admin[user_first_name]" value="<?php echo h($admin->user_first_name); ?>">
              </div>
              
              <div>
                <label for="last_name">Last Name:</label>
                <input type="text" id="user_last_name" name="admin[user_last_name]" value="<?php echo h($admin->user_last_name); ?>">
              </div>

              <div>
                <label for="email">Email:</label>
                <input type="text" id="user_email" name="admin[user_email]" value="<?php echo h($admin->user_email); ?>">
              </div>

              <div>
                <label for="username">Username:</label>
                <input type="text" id="user_name" name="admin[user_name]" value="<?php echo h($admin->user_name); ?>">
              </div>

              <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="admin[password]" value="">
              </div>

              <div>
                <label for="confirm-pass">Confirm Password:</label>
                <input type="password" id="confirm-pass" name="admin[confirm_password]" value="">
              </div>

              <input type="submit" value="Sign Up">
            </form>
          </div>
        </div>
      </div>
      
      <footer>
        <p>&#169; Copyright 2021. Created by Miles Hollifield.</p>
      </footer>
      
    </div>
  </body>
</html>