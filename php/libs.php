<?php
    interface Searchable{
        public function findByTitle($message);
        public function findByAuthor($message);
        public function findByISBN($message);
    }
    class Book{
        public $title;
        public $author;
        public $isbn;
        public $available; //доступна ли книга
        public function borrow(){
            if (!$this->available) {
                echo("Книга уже взята");
            }
            $this->available = false;
        }
        public function return(){
            if ($this->available) {
                echo("Книга уже в библиотеке");
            }
            $this->available = true;
        }
        public function __construct($title,$author,$isbn){
            $this->title = $title;
            $this->author = $author;
            $this->isbn = $isbn;
            $this->available = true;
        }
    }
    class Library implements Searchable{
        public $name;
        public $books=[]; //массив объектов book
        public function addBook(Book $book1){
        $this->books[] = $book1;
        
        echo '<br>Добавление книги <br><pre>';
        print_r($this->books);
         echo '</pre>';
        }
        public function removeBook(Book $book1){
            unset($this->books[0]); 
            array_values($this->books);
            echo '<br>Книгу Забрали <br><pre>';
            print_r($this->books);
            echo '</pre>';
        }
        public function findByTitle($title){
            foreach ($this->books as $index => $value) {
                if ($this->books[$index]->title == $title){
                    echo '<br>В библиотеке найдена книга по названию: "'.$title.'" <br>';
                }
            }
        }
        public function findByAuthor($author){
            foreach ($this->books as $index => $value) {
                if ($this->books[$index]->author == $author){
                    echo '<br>В библиотеке найдена книга по автору: "'.$author.'" <br>';
                }
            }

        }
        public function findByISBN($isbn){
            foreach ($this->books as $index => $value) {
                if ($this->books[$index]->isbn == $isbn){
                    echo '<br>В библиотеке найдена книга по id: "'.$isbn.'" <br>';
                }
            }
        }

    }
    class User{
        public $name;
        public $books=[]; //массив объектов book
        public function borrowBook(){ //взять книгу

            //$this->books[] = new Book($this->title, $this->author, $this->isbn, "false");

            }
        
        protected function returnBook(Book $books){
            unset($this->books[0]); 
            array_values($this->books);
            echo '<br>Вернули книгу <br><pre>';
            print_r($this->books);
            echo '</pre>';
        }
        public function __construct(string $name) {
            $this->name = $name;
            //$this->borrowedBooks = [];
        }
    }

    $library = new Library("Центральная библиотека");
    $book1 = new Book("Война и мир", "Лев Толстой", "123456789");
    $book2 = new Book("Преступление и наказание", "Федор Достоевский", "987654321");
    
    $library->addBook($book1);
    $library->addBook($book2);
    
    
    $user = new User("Иван");
    $user->borrowBook($book1);
    
    print_r($library->findByTitle("Война и мир"));
    print_r($library->findByAuthor("Федор Достоевский"));
    print_r($library->findByISBN("987654321"));

    $library->removeBook($book1);
    //print_r($user->borrowedBook();
?>