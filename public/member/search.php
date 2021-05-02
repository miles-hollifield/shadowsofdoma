<?php
  require_once('../../private/initialize.php');
  $page = 'search';
  $pageTitle = 'Search Results';
  include(SHARED_PATH . '/member_header.php');
?>


      <div id="content-wrapper">
        <div id="content-top">
          <div id="content-top-text">
            <h1>Search</h1>
          </div>
        </div>
      </div>

      <div id="main">
        <div id="main-container">
          <div id="search-results">
            <?php
              if(isset($_GET['search'])) {
                $search = $_GET['search'];
                $characters = Character::search_result($search);  
            ?>
                <?php if($search == "") {
                  echo "<p style='margin: 10px; text-align: center;'>Please enter a search query.</p>";
              } else if($characters != false) {?>
                <h2>Search results for: <?php echo $search; ?></h2>
                <table id="roster-table">
                  <tr>
                    <th>Character First Name</th>
                    <th>Character Last Name</th>
                    <th>Gender</th>
                    <th>Race</th>
                    <th>Class</th>
                    <th>Free Company Rank</th>
                  </tr>

                  <?php foreach($characters as $character) { ?>
                  
                  <tr>
                    <td><?php echo $character->game_character_first_name; ?></td>
                    <td><?php echo $character->game_character_last_name; ?></td>
                    <td><?php echo $character->gender_type; ?></td>
                    <td><?php echo $character->race_type; ?></td>
                    <td><?php echo $character->class_type; ?></td>
                    <td><?php echo $character->free_company_rank_status; ?></td>
                  </tr>
                  <?php } ?>
                </table>
              <?php } else { ?>
                <h2>Search results for: <?php echo $search; ?></h2>
              <?php echo "<p style='margin: 10px; text-align: center;'>Character does not exist.</p>";
              }
            }
              ?>
          </div>
        </div>
      </div>

<?php
  include(SHARED_PATH . '/public_footer.php');
?>
