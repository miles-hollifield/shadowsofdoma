<?php

class Session extends Admin {

  private $admin_id;
  public $user_name;
  public $user_level;
  private $last_login;

  public const MAX_LOGIN_AGE = 60*60*24; // 1 day in seconds

  public function __construct() {
    session_start();
    $this->check_stored_login();
  }
  
  public function get_username() {
    return $this->user_name;
  }

  public function login($user) {
    if($user) {
      // prevent session fixation attacks
      session_regenerate_id();
      $this->admin_id = $_SESSION['admin_id'] = $user->user_id;
      $this->user_name = $_SESSION['user_name'] = $user->user_name;
      $this->user_level = $_SESSION['user_level'] = $user->user_level;
      $this->last_login = $_SESSION['last_login'] = time();
    }
    return true;
  }

  public function is_logged_in() {
    // return isset($this->admin_id);
    return isset($this->admin_id) && $this->last_login_is_recent();
  }

  public function is_member() {
    if($this->is_logged_in() && $this->user_level == 'm') {
      return true;
    } else {
      // $session->message("Access denied.");
    }
  }
  
  public function is_admin() {
    if($this->is_logged_in() && $this->user_level == 'a') {
      return true;
    } else {
      // $session->message("Access denied.");
    }
  }

  public function logout() {
    unset($_SESSION['admin_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_level']);
    unset($_SESSION['last_login']);
    unset($this->admin_id);
    unset($this->user_name);
    unset($this->user_level);
    unset($this->last_login);
    return true;
  }

  private function check_stored_login() {
    if(isset($_SESSION['admin_id'])) {
      $this->admin_id = $_SESSION['admin_id'];
      $this->user_name = $_SESSION['user_name'];
      $this->user_level = $_SESSION['user_level'];
      $this->last_login = $_SESSION['last_login'];
    }
  }

  private function last_login_is_recent() {
    if(!isset($this->last_login)) {
      return false;
    } elseif(($this->last_login + self::MAX_LOGIN_AGE) < time()) {
      return false;
    } else {
      return true;
    }
  }

  public function message($msg="") {
    if(!empty($msg)) {
      // Then this is a "set" message
      $_SESSION['message'] = $msg;
      return true;
    } else {
      return $_SESSION['message'] ?? '';
    }
  }

  public function clear_message() {
    unset($_SESSION['message']);
  }

}

?>