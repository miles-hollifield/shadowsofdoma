<?php

/**
 * DatabaseObject is the parent class that holds most functions used by child classes
 */
class DatabaseObject {

  static protected $database;
  static protected $table_name = "user";
  static protected $db_columns = ['user_id', 'user_first_name', 'user_last_name', 'user_email', 'user_name', 'user_hashed_password', 'user_level'];
  public $errors = [];

  /**
   * Sets up the database
   */
  static public function set_database($database) {
    self::$database = $database;
  }

  /**
   * Finds results from sql query and turns into objects
   * @param string $sql The sql query to search
   */
  static public function find_by_sql($sql) {
    $result = self::$database->query($sql);
    if(!$result) {
        exit("<p>Database query failed</p>");
    }

    // Turn results into objects
    $object_array = [];
    while ($record = $result->fetch(PDO::FETCH_ASSOC)) {
        $object_array[] = static::instantiate($record);
      }
    return $object_array;
  }

  /**
   * Finds results based on id search
   * @param int $id ID number from respective table
   */
  static public function find_by_id($id) {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE " . static::$id_name . "=" . self::$database->quote($id);
    $object_array = static::find_by_sql($sql);
    if(!empty($object_array)) {
        return array_shift($object_array);
    }   else    {
        return false;
    }
  }

  /**
   * Finds all data from respective table
   */
  static public function find_all() {
    $sql = "SELECT * FROM " . static::$table_name;
    return static::find_by_sql($sql);
  }

  /**
   * Search results function
   * @param string $search User input for search bar
   */
  static public function search_result($search) {
    $sql = "SELECT game_character_id, game_character.game_character_first_name, game_character.game_character_last_name, gender.gender_type, race.race_type, class.class_type, free_company_rank.free_company_rank_status FROM game_character ";
    $sql .= "JOIN gender ON game_character.gender_id = gender.gender_id JOIN race ON game_character.race_id = race.race_id JOIN class ON game_character.class_id = class.class_id JOIN free_company_rank ON game_character.free_company_rank_id = free_company_rank.free_company_rank_id JOIN user ON game_character.user_id = user.user_id ";
    $sql .= "WHERE game_character_first_name LIKE '%" . $search . "%' OR game_character_last_name LIKE '%" . $search . "%'";
    $result = static::find_by_sql($sql);
    if(!empty($result)) {
      return $result;
    } else {
      return false;
    }
  }

  /**
   * Finds results based on username
   * @param string $user_name Username to search for
   */
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

  /**
   * Finds ID and username from the User table
   */
  static public function find_id_and_name() {
    $sql = "SELECT user_id, user_name FROM user ";
    return static::find_by_sql($sql);
  }

  /**
   * Fills the roster table
   */
  static public function fill_roster() {
    $sql = "SELECT game_character_id, game_character.game_character_first_name, game_character.game_character_last_name, gender.gender_type, race.race_type, class.class_type, free_company_rank.free_company_rank_status FROM game_character JOIN gender ON game_character.gender_id = gender.gender_id JOIN race ON game_character.race_id = race.race_id JOIN class ON game_character.class_id = class.class_id JOIN free_company_rank ON game_character.free_company_rank_id = free_company_rank.free_company_rank_id ORDER BY game_character.game_character_id";
    return static::find_by_sql($sql);
  }

  /**
   * Gets characters owned by respective account
   * @param string $user_name Username to search for
   */
  static public function get_account_characters($user_name) {
    $username = self::$database->quote($user_name);
    $sql = "SELECT game_character_id, game_character.game_character_first_name, game_character.game_character_last_name, gender.gender_type, race.race_type, class.class_type, free_company_rank.free_company_rank_status FROM game_character ";
    $sql .= "JOIN gender ON game_character.gender_id = gender.gender_id JOIN race ON game_character.race_id = race.race_id JOIN class ON game_character.class_id = class.class_id JOIN free_company_rank ON game_character.free_company_rank_id = free_company_rank.free_company_rank_id JOIN user ON game_character.user_id = user.user_id ";
    $sql .= "WHERE user_name = " . $username . "ORDER BY game_character.free_company_rank_id DESC";
    return static::find_by_sql($sql);
  } 

  /**
   * Fills the table on the View page
   * @param int $id ID from game_character table
   */
  static public function fill_view($id) {
    $id = self::$database->quote($id);
    $sql = "SELECT game_character_id, game_character.game_character_first_name, game_character.game_character_last_name, gender.gender_id, gender.gender_type, race.race_id, race.race_type, class.class_id, class.class_type, free_company_rank.free_company_rank_id, free_company_rank.free_company_rank_status, user.user_id, user.user_name FROM game_character ";
    $sql .= "JOIN gender ON game_character.gender_id = gender.gender_id JOIN race ON game_character.race_id = race.race_id JOIN class ON game_character.class_id = class.class_id JOIN free_company_rank ON game_character.free_company_rank_id = free_company_rank.free_company_rank_id JOIN user ON game_character.user_id = user.user_id ";
    $sql .= "WHERE game_character_id = " . $id;
    $object_array = static::find_by_sql($sql);
    if(!empty($object_array)) {
        return array_shift($object_array);
    }   else    {
        return false;
    }
  }

  /**
   * Creates an instance of record
   * @param string $record Record to turn into an instance
   */
  static public function instantiate($record) {
    $object = new static;
    foreach($record as $property => $value) {
        if(property_exists($object, $property)) {
            $object->$property = $value;
        }
    }
    return $object;
  }

  /**
   * Creates new record into respective table
   */
  public function create() {
    $this->validate();
    if(!empty($this->errors)) { return false; }
    
    $attributes = $this->sanitized_attributes();
    $sql = "INSERT INTO " . static::$table_name . " (";
    $sql .= join(', ', array_keys($attributes));
    $sql .= ") VALUES (";
    $sql .= join(", ", array_values($attributes));
    $sql .= ");";

    $stmt = self::$database->prepare($sql);
    $result = $stmt->execute();

    if( $result ) {
        $this->game_character_id = self::$database->lastInsertID();
    } else  echo "Insert query did not run:" . $sql;
    
    return $result;    
  }

  /**
   * Updates the respective record
   */
  public function update() {
    $this->validate();
    if(!empty($this->errors)) { return false; }

    $attributes = $this->sanitized_attributes();
    $attribute_pairs = [];
    foreach($attributes as $key => $value) {
      $attribute_pairs[] = "{$key}={$value}";
    }

    $id = static::$id_name;

    $sql = "UPDATE " . static::$table_name . " SET ";
    $sql .= join(", ", $attribute_pairs);
    $sql .= " WHERE game_character_id = " . self::$database->quote($this->$id) . " ";
    $sql .= "LIMIT 1";

    $stmt = self::$database->prepare($sql);
    $result = $stmt->execute();
    return $result;
  }

  /**
   * Saves respective record
   */
  public function save() {
    // A new record will not have an ID yet
    $id = static::$id_name;
    if(isset($this->$id)) {
        return $this->update();
    } else {
        return $this->create();
    }
  }

  /**
   * Merges attributes with object arguments
   * @param array $args=[] Arguments from object array
   */
  public function merge_attributes($args=[]) {
    foreach($args as $key => $value) {
        if(property_exists($this, $key) && !is_null($value)) {
            $this->$key = $value;
        }
    }
  }

  /**
   * Properties which have database columns
   */
  public function attributes() {
    $attributes = [];
    foreach(static::$db_columns as $column) {
        $attributes[$column] = $this->$column;
    }
    return $attributes;
  }

  /**
   * Sanitizes attributes
   */
  protected function sanitized_attributes() {
    $sanitized = [];
    foreach($this->attributes() as $key => $value) {
        $sanitized[$key] = self::$database->quote($value);
    }
    return $sanitized;
  }

  /**
   * Deletes respective record
   */
  public function delete() {    
    $id = static::$id_name;
    $sql = "DELETE FROM " . static::$table_name . " ";
    $sql .= "WHERE " . static::$id_name . "=" . self::$database->quote($this->$id) . " ";
    $sql .= "LIMIT 1";
    $stmt = self::$database->prepare($sql);
    // $stmt->bindValue(':' . static::$id_name, $this->$id);
    $result = $stmt->execute();
    return $result;

    // After deleting, the instance of the object will still 
    // exist even though the database record does not. 
    // This can be useful as in:
    //  echo $user->first_name . " was deleted.";
    // but, for example, we can't call $user->update() after
    // calling $user->delete().
  }

  /**
   * Validates for errors
   */
  protected function validate() {
    $this->errors = [];

    // Add custom validations

    return $this->errors;
  }

}