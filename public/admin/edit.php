<?php
  require_once('../../private/initialize.php');
  $page = 'edit';
  $pageTitle = 'Edit';
  include(SHARED_PATH . '/admin_header.php');
?>

      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Edit</h1> 
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

          // Save record using post parameters
          $args = [];
          $args['game_character_first_name'] = $_POST['game_character_first_name'] ?? NULL;
          $args['game_character_last_name'] = $_POST['game_character_last_name'] ?? NULL;
          $args['gender_id'] = $_POST['gender_id'] ?? NULL;
          $args['race_id'] = $_POST['race_id'] ?? NULL;
          $args['class_id'] = $_POST['class_id'] ?? NULL;
          $args['free_company_rank_id'] = $_POST['free_company_rank_id'] ?? NULL;
          $result = false;
          $character->merge_attributes($args);
          $result = $character->update();

          if($result == true) {
            $_SESSION['message'] = 'The character was updated successfully.';
            redirect_to(url_for('/admin/view.php?id=' . h(u($character->game_character_id))));
          } else {
            echo display_errors($character->errors);
            // show errors
          }

        } else {
          // display the form
          
        }

      ?>

      <div id="main">
        <div id="main-container">
          
          <a class="back-link" href="<?php echo url_for('/admin/roster.php'); ?>">&laquo; Back to Roster</a>

          <div id="char-edit">
            <h2>Character: <?php echo $character->game_character_first_name . ' ' . $character->game_character_last_name; ?></h2>
            
            <?php echo display_errors($character->errors); ?>

            <form action="<?php echo url_for('/admin/edit.php?id=' . h(u($character->game_character_id))); ?>" method="post">

              <?php include('form-fields.php'); ?>
              
              <div id="operations">
                <input type="submit" value="Edit Character" />
              </div>
            </form>

          </div>

        </div>
      </div>

<?php
  include(SHARED_PATH . '/public_footer.php');
?>
