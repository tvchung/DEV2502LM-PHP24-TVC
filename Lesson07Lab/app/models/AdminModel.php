<?php
class AdminModel {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getAllAdmins() {
        $stmt = $this->db->query("SELECT * FROM admin");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
