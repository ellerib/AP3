<?php

    class Student extends User{
        public $firstname, $lastname, $book_borrowed, 
        $borrowed_date, $penalties;
        public $borrow_limit = 3;

        public function __construct($firstname, $lastname, $book_borrowed, 
        $borrowed_date, $penalties, $borrow_limit){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->book_borrowed = $book_borrowed;
            $this->borrowed_date = $borrowed_date;
            $this->penalties = $penalties;
            $this->borrow_limit = $borrow_limit;
        }

        
         


         
        



    }


?>