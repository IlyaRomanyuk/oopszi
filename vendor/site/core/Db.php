<?php

namespace site;

class Db {

    use TSingletone;

    private $connection;

    protected function __construct() {
        $this->connect();
    }

    private function connect() {
        $db = require_once CONF . '/config_db.php';
        $this->connection = new \PDO($db['dsn'], $db['user'], $db['pass']);
    }

    public function execute($sql) {
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function query($sql) {
        $stmt = $this->connection->prepare($sql);
        $res = $stmt->execute();
        if($res !== false) {
            return $stmt->fetchAll();
        }
        return [];
    }

}

?>