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
        $id = $_GET['game_character_id'] ?? '1'; // PHP > 7.0
        //$character = Character::find_by_id($id);
        $character = Character::fill_roster();

        $user = $_SESSION['user_name'];
        $account = Account::find_by_username($user); 
      ?>

      <div id="main">
        <div id="main-container">

          <a class="back-link" href="<?php echo url_for('/admin/roster.php'); ?>">&laquo; Back to Roster</a>

          <div id="char-view">

            <h2>Character: <?php echo $character->game_character_first_name . ' ' . $character->game_character_last_name; ?></h2>
            <div id="char-details">
              <dl>
                <dt>Name:</dt>
                <dd><?php echo $character->game_character_first_name . ' ' . $character->game_character_last_name; ?></dd>
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
                <dd><?php echo $account->user_name; ?></dd>
              </dl>                                                                    
            </div>

          </div>

        </div>

      </div>
