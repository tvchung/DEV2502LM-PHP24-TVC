<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Màng 1 chiều</title>
</head>
<body>
    <h1>Màng 1 chiều</h1>
    <hr>
    <?php 
        $a = array("Xin","Chào","Devmaster");
        print_r($a);
        
        $a = array(5=>"Xin","Chào","Devmaster");
        echo "<p>";
        print_r($a);

        $a = ["Xin","Chào","Devmaster"];
        echo "<p>";
        print_r($a);

        $a = [3=>"Xin",4=>"Chào","Devmaster"];
        echo "<p>";
        print_r($a);

        #
        $countries = array( "us"=>"United State",
                            "uk"=>"United Kingdom",
                            "vn"=>"Viet Nam",
                            "cn"=>"China" );
        echo "<p>";
        print_r($countries);
        #duyệt mảng
        echo "<p>";
        foreach ($countries as $key => $value) {
            echo "<h2> key: $key <-> value: $value";
        }
        echo "<p> Value:";
        foreach ($countries as $value) {
            echo "<h2> $value";
        }
        
        #Mảng 2 chiều?
        $products = [
            ["Iphone",10,1000],
            ["Samsung",15,1200],
            ["LG",5,500],
        ];
        echo "<p>";
        # In ra màn hình?
        foreach ($products as $key => $value) {
            foreach ($value as $item) {
                echo " $item ; ";
            }
            echo "<p>";
        } 
        echo "<p>";
        for($row = 0; $row < count($products); $row++){
            for($col = 0; $col < count($products[$row]); $col++){
                echo $products[$row][$col] ." , ";
            }
            echo "<p>";
        }
        echo "<p>";
        print_r($products);

        #array_keys($tên_mảng)
        $keys = array_keys($countries);
        echo "<p>";
        print_r($keys);
        foreach (array_keys($countries) as $key) {
            echo "<p> $key";
        }

        foreach (array_values($countries) as $value) {
            echo "<p> $value";
        }
        
    ?>
</body>
</html>