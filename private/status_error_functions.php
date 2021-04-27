<?php

function require_public() {
  global $session;
  if($session->user_level == 'm') {
    redirect_to(url_for('./member/index.php'));
  } else if($session->user_level == 'a') {
    redirect_to(url_for('./admin/index.php'));
  }
}

function require_login() {
  global $session;
  if($session->user_level !== 'm') {
    redirect_to(url_for('./login.php'));
  } else {
    // Do nothing, let the rest of the page proceed
  }
}

function require_admin() {
  global $session;
  if($session->user_level !== 'a') {
    redirect_to(url_for('./member/index.php'));
  } else {
    // Do nothing, let the rest of the page proceed
  }
}

function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"errors\">";
    $output .= "Login Failed. Please fix the following errors:";
    $output .= "<ul>";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}

function display_session_message() {
  global $session;
  $msg = $session->message();
  if(isset($msg) && $msg != '') {
    $session->clear_message();
    return '<div id="message">' . h($msg) . '</div>';
  }
}

?>