<?php
  if(!isset($page)) {
    $page = '';
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($pageTitle)) { echo h($pageTitle) . ' - '; } ?>Shadows of Doma</title>
    <link href="<?php echo url_for('../public/css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo url_for('../public/css/grid.css'); ?>" rel="stylesheet">
    <link href="<?php echo url_for('../public/css/modal.css'); ?>" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <header>
      <div id="masthead">
        <div id="header-img">
          <a href="index.php"><img src="<?php echo url_for('img/ff14-guild-crest.png') ?>" alt="Crest" width="150" height="155"></a>
          <div id="header-title">
            <a href="index.php"><h1>SHADOWS OF DOMA</h1></a>
            <a href="index.php"><p>FINAL FANTASY XIV</p></a>
            <a href="index.php"><p>FREE COMPANY/GUILD WEBSITE</p></a>
          </div>
          <a href="index.php"><img src="<?php echo url_for('img/ff14-guild-crest.png') ?>" alt="Crest" width="150" height="155"></a>
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
     
      