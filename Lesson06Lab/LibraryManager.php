<?php
    require("Book.php");
    class LibraryManager {
        // field, chứa mảng các cuốn sách
        private $books = [];
        // Phương thức thêm sách
        public function addBook(Book $book) {
            $this->books[] = $book;
        }
        // Phương thức xóa 1 cuốn sách theo title
        public function removeBook($title) {
            foreach ($this->books as $key => $book) {
                if ($book->getTitle() == $title) {
                    unset($this->books[$key]);
                    echo "Book '$title' removed successfully.";
                    return;
                }
            }
            echo "Book '$title' not found.";
        }
        // Phương thức hiển thị thông tin sách
        public function displayBooks() {
            foreach ($this->books as $book) {
                echo "Title: " . $book->getTitle() . ", Author: " . $book->getAuthor() . ", Quantity: " . $book->getQuantity() . "<br>";
            }
        }
    }

    // Demo
    $book1 = new Book("PHP for Beginners", "John Doe", 10);
    $book2 = new Book("Advanced PHP", "Jane Smith", 5);

    $library = new LibraryManager();
    $library->addBook($book1);
    $library->addBook($book2);

    $library->displayBooks();  // Hiển thị danh sách sách

    // Cập nhật số lượng sách
    $book1->updateQuantity(15);
    echo "<br>Updated Book Info:<br>";
    $library->displayBooks();

    // Xóa sách
    $library->removeBook("Advanced PHP");
    $library->displayBooks();
?>