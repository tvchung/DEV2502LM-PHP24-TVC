<?php
    // Base class
    class Animal {
        public function sound() {
            return "Some sound";
        }
    }
    // Lớp kế thừa
    class Dog extends Animal {
        // overriding
        public function sound() {
            return "Woof";
        }
    }
    // Lớp kế thừa
    class Cat extends Animal {
        // overriding
        public function sound() {
            return "Meow";
        }
    }

    $dog = new Dog();
    echo $dog->sound();  // Output: Woof

    $cat = new Cat();
    echo $cat->sound();  // Output: Meow
?>