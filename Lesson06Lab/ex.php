<?php
    // Định nghĩa Interface
    interface Animal {
        public function sound();
        public function move();
    }

    // Lớp Dog thực thi Interface Animal
    class Dog implements Animal {
        public function sound() {
            echo "Woof! Woof!";
        }

        public function move() {
            echo "The dog runs.";
        }
    }

    // Lớp Cat thực thi Interface Animal
    class Cat implements Animal {
        public function sound() {
            echo "Meow! Meow!";
        }

        public function move() {
            echo "The cat walks.";
        }
    }

    // Sử dụng các lớp thực thi Interface
    $dog = new Dog();
    $dog->sound();  // Output: Woof! Woof!
    $dog->move();   // Output: The dog runs.

    $cat = new Cat();
    $cat->sound();  // Output: Meow! Meow!
    $cat->move();   // Output: The cat walks.
?>