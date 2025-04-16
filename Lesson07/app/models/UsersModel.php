<?php
// làm việc với bảng users
    class UsersModel{
        private $db; // biến đối tượng kết nối csdl
        public function __construct($db)
        {
            $this->db=$db;
        }

        // CRUD
        // read all users
        public function getAllUsers(){
            $stmt = $this->db->query("SELECT * FROM users");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        

        // Insert
        public function insert($fullname, $username, $password){
            $sql = "INSERT INTO users(fullname, username, password) VALUES(:fullname, :username, :password)";
            $stmt = $this->db->prepare($sql);

            $pass = password_hash($password, PASSWORD_BCRYPT);

            $stmt->bindParam(':fullname',$fullname);
            $stmt->bindParam(':username',$username);
            $stmt->bindParam(':password',$pass);

            return $stmt->execute();
        }
        // Update

        //Delete


    }