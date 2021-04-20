<?php
  require_once('../private/initialize.php');
  $page = 'gallery';
  $pageTitle = 'Gallery';
  include(SHARED_PATH . '/public_header.php');
?>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Gallery</h1>

            <div id="gallery-grid">
              <img src="<?php echo url_for('/img/gallery/ff14-group-photo-large.jpg'); ?>" alt="Free Company Group Photo" width="345" height="194">
              <img src="<?php echo url_for('/img/gallery/ff14-shadowbringers-large.jpg'); ?>" alt="Free Company Dungeon" width="345" height="194">
              <img src="<?php echo url_for('/img/gallery/ff14-rival-wings-large.jpg'); ?>" alt="Free Company Fight" width="345" height="194">
            </div>

            <!-- Modal -->
            <div id="modal">
              <div id="gallery-item-1">
                <img src="img/gallery/ff14-group-photo-large.jpg" alt="Free Company Group Photo" width="1112" height="626">
              </div>
              <div id="gallery-item-2">
                <img src="img/gallery/ff14-shadowbringers-large.jpg" alt="Free Company Dungeon" width="1112" height="626">
              </div>
              <div id="gallery-item-3">
                <img src="img/gallery/ff14-rival-wings-large.jpg" alt="Free Company Fight" width="1112" height="626">
              </div>
            </div>

            <!-- End Modal -->

          </div>
        </div>
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
