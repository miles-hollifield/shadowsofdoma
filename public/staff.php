<?php
  require_once('../private/initialize.php');
  $page = 'staff';
  $pageTitle = 'Meet Our Staff';
  include(SHARED_PATH . '/public_header.php');
?>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Meet Our Staff</h1>
            <p>Questions, comments, or concerns? Our Leadership Team is here to help! Be it big or small, our Council and Officer members are here to make sure you have the best experience possible during your time with Shadows of Doma.</p>
          </div>
        </div>
      </div>
      
      <div id="main">
        <div id="main-container">
          <!-- Guildmaster -->
          <div class="staff-heading">
            <hr>
            <h2>Guildmaster</h2>
            <hr>
          </div>
          <div class="section staff-character">
            <img src="<?php echo url_for('/img/staff/ff14-leader.jpg'); ?>" alt="Guild Leader" width="503" height="503">
            <div>
              <h3>Falcor Stormrage</h3>
              <p>
                <strong>Main Class: </strong>Paladin<br>
                <strong>Interests: </strong> Hiking, Web Design, Exercise, Photography<br>
                <strong>Favorite Dungeon: </strong> Amaurot, The Great Gubal Library (Hard)<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>I’ve been playing FFXIV since the release of ARR, with a small hiatus taken between HW and SB. My passion for meeting new people and existing love for Final Fantasy was the reason I chose to try the game.</q>
              </p>
            </div>
          </div>

          <!-- Council Members -->
          <div class="staff-heading">
            <hr>
            <h2>Council Members</h2>
            <hr>
          </div>
          <div class="section staff-character">
            <div>
              <h3>Gloria Vidar</h3>
              <p>
                <strong>Main Class: </strong>Black Mage<br>
                <strong>Interests: </strong> Nature, Roleplay, Arts & Crafts, Astrology<br>
                <strong>Favorite Dungeon: </strong> Ghymlit Dark<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>Since a little before Stormblood. A friend got me into it.</q>
              </p>
            </div>
            <img src="<?php echo url_for('/img/staff/ff14-council-1.jpg'); ?>" alt="Gloria Vidar" width="340" height="570">
          </div>

          <div class="section staff-character">
            <img src="<?php echo url_for('/img/staff/ff14-council-2.jpg'); ?>" alt="Marco Wrynn" width="436" height="560">
            <div class="right-align">
              <h3>Marco Wrynn</h3>
              <p>
                <strong>Main Class: </strong>Scholar<br>
                <strong>Interests: </strong> Raiding, Hanging With Friends, Biking<br>
                <strong>Favorite Dungeon: </strong> The Vault<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>Stormblood Early-Access. Long-time fan of the series.</q>
              </p>
            </div>
          </div>

          <div class="section staff-character">
            <div>
              <h3>Lukas Reeves</h3>
              <p>
                <strong>Main Class: </strong>Summoner<br>
                <strong>Interests: </strong> Cooking, Running, Playing Games<br>
                <strong>Favorite Dungeon: </strong> Amaurot, The Twinning<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>Been playing since Stormblood, initially picked up the game when it was on sale during Christmas on PS4 and eventually moved to PC. I’ve always loved Final Fantasy Games in general.</q>
              </p>
            </div>
            <img src="<?php echo url_for('/img/staff/ff14-council-3.jpg'); ?>" alt="Lukas Reeves" width="340" height="570">
          </div>

          <!-- Officers -->
          <div class="staff-heading">
            <hr>
            <h2>Officers</h2>
            <hr>
          </div>
          <div class="section staff-character">
            <img src="<?php echo url_for('/img/staff/ff14-officer-1.jpg'); ?>" alt="Naga Fellrain" width="340" height="570">
            <div class="right-align">
              <h3>Naga Fellrain</h3>
              <p>
                <strong>Main Class: </strong>White Mage<br>
                <strong>Interests: </strong> Yoga, Meditation, Rock Climbing<br>
                <strong>Favorite Dungeon: </strong> Amaurot, The Great Gubal Library (Hard)<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>I’ve been playing since the pre-release of Shadowbringers, and honestly fell in love with the game after finishing the MSQ. I’d actually listened to the game’s soundtrack for years before playing.</q>
              </p>
            </div>
          </div>

          <div class="section staff-character">
            <div>
              <h3>Alfred Galar</h3>
              <p>
                <strong>Main Class: </strong>Gunbreaker<br>
                <strong>Interests: </strong> Mechanics, Working Out, Cars, Video Games<br>
                <strong>Favorite Dungeon: </strong> Mt Gulg, Saint Mocianne’s Arboretum<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>I think I’ve been playing for 7 months? Not sure, my friends got me into the game.</q>
              </p>
            </div>
            <img src="<?php echo url_for('/img/staff/ff14-officer-2.jpg'); ?>" alt="Alfred Galar" width="498" height="594">
          </div>

          <div class="section staff-character">
            <img src="<?php echo url_for('/img/staff/ff14-officer-3.jpg'); ?>" alt="Aleidis Westmoore" width="340" height="570">
            <div class="right-align">
              <h3>Aleidis Westmoore</h3>
              <p>
                <strong>Main Class: </strong>Bard<br>
                <strong>Interests: </strong> Anime, Video Games, Reading, Writing<br>
                <strong>Favorite Dungeon: </strong> The Vault, Mt Gulg, The Twinning<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>2 Years. I watched some streamers play it and I thought it looked like fun.</q>
              </p>
            </div>
          </div>

          <div class="section staff-character">
            <div>
              <h3>Yuki Nawashiro</h3>
              <p>
                <strong>Main Class: </strong>Machinist<br>
                <strong>Interests: </strong> Gaming, Pottery, Archery<br>
                <strong>Favorite Dungeon: </strong> Amaurot, The Great Gubal Library (Hard)<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>I was originally a beta tester for ARR several years ago. I was interested in playing back then but didn’t have my own PC. I always wanted to get into this game enjoying the beta and loving older FF titles but was big into other games for a while such as Splatoon and Overwatch.</q>
              </p>
            </div>
            <img src="<?php echo url_for('/img/staff/ff14-officer-4.jpg'); ?>" alt="Yuki Nawashiro" width="340" height="570">
          </div>

          <div class="section staff-character">
            <img src="<?php echo url_for('/img/staff/ff14-officer-5.jpg'); ?>" alt="Aang Jopino" width="340" height="570">
            <div class="right-align">
              <h3>Aang Jopino</h3>
              <p>
                <strong>Main Class: </strong>Summoner<br>
                <strong>Interests: </strong> Surfing, Jogging, Outdoor Activities<br>
                <strong>Favorite Dungeon: </strong> Shisui of the Violet Tides, Saint Mocianne’s Arboretum, Akademia Anyder<br>
              </p>
              <p>
                <strong>How long have you been playing XIV for and what got you to play?</strong><br><br>
                <q>I started playing in the ARR days. Played on and off between then and now due to schooling/occupational changes. I found myself drawn toward FFXIV as I enjoy the franchise and as an old FFXI player.</q>
              </p>
            </div>
          </div>
        </div>        
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
