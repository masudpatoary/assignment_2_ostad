<?php

class Book
{
    private $title;
    private $availableCopies;

// constructor
    public function __construct($title, $availableCopies)
    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
// reduce books
    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            echo "Book '{$this->title}' has been borrowed.\n";
        } else {
            echo "Sorry, '{$this->title}' is not available for borrowing.\n";
        }
    }
// add books
    public function returnBook()
    {
        $this->availableCopies++;
        echo "Book '{$this->title}' has been returned.\n";
    }

    public function getTitle()
    {
        return $this->title;
    }
// available books number
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }
}

class Member
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function borrowBook($book)
    {
        $book->borrowBook();
    }

    public function returnBook($book)
    {
        $book->returnBook();
    }

    public function getName()
    {
        return $this->name;
    }
}

// Creating books
$Book1 = new Book("The Great Gatsby, Available Copies", 5);
$Book2 = new Book("To Kill a Mockingbird, Available Copies", 3);

// Creating members
$Member1 = new Member("John Doe");
$Member2 = new Member("Jane Smith");

// echo "\n";

// Members borrow books
$Member1->borrowBook($Book1);
$Member2->borrowBook($Book2);

echo "\n";

echo "Available Copies of '{$Book1->getTitle()}': {$Book1->getAvailableCopies()}\n";
echo "Available Copies of '{$Book2->getTitle()}': {$Book2->getAvailableCopies()}\n";
