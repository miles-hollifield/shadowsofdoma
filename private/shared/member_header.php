<?php
  require_login();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shadows of Doma - FFXIV Free Company</title>
    <link href="<?php echo url_for('../public/css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo url_for('../public/css/grid.css'); ?>" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">
     
      <header>
        <div id="masthead">
          <div id="header-img">
            <a href="../../public/member/index.php"><img src="<?php echo url_for('/img/crest_white-e1601152867882.png'); ?>" alt="Crest" width="230" height="235"></a>
            <div id="header-title">
              <a href="../../public/member/index.php"><h1>SHADOWS OF DOMA</h1></a>
              <a href="../../public/member/index.php"><p>FFXIV FREE COMPANY</p></a>
            </div>
          </div>
        </div>
        <nav>
          <ul>
            <li><a href="../../public/member/index.php">Home</a></li>
            <li><a href="../../public/member/about.php">About Us</a></li>
            <li><a href="../../public/member/staff.php">Meet Our Staff</a></li>
            <li><a href="../../public/member/gallery.php">Gallery</a></li>
            <li><a href="../../public/member/roster.php">Roster</a></li>
            <li><a href="../../public/member/account.php">Account</a></li>
            <li><a href="../../public/member/logout.php">Log Out <?php echo $session->user_name; ?></a></li>
          </ul>
        </nav>
      </header>