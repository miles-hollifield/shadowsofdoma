<?php
  require_once('../../private/initialize.php');
  $page = 'form-fields';
  $pageTitle = 'Form Fields';
  require_admin();
  if(!isset($character)) {
    redirect_to(url_for('/admin/roster.php'));
  }
?>

<dl>
  <dt>First Name</dt>
  <dd><input type="text" name="game_character_first_name" value="<?= $character->game_character_first_name; ?>" /></dd>
</dl>

<dl>
  <dt>Last Name</dt>
  <dd><input type="text" name="game_character_last_name" value="<?= $character->game_character_last_name; ?>" /></dd>
</dl>

<dl>
  <dt>Gender</dt>
  <dd>
    <select name="gender_id">
      <?php foreach(Character::GENDER_TYPE_OPTIONS as $gen_id => $gen_letter) { ?>
        <option value="<?php echo $gen_id; ?>" <?php if ($character->gender_id == $gen_id) { echo 'selected';} ?>> <?php echo $gen_letter; ?></option>
      <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Race</dt>
  <dd>
    <select name="race_id">
      <?php foreach(Character::RACE_TYPE_OPTIONS as $r_id => $r_type) { ?>
        <option value="<?php echo $r_id; ?>" <?php if ($character->race_id == $r_id) { echo 'selected';} ?>> <?php echo $r_type; ?></option>
      <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Class</dt>
  <dd>
    <select name="class_id">
      <?php foreach(Character::CLASS_TYPE_OPTIONS as $c_id => $c_type) { ?>
        <option value="<?php echo $c_id; ?>" <?php if ($character->class_id == $c_id) { echo 'selected';} ?>> <?php echo $c_type; ?></option>
      <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Free Company Rank</dt>
  <dd>
    <select name="free_company_rank_id">
      <?php foreach(Character::FREE_COMPANY_RANK_OPTIONS as $fc_id => $fc_status) { ?>
        <option value="<?php echo $fc_id; ?>" <?php if ($character->free_company_rank_id == $fc_id) { echo 'selected';} ?>> <?php echo $fc_status; ?></option>
      <?php } ?>
    </select>
  </dd>
</dl>