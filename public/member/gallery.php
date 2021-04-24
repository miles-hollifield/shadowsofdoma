<?php
  require_once('../../private/initialize.php');
  $page = 'gallery';
  $pageTitle = 'Gallery';
  include(SHARED_PATH . '/member_header.php');
?>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Gallery</h1>
          </div>
        </div>
      </div>

      <div id="main">

        <script src="<?php echo url_for('../public/js/gallery.js'); ?>" defer></script>
        <!-- Thumbnail Gallery -->
        <div id="gallery-grid">
          <div id="gallery-grid-container">
            <img id="img1" src="<?php echo url_for('/img/gallery/ff14-group-photo-small.jpg'); ?>" alt="Free Company Group Photo" width="345" height="194">
            <img id="img2" src="<?php echo url_for('/img/gallery/ff14-shadowbringers-small.jpg'); ?>" alt="Free Company Dungeon" width="345" height="194">
            <img id="img3" src="<?php echo url_for('/img/gallery/ff14-rival-wings-small.jpg'); ?>" alt="Free Company Fight" width="345" height="194">
            <img id="img4" src="<?php echo url_for('/img/gallery/ff14-all-black-small.jpg'); ?>" alt="Free Company All Black Photo" width="345" height="194">
            <img id="img5" src="<?php echo url_for('/img/gallery/ff14-stance-small.jpg'); ?>" alt="Free Company Stance Photo" width="345" height="194">
            <img id="img6" src="<?php echo url_for('/img/gallery/ff14-mech-boss-small.jpg'); ?>" alt="Free Company Mech Boss" width="345" height="194">
            <img id="img7" src="<?php echo url_for('/img/gallery/ff14-armored-small.jpg'); ?>" alt="Free Company Armored Photo" width="345" height="194">
            <img id="img8" src="<?php echo url_for('/img/gallery/ff14-ultima-boss-small.jpg'); ?>" alt="Free Company Ultima Boss" width="345" height="194">
            <img id="img9" src="<?php echo url_for('/img/gallery/ff14-ingame-small.jpg'); ?>" alt="Free Company In-Game Photo" width="345" height="194">
          </div>
        </div>

        <!-- Modal -->
        

          <div class="modalOuterBox" id="modal1">
            <div class="modalContent">
              <img src="<?php echo url_for('/img/gallery/ff14-group-photo-large.jpg'); ?>" alt="Free Company Group Photo" width="1112" height="626">
              <span class="close">&times;</span>
            </div>
          </div>

          <div class="modalOuterBox2" id="modal2">
            <div class="modalContent2">
              <img src="<?php echo url_for('/img/gallery/ff14-shadowbringers-large.jpg'); ?>" alt="Free Company Dungeon" width="1112" height="626">
              <span class="close2">&times;</span>
            </div>
          </div>

          <div class="modalOuterBox3" id="modal3">
            <div class="modalContent3">
              <img src="<?php echo url_for('/img/gallery/ff14-rival-wings-large.jpg'); ?>" alt="Free Company Fight" width="1112" height="626">
              <span class="close3">&times;</span>
            </div>
          </div>

          <div class="modalOuterBox4" id="modal4">
            <div class="modalContent4">
              <img src="<?php echo url_for('/img/gallery/ff14-all-black-large.jpg'); ?>" alt="Free Company All Black Photo" width="1112" height="626">
              <span class="close4">&times;</span>
            </div>
          </div>

          <div class="modalOuterBox5" id="modal5">
            <div class="modalContent5">
              <img src="<?php echo url_for('/img/gallery/ff14-stance-large.jpg'); ?>" alt="Free Company Stance Photo" width="1112" height="626">
              <span class="close5">&times;</span>
            </div>
          </div>

          <div class="modalOuterBox6" id="modal6">
            <div class="modalContent6">
              <img src="<?php echo url_for('/img/gallery/ff14-mech-boss-large.jpg'); ?>" alt="Free Company Mech Boss" width="1112" height="626">
              <span class="close6">&times;</span>
            </div>
          </div>

          <div class="modalOuterBox7" id="modal7">
            <div class="modalContent7">
              <img src="<?php echo url_for('/img/gallery/ff14-armored-large.jpg'); ?>" alt="Free Company Armored Photo" width="1112" height="626">
              <span class="close7">&times;</span>
            </div>
          </div>

          <div class="modalOuterBox8" id="modal8">
            <div class="modalContent8">
              <img src="<?php echo url_for('/img/gallery/ff14-ultima-boss-large.jpg'); ?>" alt="Free Company Ultima Boss" width="1112" height="626">
              <span class="close8">&times;</span>
            </div>
          </div>

          <div class="modalOuterBox9" id="modal9">
            <div class="modalContent9">
              <img src="<?php echo url_for('/img/gallery/ff14-ingame-large.jpg'); ?>" alt="Free Company In-Game Photo" width="1112" height="626">
              <span class="close9">&times;</span>
            </div>
          </div>

      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>


