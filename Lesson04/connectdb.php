<?php
    // Tài nguyên kết nối
    $host = "localhost:3308";
    $dbName="dev2502lm_lesson04db";
    $userName="root";
    $password="";

    $dsn = "mysql:host=$host;dbname=$dbName";
    try {
        $pdo = new PDO($dsn,$userName,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch (PDOException $ex) {
        echo "Connection failed: " . $ex->getMessage();
        die('Kết nối không thành công!');
    }

?>