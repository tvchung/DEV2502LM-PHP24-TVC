<?php
    // Kết nối
    include("connectdb.php");
    // Tạo truy vấn xóa
    $sql = "DELETE FROM tvcusers WHERE id=:id";

    // prepare
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id'=>$_GET['id']
    ]);

    header("Location:select.php");
?>