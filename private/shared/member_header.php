<?php
  require_once('../../private/initialize.php');
  require_login();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($pageTitle)) { echo h($pageTitle) . ' - '; } ?>Shadows of Doma</title>
    <link href="<?php echo url_for('../public/css/general.css') ?>" rel="stylesheet">
    <link href="<?php echo url_for('../public/css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo url_for('../public/css/responsive.css') ?>" rel="stylesheet">
    <link href="<?php echo url_for('../public/css/modal.css'); ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a class="<?php if($page == "home") { echo "current"; } ?>" href="../../public/member/index.php">Home</a>
        <a class="<?php if($page == "about") { echo "current"; } ?>" href="../../public/member/about.php">About Us</a>
        <a class="<?php if($page == "staff") { echo "current"; } ?>" href="../../public/member/staff.php">Meet Our Staff</a>
        <a class="<?php if($page == "gallery") { echo "current"; } ?>" href="../../public/member/gallery.php">Gallery</a>
        <a class="<?php if($page == "roster") { echo "current"; } ?>" href="../../public/member/roster.php">Roster</a>
        <a class="<?php if($page == "account") { echo "current"; } ?>" href="../../public/member/account.php">Account</a>
        <a href="../../public/member/logout.php" onclick="return confirm('Are you sure you want to logout?');">Log Out <?php echo $session->user_name; ?></a>
        <div class="search-container">
          <form action="search.php" method="get">
            <input type="text" placeholder="Search Character..." name="search">
            <button type="submit" value="GO">GO</button>
          </form>
        </div>
      </nav>
      <!-- Mobile -->
      <nav id="navbar-2" class="mobile">
        <a class="<?php if($page == "home") { echo "current"; } ?>" href="../../public/member/index.php">Home</a>
        <a class="<?php if($page == "about") { echo "current"; } ?>" href="../../public/member/about.php">About Us</a>
        <a class="<?php if($page == "staff") { echo "current"; } ?>" href="../../public/member/staff.php">Meet Our Staff</a>
        <a class="<?php if($page == "gallery") { echo "current"; } ?>" href="../../public/member/gallery.php">Gallery</a>
        <a class="<?php if($page == "roster") { echo "current"; } ?>" href="../../public/member/roster.php">Roster</a>
        <a class="<?php if($page == "account") { echo "current"; } ?>" href="../../public/member/account.php">Account</a>
        <a href="../../public/member/logout.php" onclick="return confirm('Are you sure you want to logout?');">Log Out <?php echo $session->user_name; ?></a>
        <div class="search-container">
          <form action="search.php" method="get">
            <input type="text" placeholder="Search Character..." name="search">
            <button type="submit" value="GO">GO</button>
          </form>
        </div>
      </nav>
    </header>
    <div id="wrapper">

      <?php echo display_session_message(); ?>
      