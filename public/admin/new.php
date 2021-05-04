<?php
  require_once('../../private/initialize.php');
  $page = 'new';
  $pageTitle = 'New';
  include(SHARED_PATH . '/admin_header.php');
?>

      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>New</h1> 
          </div>
        </div>
      </div>
      
      <?php

        if(is_post_request()) {
          // Create record using post parameters
          $args = [];
          $args['game_character_first_name'] = $_POST['game_character_first_name'] ?? NULL;
          $args['game_character_last_name'] = $_POST['game_character_last_name'] ?? NULL;
          $args['gender_id'] = $_POST['gender_id'] ?? NULL;
          $args['race_id'] = $_POST['race_id'] ?? NULL;
          $args['class_id'] = $_POST['class_id'] ?? NULL;
          $args['free_company_rank_id'] = $_POST['free_company_rank_id'] ?? NULL;
          $character = new Character($args);
          $result = $character->create();

          if($result === true) {
            $new_id = $character->game_character_id;
            $_SESSION['message'] = 'The character was created succesfully.';
            redirect_to(url_for('/admin/view.php?id=' . $new_id));
          } else {
            // show errors
          }
        } else {
          // display form
          $character = new Character;
        }

      ?>

      <main id="main">
        <div id="main-container">

          <a class="back-link" href="<?php echo url_for('/admin/roster.php'); ?>">&laquo; Back to Roster</a>

          <div id="new-char">
            <h2>Create Character</h2>
            <?php echo display_errors($character->errors); ?>

            <form action="<?php echo url_for('/admin/new.php?id=' . h(u($character->game_character_id))); ?>" method="post">

              <?php include('form-fields.php'); ?>
              
              <div id="operations">
                <input type="submit" value="Create Character">
              </div>
            </form>

          </div>

        </div>
      </main>

<?php
  include(SHARED_PATH . '/public_footer.php');
?>
