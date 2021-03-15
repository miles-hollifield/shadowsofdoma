<?php

class Character {
  
  static protected $database;
  static protected $table_name = "game_character";
  static protected $column = [
    'game_character_first_name',
    'game_character_last_name'
  ];
  
  public $game_character_first_name;
  public $game_character_last_name;
  
  public function __construct($args=[]) {
    $this->game_character_first_name = $args['game_character_first_name'] ?? '';
    $this->game_character_last_name = $args['game_character_last_name'] ?? '';
  }
  
  static public function set_database($database) {
        self::$database = $database;
    }

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
        //  $result->free();
        return $object_array;
    }
    
    static public function find_by_id($id) {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        $sql .= "WHERE id=" . self::$database->quote($id);
        $object_array = static::find_by_sql($sql);
        if(!empty($object_array)) {
            return array_shift($object_array);
        }   else    {
            return false;
        }
    }
    
    static public function find_all() {
        $sql = "SELECT * FROM " . static::$table_name . " ";
        return static::find_by_sql($sql);
    }

    static public function instantiate($record) {
        $object = new static;
        foreach($record as $property => $value) {
            if(property_exists($object, $property)) {
                $object->$property = $value;
            }
        }
        return $object;
    }
  
}