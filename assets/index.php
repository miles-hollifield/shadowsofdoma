<?php
  require_once('../private/initialize.php');
  $page = 'assets';
  $pageTitle = 'Assets';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($pageTitle)) { echo h($pageTitle) . ' - '; } ?>Shadows of Doma</title>
    <link href="../public/css/general.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
          <form action="search.php" method="get">
            <input type="text" placeholder="Search Character..." name="search">
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
            <h1>Assets</h1>
          </div>
        </div>
      </div>

      <main id="main">
          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-board-small.jpg" alt="Free Company Board" width="359" height="202"><br>
          <a href="https://finalfantasy.fandom.com/wiki/Market_Board">https://finalfantasy.fandom.com/wiki/Market_Board</a><br>

          <img src="ff14-welcome.jpg" alt="Free Company Welcome" width="359" height="202"><br>
          <a href="https://www.mmorpg.com/columns/fine-okay-i-got-a-final-fantasy-14-estate-and-i-get-it-now-2000121311">https://www.mmorpg.com/columns/fine-okay-i-got-a-final-fantasy-14-estate-and-i-get-it-now-2000121311</a><br>

          <img src="ff14-free-company.jpg" alt="Free Company Photo" width="359" height="202"><br>
          <a href="https://wallpapersafari.com/w/GTeug3">https://wallpapersafari.com/w/GTeug3</a><br>

          <img src="ff14-shrug.jpg" alt="Free Company Shrug" width="359" height="202"><br>
          <a href="https://twitter.com/lamooregalore/status/1043420561651781632">https://twitter.com/lamooregalore/status/1043420561651781632</a><br>

          <img src="ff14-raiding.jpg" alt="Free Company Raiding Photo" width="359" height="202"><br>
          <a href="https://bleedingcool.com/games/second-return-ivalice-raid-ffxiv-trailer/">https://bleedingcool.com/games/second-return-ivalice-raid-ffxiv-trailer/</a><br>

          <img src="ff14-roleplay.jpg" alt="Free Company Roleplay Photo" width="359" height="202"><br>
          <a href="https://twitter.com/iifetakers">https://twitter.com/iifetakers</a><br>

            <!-- Start Here -->

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>
          
          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

          <img src="ff14-beach-small.png" alt="Free Company Beach Photo" width="359" height="202"><br>
          <a href="http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/">http://ffxivrealm.com/threads/chocobo-crossing-na-free-company-is-recruiting.3759/</a><br>

      </main>