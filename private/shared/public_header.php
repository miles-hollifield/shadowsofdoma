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
    <script src="<?php echo url_for('../public/js/gallery.js'); ?>" defer></script>
  </head>
  <body>
    <div id="wrapper">
     
      <header>
        <div id="masthead">
          <div id="header-img">
            <a href="index.php"><img src="img/crest_white-e1601152867882.png" alt="Crest" width="230" height="235"></a>
            <div id="header-title">
              <a href="index.php"><h1>SHADOWS OF DOMA</h1></a>
              <a href="index.php"><p>FINAL FANTASY XIV</p></a>
              <a href="index.php"><p>FREE COMPANY/GUILD WEBSITE</p></a>
            </div>
          </div>
        </div>
        <nav>
          <ul>
            <li><a class="<?php if($page == "home") { echo "current"; } ?>" href="index.php">Home</a></li>
            <li><a class="<?php if($page == "about") { echo "current"; } ?>" href="about.php">About Us</a></li>
            <li><a class="<?php if($page == "staff") { echo "current"; } ?>" href="staff.php">Meet Our Staff</a></li>
            <li><a class="<?php if($page == "gallery") { echo "current"; } ?>" href="gallery.php">Gallery</a></li>
            <li><a class="<?php if($page == "roster") { echo "current"; } ?>" href="roster.php">Roster</a></li>
            <li><a class="<?php if($page == "login" || $page == "signup") { echo "current"; } ?>" href="login.php">Log in/Register</a></li>
          </ul>
        </nav>
      </header>