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
        $character = Account::fill_view($id);
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
