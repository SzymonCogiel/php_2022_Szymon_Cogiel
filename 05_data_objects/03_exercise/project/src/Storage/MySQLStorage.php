<?php

namespace Storage;

use PDO;

class MySQLStorage extends DBStorage
{
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=test", "test", "test123");
        parent::__construct();
    }
}
