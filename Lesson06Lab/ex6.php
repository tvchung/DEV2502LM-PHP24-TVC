<?php 
namespace ex6{
    // Định nghĩa Abstract Class
    abstract class Shape {
        protected $name;

        // Phương thức trừu tượng, các lớp con phải triển khai
        abstract public function area();

        // Phương thức bình thường có thể được kế thừa
        public function getName() {
            return $this->name;
        }
    }

    // Lớp Circle kế thừa từ Shape và triển khai phương thức area()
    class Circle extends Shape {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
            $this->name = "Circle";
        }

        public function area() {
            return pi() * pow($this->radius, 2);
        }
    }

    // Lớp Rectangle kế thừa từ Shape và triển khai phương thức area()
    class Rectangle extends Shape {
        private $width;
        private $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
            $this->name = "Rectangle";
        }

        public function area() {
            return $this->width * $this->height;
        }
    }

    // Tạo đối tượng và sử dụng các phương thức
    $circle = new Circle(5);
    echo "<h2>". $circle->getName() . " Area: " . $circle->area();  // Output: Circle Area: 78.539816339745

    $rectangle = new Rectangle(4, 6);
    echo "<h2>". $rectangle->getName() . " Area: " . $rectangle->area();  // Output: Rectangle Area: 24
} 
?>