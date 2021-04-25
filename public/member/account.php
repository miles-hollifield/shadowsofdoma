<?php
  require_once('../../private/initialize.php');
  $page = 'account';
  $pageTitle = 'Account';
  include(SHARED_PATH . '/member_header.php');
?>
    
      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Account</h1>
          </div>
        </div>
      </div>

      <div id="main">
        <div id="main-container">
          <?php 
            $session_user = $session->user_name;
            $account = Session::find_by_username($session_user); 
          ?>
          <p>Username: <?php echo $account->user_name; ?></p>
          <p>First Name: <?php echo $account->user_first_name; ?></p>
          <p>Last Name: <?php echo $account->user_last_name; ?></p>
          <p>Email: <?php echo $account->user_email; ?></p>

          <p>Characters Owned by <?php echo $session_user; ?>: </p>
          <table id="roster-table">
            <tr>
              <th>Character First Name</th>
              <th>Character Last Name</th>
              <th>Gender</th>
              <th>Race</th>
              <th>Class</th>
              <th>Free Company Rank</th>
            </tr> 

            <?php $acc_chars = Account::get_account_characters($session_user); ?>

            <?php foreach($acc_chars as $acc_char) { ?>
            <tr>
              <td><?php echo $acc_char->game_character_first_name; ?></td>
              <td><?php echo $acc_char->game_character_last_name; ?></td>
              <td><?php echo $acc_char->gender_type; ?></td>
              <td><?php echo $acc_char->race_type; ?></td>
              <td><?php echo $acc_char->class_type; ?></td>
              <td><?php echo $acc_char->free_company_rank_status; ?></td>
            </tr>
            <?php } ?>
          </table>                     
        </div>
      </div>      
      
<?php
include(SHARED_PATH . '/public_footer.php');
?>
