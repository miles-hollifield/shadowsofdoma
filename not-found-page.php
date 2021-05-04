<?php
  require_once('./private/initialize.php');
  $page = '404';
  $pageTitle = 'Error 404';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($pageTitle)) { echo h($pageTitle) . ' - '; } ?>Shadows of Doma</title>
    <link href="<?php echo url_for('../public/css/general.css'); ?>" rel="stylesheet">
    <link href="<?php echo url_for('../public/css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo url_for('../public/css/modal.css'); ?>" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <header>
      <div id="masthead">
        <div id="header-title">
          <a href="index.php"><h1>SHADOWS OF DOMA</h1></a>
          <a href="index.php"><p>FINAL FANTASY XIV</p></a>
          <a href="index.php"><p>FREE COMPANY/GUILD WEBSITE</p></a>
        </div>
      </div>
      <nav id="navbar">
        <a class="<?php if($page == "home") { echo "current"; } ?>" href="index.php">Home</a>
        <a class="<?php if($page == "about") { echo "current"; } ?>" href="about.php">About Us</a>
        <a class="<?php if($page == "staff") { echo "current"; } ?>" href="staff.php">Meet Our Staff</a>
        <a class="<?php if($page == "gallery") { echo "current"; } ?>" href="gallery.php">Gallery</a>
        <a class="<?php if($page == "roster") { echo "current"; } ?>" href="roster.php">Roster</a>
        <?php if($page !== '404') { ?>
          <a class="<?php if($page == "login" || $page == "signup") { echo "current"; } ?>" href="login.php">Log in/Register</a>
        <?php } ?>
        <div class="search-container">
          <form action="search.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit" value="GO">GO</button>
          </form>
        </div>
      </nav>
    </header>
    <div id="wrapper">

      <?php echo display_session_message(); ?>
        
        <div id="content-wrapper">
          <div id="content-top">
            <div id="content-top-text">
              <h1>404 Error</h1>
              <p class="center">Uh oh! Shadows of Doma doesn't have a page for that! Oh, well.</p>
            </div>
          </div>
        </div>

        <div id="page-img-wrapper">
          <img src="<?php echo url_for('../public/img/ff14-shrug.jpg'); ?>" alt="Shrug" width="1190" height="672">
        </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>