<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
</head>
<body>
<?php 
        // Xử lý dữ liệu khi submit form
        if(isset($_REQUEST["btnSubmit"])){ // khi người dùng nhấn vào nút submit
            // Lấy dữ liệu trên form bằng $_REQUEST
            $name= $_REQUEST["txtFullName"];
            $age = $_REQUEST["txtAge"];

            echo "<h1> _REQUEST: Welcome to, ".$name . ", tuổi: ".$age ."</h1>";

            // Lấy dữ liệu trên form bằng $_GET
            $name= $_GET["txtFullName"];
            $age = $_GET["txtAge"];

            echo "<h1> _GET: Welcome to, ".$name . ", tuổi: ".$age ."</h1>";

            // Lấy dữ liệu trên form bằng $_POST
            $name= $_POST["txtFullName"];
            $age = $_POST["txtAge"];

            echo "<h1> _POST: Welcome to, ".$name . ", tuổi: ".$age ."</h1>";

            // die();
        }
    ?>
</body>
</html>