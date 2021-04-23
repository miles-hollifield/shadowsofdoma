<?php
  require_once('../private/initialize.php');
  $page = 'home';
  $pageTitle = 'Home';
  include(SHARED_PATH . '/public_header.php');
?>
    
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>404 Error</h1>
            <p>The page you tried to access does not exist.</p>
          </div>
        </div>
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>