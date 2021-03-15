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

            $errors = [];
            $user_name = '';
            $password = '';

            if(is_post_request()) {

              $user_name = $_POST['user_name'] ?? '';
              $password = $_POST['password'] ?? '';

              // Validations
              if(is_blank($user_name)) {
                $errors[] = "Username cannot be blank.";
              }
              if(is_blank($password)) {
                $errors[] = "Password cannot be blank.";
              }

              // if there were no errors, try to login
              if(empty($errors)) {
                $admin = Admin::find_by_username($user_name);
                // test if admin found and password is correct
                if($admin != false && $admin->verify_password($password)) {
                  // Mark admin as logged in
                  $session->login($admin);
                  redirect_to(url_for('index.php'));
                } else {
                  // username not found or password does not match
                  $errors[] = "Log in was unsuccessful.";
                }

              }

            }

            ?>

            <div id="content">
              <h1>Log in</h1>

              <?php echo display_errors($errors); ?>

              <form action="login.php" method="post">
                Username:<br />
                <input type="text" name="user_name" value="<?php echo h($user_name); ?>" /><br />
                Password:<br />
                <input type="password" name="password" value="" /><br />
                <input type="submit" name="submit" value="Submit"  />
              </form>
              
              <p>Don't have an account? <a href="signup.php">Sign up here.</a></p>

            </div>
                </div>
              </div>
            </div>
      
      <!-- PHP LOGIN BEGIN -->
      
      
      
      <!-- PHP LOGIN END -->
      
      <footer>
        <p>&#169; Copyright 2021. Created by Miles Hollifield.</p>
      </footer>
      
    </div>
  </body>
</html>