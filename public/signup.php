<?php
  require_once('../private/initialize.php');
  $page = 'signup';
  $pageTitle = 'Sign Up';
  include(SHARED_PATH . '/public_header.php');
?>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Sign Up</h1>
          </div>
        </div>
      </div>

        <div id="main">
          <div id="main-container">
            <?php

              if(is_post_request()) {

                // Create record using post parameters
                $args = $_POST['admin'];
                $admin = new Admin($args);
                $result = $admin->save();

                if($result === true) {
                  $session->login($admin);
                  $user_name = $_SESSION['user_name'];
                  $session->message('Sign up successful! Welcome to Shadows of Doma, ' . $user_name . '!');
                  redirect_to(url_for('/member/index.php'));
                } else {
                  // show errors
                }

              } else {
                // display the form
                $admin = new Admin;
              }

            ?>

            <div id="signup">
              <p>Please fill out the form below to become a member:</p>
              <div id="signup-container">
                <?php echo display_errors($admin->errors); ?>

                <form class="form" action="<?php echo url_for('signup.php'); ?>" method="post">
                    
                  <div>

                    <label for="first_name">First Name:</label><br>
                    <input type="text" id="user_first_name" name="admin[user_first_name]" value="<?php echo h($admin->user_first_name); ?>"><br>
                  
                    <label for="last_name">Last Name:</label><br>
                    <input type="text" id="user_last_name" name="admin[user_last_name]" value="<?php echo h($admin->user_last_name); ?>"><br>
                  
                    <label for="email">Email:</label><br>
                    <input type="text" id="user_email" name="admin[user_email]" value="<?php echo h($admin->user_email); ?>"><br>
                  
                    <label for="username">Username:</label><br>
                    <input type="text" id="user_name" name="admin[user_name]" value="<?php echo h($admin->user_name); ?>"><br>
                  
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="admin[password]" value=""><br>
                
                    <label for="confirm-pass">Confirm Password:</label><br>
                    <input type="password" id="confirm-pass" name="admin[confirm_password]" value=""><br>

                  </div>
                  <input class="button-style button-link-style" type="submit" value="Sign Up">

                </form>
              </div>
            </div>            
          </div>
        </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
