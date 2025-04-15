<?php 
    class Book {
        // Các thông tin sách
        private $title;
        private $author;
        private $quantity;
        // Hàm khởi tạo
        public function __construct($title, $author, $quantity) {
            $this->title = $title;
            $this->author = $author;
            $this->quantity = $quantity;
        }
        // getter
        public function getTitle() {
            return $this->title;
        }
        // getter
        public function getAuthor() {
            return $this->author;
        }
        // getter
        public function getQuantity() {
            return $this->quantity;
        }
        // Method
        public function updateQuantity($quantity) {
            $this->quantity = $quantity;
        }
    }
?>