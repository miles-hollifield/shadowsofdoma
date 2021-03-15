<?php

class Admin extends DatabaseObject {

  static protected $table_name = "user";
  static protected $id_name = 'user_id';
  static protected $db_columns = ['user_id', 'user_first_name', 'user_last_name', 'user_email', 'user_name', 'user_hashed_password', 'user_level'];

  public $user_id;
  public $user_first_name;
  public $user_last_name;
  public $user_email;
  public $user_name;
  public $user_level;
  protected $user_hashed_password;
  public $password;
  public $confirm_password;
  protected $password_required = true;

  public function __construct($args=[]) {
    $this->user_first_name = $args['user_first_name'] ?? '';
    $this->user_last_name = $args['user_last_name'] ?? '';
    $this->user_email = $args['user_email'] ?? '';
    $this->user_name = $args['user_name'] ?? '';
    $this->user_level = $args['user_level'] ?? 'm';
    $this->password = $args['password'] ?? '';
    $this->confirm_password = $args['confirm_password'] ?? '';
  }

  protected function set_hashed_password() {
    $this->user_hashed_password = password_hash($this->password, PASSWORD_BCRYPT);
  }

  public function verify_password($password){
    return password_verify($password, $this->user_hashed_password);
  }

  public function create() {
    $this->set_hashed_password();
    return parent::create();
  }

  public function update() {
    if($this->password != '') {
      // validate password
      $this->set_hashed_password();
    } else {
      // password not being updated, skip hashing and validation
      $this->password_required = false;
    }
    return parent::update();
  }

  protected function validate() {
    $this->errors = [];
  
    if(is_blank($this->user_first_name)) {
      $this->errors[] = "First name cannot be blank.";
    } elseif (!has_length($this->user_first_name, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "First name must be between 2 and 255 characters.";
    }
  
    if(is_blank($this->user_last_name)) {
      $this->errors[] = "Last name cannot be blank.";
    } elseif (!has_length($this->user_last_name, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "Last name must be between 2 and 255 characters.";
    }
  
    if(is_blank($this->user_email)) {
      $this->errors[] = "Email cannot be blank.";
    } elseif (!has_length($this->user_email, array('max' => 255))) {
      $this->errors[] = "Last name must be less than 255 characters.";
    } elseif (!has_valid_email_format($this->user_email)) {
      $this->errors[] = "Email must be a valid format.";
    }
  
    if(is_blank($this->user_name)) {
      $this->errors[] = "Username cannot be blank.";
    } elseif (!has_length($this->user_name, array('min' => 8, 'max' => 255))) {
      $this->errors[] = "Username must be between 8 and 255 characters.";
    } elseif (!has_unique_username($this->user_name, $this->id ?? 0)) {
      $this->errors[] = "Username not allowed. Try another.";
    }
  
    if($this->password_required) {
      if(is_blank($this->password)) {
        $this->errors[] = "Password cannot be blank.";
      } elseif (!has_length($this->password, array('min' => 12))) {
        $this->errors[] = "Password must contain 12 or more characters";
      } elseif (!preg_match('/[A-Z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 symbol";
      }
    
      if(is_blank($this->confirm_password)) {
        $this->errors[] = "Confirm password cannot be blank.";
      } elseif ($this->password !== $this->confirm_password) {
        $this->errors[] = "Password and confirm password must match.";
      }
    }
  
    return $this->errors;
  }

  static public function find_by_username($user_name) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE user_name=" . self::$database->quote($user_name);
    $object_array = static::find_by_sql($sql);
    if(!empty($object_array)) {
        return array_shift($object_array);
    }   else    {
        return false;
    }
  }

}

?>