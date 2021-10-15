<?php

namespace App\Models;

use Core\Database;
use Core\Request;
//Create, read, update, delete 

Class message {

    public function find()
    {
        $db = Database::getInstance();
        $data = $db->getList("Msn", "*");

        return $data;
    }
    
}