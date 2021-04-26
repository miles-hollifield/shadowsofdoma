<?php

class Account extends DatabaseObject {

    static protected $table_name = 'user';
    static protected $db_columns = ['user_id', 'user_first_name', 'user_last_name', 'user_email', 'user_name', 'user_hashed_password', 'user_level'];

    public $user_id;
    public $user_first_name;
    public $user_last_name;
    public $user_email;
    public $user_name;
    protected $user_hashed_password;
    public $user_level;

    public function __construct($args=[]) {
        $this->user_id = $args['user_id'] ?? '';
        $this->user_first_name = $args['user_first_name'] ?? '';
        $this->user_last_name = $args['user_last_name'] ?? '';
        $this->user_email = $args['user_email'] ?? '';
        $this->user_hashed_password = $args['user_hashed_password'] ?? '';
        $this->user_level = $args['user_level'] ?? '';
    }

}