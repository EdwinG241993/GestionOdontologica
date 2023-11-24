<?php

/**
 * Description of ConnectionDB
 *
 * @author Edwin
 */
require_once '../Core/ConfigApp.php';

class ConnectionDB {

    private $connection;

    public function connect() {
        try {
            $this->connection = new PDO(SGBD, USER, PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Successful Connection";
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }

    public function executeQuery($sql, $parameters = array()) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($parameters);
            return $stmt;
        } catch (PDOException $e) {
            echo "Query Error: " . $e->getMessage();
            return null;
        }
    }

    public function getConnection() {
        return $this->connection;
    }

}
