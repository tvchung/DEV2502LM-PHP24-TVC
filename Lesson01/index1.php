<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP</title>
</head>
<body>
    <h1>Welcome to PHP</h1>
    <?php 
        // đây là các câu lẹnh của ngôn ngữ php

        echo "<h2> Welcome to PHP ";

        // Biến
        $name = "Chung Trịnh";
        $age = 46;
            // Hiên thị giá trị của biên
            echo "<p> Name: $name";
            echo "<p> Age:". $age;
            echo "<hr/>";

        // Hằng
        define("DEVMASTER","Viện Công Nghệ Và Đào Tạo Devmaster");
        echo DEVMASTER;


        // Toán tử, biểu thức, toán hạng....
        $a=112;
        $b=23;
        // Sử dụng phép toán số học: +; -; *; /; %
        $res = $a + $b;
        echo "<p> $a + $b = $res";
        $res = $a - $b;
        echo "<p> $a - $b = $res";
        $res = $a * $b;
        echo "<p> $a * $b = $res";
        $res = $a / $b;
        echo "<p> $a / $b = $res";
        $res = $a % $b;
        echo "<p> $a % $b = $res";

        // Phép toán so sánh

        $res = $a == $b;
        echo "<p> $a == $b = $res";

        $res = $a > $b;
        echo "<p> $a >= $b = $res";


        //....

    ?>
</body>
</html>