<?php
  require_once('../private/initialize.php');
  $page = 'about';
  $pageTitle = 'About Us';
  include(SHARED_PATH . '/public_header.php');
?>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>About Us</h1>
            <p>Shadows of Doma is a Free Company (guild) in the MMORPG game Final Fantasy XIV on Sargatanas server!</p>
            <p>Shadows of Doma is a social FC for the friendly and considerate, those looking to expand their circle of friends, and players who enjoy group-structured events and the camaraderie that such activities bring.</p>
            <p>All Shadows of Doma members are free to organize their own events, regardless of rank. Shadows of Doma members represent the FC, the people within, and its values.</p>
            <p class="center">We always welcome new players and end-game veterans.</p>
          </div>
        </div>
      </div>
      
      <div id="main">
        <div id="main-container">
          <div class="section" id="casual">
            <img src="<?php echo url_for('/img/final-fantasy-xiv-blade.jpg'); ?>" alt="Character" width="548" height="308">
            <div>
              <h2>Casual Play</h2>
              <p>Do you enjoy experiencing the story of the game? Maybe you love side quests? Or do you just want to get all those spells on your Blue Mage? We do too, and would love to help you along the way!</p>
            </div>
          </div>
          <div class="section" id="raiding">
            <div>
              <h2>Raiding</h2>
              <p>We do weekly runs of any fresh 24 person content as an FC! While we don’t have an official team for 8 person content, we do provide a space for you to find like minded people so you can make friends and form your own!</p>
            </div>
            <img src="<?php echo url_for('/img/ff14-raiding.jpg'); ?>" alt="Casual" width="548" height="308">
          </div>
          <div class="section" id="roleplay">
            <img src="<?php echo url_for('/img/ff14-roleplay.png'); ?>" alt="Rolepay" width="548" height="308">
            <div>
              <h2>Roleplay</h2>
              <p>Does your character have a story? We appreciate anyone that likes to feel a little more immersed, and has a story or character they would like to share.  We also try to keep all of our in game FC events as stories your character can experience!</p>
            </div>
          </div>
        </div>
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
