<?php

namespace Storage;

use Concept\Distinguishable;
use Predis\Client;

class RedisStorage implements Storage
{
    use SerializationHelpers;

    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function store(Distinguishable $distinguishable): void
    {
        $this->client->set($distinguishable->key(), serialize($distinguishable));
    }

    public function loadAll(): array
    {
        $result = [];
        foreach ($this->client->keys("*") as $key) {
            $serialized = $this->client->get($key);
            if ($serialized == null) {
                exit("Null!");
            }
            $result[] = self::deserializeAsDistinguishable($serialized);
        }
        return $result;
    }
}
