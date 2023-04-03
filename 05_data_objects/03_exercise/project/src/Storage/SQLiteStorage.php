<?php

namespace Storage;

use Config\Directory;
use PDO;

class SQLiteStorage extends DBStorage
{
    private string $databaseName = "db.sqlite";
    public function __construct()
    {
        $this->pdo = new PDO("sqlite:" . Directory::storage() . "SQLiteStorage/" . $this->databaseName);
        parent::__construct();
    }
}
