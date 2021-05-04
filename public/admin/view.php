<?php
  require_once('../../private/initialize.php');
  $page = 'view';
  $pageTitle = 'View';
  include(SHARED_PATH . '/admin_header.php');
?>

      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>View</h1> 
          </div>
        </div>
      </div>

      <?php
        $id = $_GET['id'] ?? '1';
        $character = Character::fill_view($id);
      ?>

      <main id="main">
        <div id="main-container">

          <a class="back-link" href="<?php echo url_for('/admin/roster.php'); ?>">&laquo; Back to Roster</a>

          <?php display_session_message(); ?>

          <div id="char-view">

            <h2>Character: <?php echo $character->game_character_first_name . ' ' . $character->game_character_last_name; ?></h2>
            <div id="char-details">
              <dl>
                <dt>First Name:</dt>
                <dd><?php echo $character->game_character_first_name; ?></dd>
              </dl>
              <dl>
                <dt>Last Name:</dt>
                <dd><?php echo $character->game_character_last_name; ?></dd>
              </dl>
              <dl>
                <dt>Gender:</dt>
                <dd><?php echo $character->gender_type; ?></dd>
              </dl>
              <dl>
                <dt>Race:</dt>
                <dd><?php echo $character->race_type; ?></dd>
              </dl>
              <dl>
                <dt>Class:</dt>
                <dd><?php echo $character->class_type; ?></dd>
              </dl>
              <dl>
                <dt>Free Company Rank:</dt>
                <dd><?php echo $character->free_company_rank_status; ?></dd>
              </dl>
              <dl>
                <dt>Character Owned by User:</dt>
                <dd><?php echo $character->user_name; ?></dd>
              </dl>                                                                    
            </div>

          </div>

        </div>

      </main>

<?php
  include(SHARED_PATH . '/public_footer.php');
?>
