<?php

namespace Gustavo\DesignPatterns\Criacionais\Singleton\Db;

use PDO;

class Database {
    private static $instance;
    private $connection;

    private function __construct()
    {
        $this->connection = new PDO('sqlite::memory');
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }

    private function __clone() {}

    private function __wakeup() {}
}