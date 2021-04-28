<?php
  require_once('../../private/initialize.php');
  $page = 'delete';
  $pageTitle = 'Delete';
  include(SHARED_PATH . '/admin_header.php');
?>

      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Delete</h1> 
          </div>
        </div>
      </div>

      <?php

        $id = $_GET['id'] ?? '1'; // PHP > 7.0
        $character = Character::fill_view($id);
        if($character == false) {
          redirect_to(url_for('/admin/roster.php'));
        }

        if(!isset($id)) {
          redirect_to(url_for('/admin/index.php'));
        }

        if(is_post_request()) {
          // Delete Character
          $result = $character->delete();
          $_SESSION['message'] = 'The character was deleted successfully.';
          redirect_to(url_for('/admin/roster.php'));
        } else {
          // Display form
        }


      ?>

      <div id="main">
        <div id="main-container">

          <a class="back-link" href="<?php echo url_for('/admin/roster.php'); ?>">&laquo; Back to Roster</a>

          <div id="delete-char">

            <h2>Delete Character</h2>
            <p>Are you sure you want to delete this character?</p>
            <p><?php echo h($character->game_character_first_name . ' ' . $character->game_character_last_name); ?></p>

            <form action="<?php echo url_for('/admin/delete.php?id=' . h(u($id))); ?>" method="post">
              <div id="operations">
                <input type="submit" name="commit" value="Delete Character">
              </div>
            </form>

          </div>

        </div>
      </div>
      
<?php
  include(SHARED_PATH . '/public_footer.php');
?>
