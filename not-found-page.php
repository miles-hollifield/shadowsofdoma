<?php
  require_once('./private/initialize.php');
  $page = '404';
  $pageTitle = 'Error 404';
  include(SHARED_PATH . '/public_header.php');
?>
    
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