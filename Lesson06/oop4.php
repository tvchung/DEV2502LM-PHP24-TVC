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
       
        function __construct($pX=100, $pY=150){
            $this->x=$pX;
            $this->y=$pY;
        }

        function Point(){
            $this->x=1000;
            $this->y=2000;
        }
    }

    // Tạo đối tượng
    $p = new Point();
    echo "<h2> Tọa độ điểm P(".$p->x ."," . $p->y . ")"; 

    $p->setX(200);
    $p->setY(100);

    echo "<h2> Tọa độ điểm P(".$p->getX() ."," . $p->getY() . ")";

?>