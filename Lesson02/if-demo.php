<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo if</title>
    <style>
        *{
            font-size: 1.5rem;
        }
        /* html, body{
            font-size: 20px;
        } */
    </style>
</head>
<body>
    <h1>If demo</h1>
    <?php 
        $num = 11;
        #if đơn
        if($num > 0 ){
            echo "<p> $num là số dương";
        }
        #if else 
        # kiểm tra num là số chẵn hay lẻ
        if($num % 2 == 0){
            echo "<p> $num là số chẵn";
        }else{
            echo "<p> $num là số lẻ";
        }

        #if bậc thang
        if($num > 0){
            echo "<p> $num là số dương";
        }else if ($num < 0 ){
            echo "<p> $num là số âm";
        }else{
            echo "<p> $num là số không";
        }

        #if lồng nhau
        # nếu giá trị của num là số dương, thực hiện kiểm tra xem num là chẵn hay lẻ
        if($num >0){
            if($num % 2 == 0){
                echo "<p> $num là số chẵn";
            }else{
                echo "<p> $num là số lẻ";
            }
        }
    ?>
</body>
</html>