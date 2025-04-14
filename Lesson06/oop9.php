<?php 

    // Sử dụng các margic method
    class Customer{
        private $name;
        private $data = array();

        // Hàm __get sẽ gọi khi truy cập một thuộc tính không tồn tại
        function __get($name)
        {
            if(array_key_exists($name,$this->data)){
                return $this->data[$name];
            }else{
                return "<p><i> Không có thuộc tính $name </i>";
            }
        }

        // để gán giá trị
        function __set($name, $value)
        {
            $this->data[$name]=$value;
        }

        function __call($fn_name, $args)
        {
            print "<h3> Underfined method $fn_name calledd with vars;\n";
            print_r($args);
        }

        function display($mess){
            print_r($mess);
        }
    }

    // Sử dụng
    $cus = new Customer;
    $cus->email = "chungtrinhj@gmail.com";  // gọi __set
    echo "<h2> " . $cus->email;             // gọi __get

    echo "<h2> " . $cus->phone;

    $res = $cus->test(1,2,3);
    $res = $cus->display("Devmaster Academy!");

