<?php

class Character extends DatabaseObject {
    
    static protected $table_name = 'game_character';

    static protected $db_columns = ['game_character_id', 'user_id', 'free_company_rank_id', 'race_id', 'class_id', 'gender_id', 'game_character_first_name', 'game_character_last_name'];

    public $game_character_id;
    public $user_id;
    public $free_company_rank_status;
    public $race_type;
    public $class_type;
    public $gender_type;
    public $game_character_first_name;
    public $game_character_last_name;

    public function __construct($args=[]) {
        $this->game_character_id = $args['game_character_id'] ?? '';
        $this->user_id = $args['user_id'] ?? '';
        $this->free_company_rank_status = $args['free_company_rank_id'] ?? '';
        $this->race_type = $args['race_id'] ?? '';
        $this->class_type = $args['class_id'] ?? '';
        $this->gender_type = $args['gender_id'] ?? '';
        $this->game_character_first_name = $args['game_character_first_name'] ?? '';
        $this->game_character_last_name = $args['game_character_last_name'] ?? '';
    }

}