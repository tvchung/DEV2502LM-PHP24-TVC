<?php
    // Lớp base class
    class Car {
        var $mileage;
        var $color;
        protected $make;

        // method
        public function accelerate(){
            echo "<h2> Car is Accelerate";
        }
    }

    // Lớp kế thừa
    class Luxury extends Car{
        public $perks;

         // method override
        public function accelerate(){
            echo "<h2> Luxury is Accelerate";
        }

        public function display(){
            $this->make="make";
            echo "<h2> $this->mileage;$this->color; $this->make; $this->perks";
        }
    }

    // Test

    $lux = new Luxury();
    $lux->mileage = "mileage";
    $lux->color = "Red";
    //.$lux->make = "make";
    $lux->perks = "perks";

    $lux->display();
