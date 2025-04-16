<?php
class UserModel {
    private $db;
    public function __construct($db) {
        $this->db = $db;
    }
    public function getAllUsers() {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Phương thức insert
    public function insert($username, $password, $fullname) {
        // Câu lệnh SQL chèn người dùng vào cơ sở dữ liệu
        $sql = "INSERT INTO users (username, password, fullname) VALUES (:username, :password, :fullname)";
        
        // Chuẩn bị câu lệnh SQL
        $stmt = $this->db->prepare($sql);

        $pass = password_hash($password, PASSWORD_DEFAULT);
        // Gắn giá trị cho các tham số
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $pass);
        $stmt->bindParam(':fullname', $fullname);  

        // Thực thi câu lệnh
        return $stmt->execute();
    }
     // Phương thức update
     public function update($id, $username, $password, $fullname) {
        // Câu lệnh SQL để cập nhật thông tin người dùng
        $sql = "UPDATE users SET username = :username, password = :password, fullname = :fullname WHERE id = :id";

        // Chuẩn bị câu lệnh SQL
        $stmt = $this->db->prepare($sql);
        $pass = password_hash($password, PASSWORD_DEFAULT);
        // Gắn giá trị vào các tham số
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $pass);  // Mã hóa mật khẩu trước khi cập nhật
        $stmt->bindParam(':fullname', $fullname);

        // Thực thi câu lệnh
        return $stmt->execute();
    }

     // Phương thức delete
     public function delete($id) {
        // Câu lệnh SQL để xóa người dùng theo id
        $sql = "DELETE FROM users WHERE id = :id";

        // Chuẩn bị câu lệnh SQL
        $stmt = $this->db->prepare($sql);

        // Gắn giá trị vào tham số :id
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Thực thi câu lệnh
        return $stmt->execute();
    }
}
