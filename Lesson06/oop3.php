<?php
    // constructor: hàm khởi tạo
    class Point{
        // field
        var $x;
        var $y; 
        // set/get: attribute/ properties
        function getX(){
           return $this->x;
        }
        function setX($pX){
            $this->x=$pX;
        }

        function getY(){
            return $this->y;
        }
        function setY($pY){
            $this->y = $pY;
        }

        // contructor
        // function __construct(){
        //     $this->x=100;
        //     $this->y=150;
        // }
       
        function __construct($pX, $pY){
            $this->x=$pX;
            $this->y=$pY;
        }
    }

    // Tạo đối tượng
    $p = new Point(123,234);
    echo "<h2> Tọa độ điểm P(".$p->x ."," . $p->y . ")"; 

    $p->setX(200);
    $p->setY(100);

    echo "<h2> Tọa độ điểm P(".$p->getX() ."," . $p->getY() . ")";

?>