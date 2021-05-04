<?php
  require_once('../../private/initialize.php');
  $page = 'roster';
  $pageTitle = 'Roster';
  include(SHARED_PATH . '/admin_header.php');
?>
      
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Roster</h1> 
          </div>
        </div>
      </div>

      <main id="main">
        <div id="main-container">
          <a class="action" href="<?php echo url_for('/admin/new.php'); ?>">Add Character</a>
          <table class="background" id="roster-table">
            <tr>
              <th>ID</th>
              <th>Character First Name</th>
              <th>Character Last Name</th>
              <th>Gender</th>
              <th>Race</th>
              <th>Class</th>
              <th>Free Company Rank</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
            </tr>

            <!-- Fills Roster table -->
            <?php $characters = Character::fill_roster(); ?>

            <?php foreach($characters as $character) { ?>
            <tr>
              <td><?php echo $character->game_character_id; ?></td>
              <td><?php echo $character->game_character_first_name; ?></td>
              <td><?php echo $character->game_character_last_name; ?></td>
              <td><?php echo $character->gender_type; ?></td>
              <td><?php echo $character->race_type; ?></td>
              <td><?php echo $character->class_type; ?></td>
              <td><?php echo $character->free_company_rank_status; ?></td>
              <td><a class="action" href="<?php echo url_for('/admin/view.php?id=' . h(u($character->game_character_id))); ?>">View</a></td>
              <td><a class="action" href="<?php echo url_for('/admin/edit.php?id=' . h(u($character->game_character_id))); ?>">Edit</a></td>
              <td><a class="action" href="<?php echo url_for('/admin/delete.php?id=' . h(u($character->game_character_id))); ?>">Delete</a></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </main>
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
