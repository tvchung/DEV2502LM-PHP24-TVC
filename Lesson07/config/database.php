<?php
    class Database {
        private $host = "localhost:3308";
        private $db_name = "dev2502php_mvcdb";
        private $username = "root";
        private $password = "";
        public $conn;
        
        public function getConnection() {
            $this->conn = null;
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }