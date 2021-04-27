<?php
  require_once('../private/initialize.php');
  $page = 'login';
  $pageTitle = 'Log In';
  include(SHARED_PATH . '/public_header.php');
?>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Log In</h1>
          </div>
        </div>
      </div>

      <div id="main">
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
            $user = Admin::find_by_username($user_name);
            // test if admin found and password is correct
            if($user != false && $user->verify_password($password)) {
              $session->login($user);
              $session->message('Welcome ' . $user_name . ', you have successfully logged in.');
              if($session->is_member()) {
                // Redirect to member section
                redirect_to(url_for('/member/index.php'));
              } else if($session->is_admin()) {
                // Redirect to admin section
                redirect_to(url_for('/admin/index.php'));
              }
            } else {
              // username not found or password does not match
              $errors[] = "Incorrect Username/Password.";
            }
          }
        }

        ?>
        <div id="main-container">
          <div id="login">
            <p>Enter your login information below:</p>
            <div id="login-container">
              <?php echo display_errors($errors); ?>

              <form class="form" action="login.php" method="post">
                <input class="user-input" type="text" name="user_name" value="<?php echo h($user_name); ?>" placeholder="Username"><br />
                <input class="user-input" type="password" name="password" value="" placeholder="Password"><br />
                <input class="button-style button-link-style" type="submit" name="submit" value="Log In"  />
              </form>

              <div id="recaptcha-container">
                <div class="g-recaptcha" data-sitekey="6LftO7saAAAAAAB0trqQyVmyHUgbrvgLJEgx4QfN"></div>
              </div>
                        
              <p>Don't have an account?<br>
              <a id="signup-link" href="signup.php">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
