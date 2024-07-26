<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use Gustavo\DesignPatterns\Creational\Singleton\Db\Database;

$db1 = Database::getInstance();
$db2 = Database::getInstance();

if ($db1 === $db2) {
    echo "Singleton funciona, ambas variáveis contêm a mesma instância.";
} else {
    echo "Singleton falhou, as variáveis contêm instâncias diferentes.";
}

$connection = $db1->getConnection();
var_dump($connection);
