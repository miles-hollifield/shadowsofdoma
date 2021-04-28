<?php

class Character extends Account {
    
    static protected $table_name = 'game_character';
    static protected $id_name = 'game_character_id';
    static protected $db_columns = ['game_character_id', 'user_id', 'free_company_rank_id', 'race_id', 'class_id', 'gender_id', 'game_character_first_name', 'game_character_last_name'];

    static protected $gender_table = 'gender';
    static protected $gender_columns = ['gender_id', 'gender_type'];

    static protected $race_table = 'race';
    static protected $race_columns = ['race_id', 'race_type'];

    static protected $class_table = 'class';
    static protected $class_columns = ['race_id', 'race_type'];

    static protected $fc_table = 'free_company_rank';
    static protected $fc_columns = ['free_company_rank_id', 'free_company_rank_status', 'free_company_rank_desc'];

    public $game_character_id;
    public $game_character_first_name;
    public $game_character_last_name;
    public $gender_id;
    public $gender_type;
    public $race_id;
    public $race_type;
    public $class_id;
    public $class_type;
    public $free_company_rank_id;
    public $free_company_rank_status;
    public $user_id;
    public $user_name;

    public const FREE_COMPANY_RANK_OPTIONS = [
        1 => "Recruit",
        2 => "Member",
        3 => "Veteran",
        4 => "Officer",
        5 => "Council Member",
        6 => "Guildmaster"
    ];

    public const RACE_TYPE_OPTIONS = [
        1 => "Elezen",
        2 => "Hyur",
        3 => "Miqo'te",
        4 => "Roegadyn",
        5 => "Lalafell",
        6 => "Au Ra",
        7 => "Hrothgar",
        8 => "Viera"
    ];

    public const CLASS_TYPE_OPTIONS = [
        1 => "Paladin",
        2 => "Warrior",
        3 => "Dark Knight",
        4 => "Gunbreaker",
        5 => "White Mage",
        6 => "Scholar",
        7 => "Astrologian",
        8 => "Monk",
        9 => "Dragoon",
        10 => "Ninja",
        11 => "Samurai",
        12 => "Bard",
        13 => "Machinist",
        14 => "Dancer",
        15 => "Black Mage",
        16 => "Summoner",
        17 => "Red Mage",
        18 => "Blue Mage"
    ];

    public const GENDER_TYPE_OPTIONS = [
        1 => "M",
        2 => "F"
    ];

    public function __construct($args=[]) {
        $this->game_character_id = $args['game_character_id'] ?? '';
        $this->game_character_first_name = $args['game_character_first_name'] ?? '';
        $this->game_character_last_name = $args['game_character_last_name'] ?? '';
        $this->gender_id = $args['gender_id'] ?? '';
        $this->gender_type = $args['gender_type'] ?? '';
        $this->race_id = $args['race_id'] ?? '';
        $this->race_type = $args['race_type'] ?? '';
        $this->class_id = $args['class_id'] ?? '';
        $this->class_type = $args['class_type'] ?? '';
        $this->free_company_rank_id = $args['free_company_rank_id'] ?? '';
        $this->free_company_rank_status = $args['free_company_rank_status'] ?? '';
        $this->user_id = $args['user_id'] ?? '1';
        $this->user_name = $args['user_name'] ?? '';
    }

}