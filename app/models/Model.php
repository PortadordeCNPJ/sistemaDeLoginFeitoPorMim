<?php

namespace app\models;

class Model
{
    protected $connection;

    public function __construct() {
        
        $this->connection = Connection::connect();
    }
    
}