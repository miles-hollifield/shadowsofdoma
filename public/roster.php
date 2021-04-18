<?php
  require_once('../private/initialize.php');
  $page = 'roster';
  $pageTitle = 'Roster';
  include(SHARED_PATH . '/public_header.php');
?>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Roster</h1>

            <table id="roster-table">
              <tr>
                <th>Character First Name</th>
                <th>Character Last Name</th>
                <th>Race</th>
                <th>Class</th>
                <th>Gender</th>
                <th>Free Company Rank</th>
              </tr>

              <?php $characters = Character::find_all(); ?>

              <?php foreach($characters as $character) { ?>
              <tr>
                <td><?php echo $character->game_character_first_name; ?></td>
                <td><?php echo $character->game_character_last_name; ?></td>
                <td><?php echo $character->race_id; ?></td>
                <td><?php echo $character->class_id; ?></td>
                <td><?php echo $character->gender_id; ?></td>
                <td><?php echo $character->free_company_rank_id; ?></td>
              </tr>
              <?php } ?>
            </table>
            
          </div>
        </div>
      </div>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
