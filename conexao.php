<?php

extract(parse_ini_file(__DIR__ . '/db.ini'));

try {
    $db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (\PDOException $e) {
    die('Erro na conexão: ' . $e->getCode() . ' - ' . $e->getMessage());
}