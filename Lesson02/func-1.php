<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hàm trong PHP</title>
</head>
<body>
    <h1>Hàm trong PHP</h1>
    <hr>
    <?php 
        // Định nghĩa hàm
        function fn_Hi(){
            echo "<h2> Hello </h2>";
        }

        #Gọi hàm

        echo fn_Hi();

        function fn_Welcome($name){
            echo "<h2> Welcome to $name";
        }

        echo fn_Welcome("Chung Trịnh");

        #Hàm trả về giá trị
        function fn_Add($a, $b){
            return $a+$b;
        }

        echo "<H1> " . fn_Add(100,200);
        $kq = fn_Add(123,234);
        echo "<P> $kq";
    ?>
</body>
</html>