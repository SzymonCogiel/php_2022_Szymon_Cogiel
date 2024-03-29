<?php

namespace Storage;

use Concept\Distinguishable;
use PDO;

abstract class DBStorage implements Storage
{
    use SerializationHelpers;

    protected PDO $pdo;
    private string $tableName = "objects";

    public function __construct()
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function store(Distinguishable $distinguishable): void
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS $this->tableName(`key` VARCHAR(255) PRIMARY KEY, `data` TEXT)");
        $statement = $this->pdo->prepare("INSERT INTO $this->tableName VALUES (:key, :data)");
        $statement->bindValue('key', $distinguishable->key());
        $statement->bindValue('data', serialize($distinguishable));
        $statement->execute();
    }

    /**
     * @inheritDoc
     */
    public function loadAll(): array
    {
        $distinguishable = array();
        $query = $this->pdo->query("SELECT * FROM $this->tableName");
        if ($query) {
            foreach ($query->fetchAll(PDO::FETCH_NUM) as $array) {
                $distinguishable[] = self::deserializeAsDistinguishable($array[1]);
            }
        }
        return $distinguishable;
    }
}
