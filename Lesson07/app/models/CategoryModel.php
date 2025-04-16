<?php
// làm việc với bảng category
    class CategoryModel{
        private $db; // biến đối tượng kết nối csdl
        public function __construct($db)
        {
            $this->db=$db;
        }

        // CRUD
        // read all category
        public function getAll(){
            $stmt = $this->db->query("SELECT * FROM category");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        

    }