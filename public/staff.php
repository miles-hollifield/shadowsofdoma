<?php
  require_once('../private/initialize.php');
  $page = 'staff';
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
        <div class="section" id="leader">
          <img src="<?php echo url_for('/img/ff14-leader.png'); ?>" alt="Guild Leader" width="490" height="600">
          <div>
            <h2>Falcor Stormrage</h2>
            <p>Bacon ipsum dolor amet hamburger shoulder pig brisket cupim corned beef leberkas turducken chuck bacon ham jowl tenderloin short loin tongue. Leberkas ground round alcatra beef short ribs jowl biltong kielbasa pastrami shank filet mignon cow pork belly sausage. Cow ribeye t-bone sirloin, short loin fatback ground round tri-tip alcatra meatloaf tenderloin venison turducken pig bacon.</p>
          </div>
        </div>
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
