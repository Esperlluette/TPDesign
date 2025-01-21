<?php
namespace app\Controllers;
use app\Factories\BookFactory;
class BookController
{
    private BookFactory $factory;
    public function __construct(){
        $this->factory = new BookFactory();
    }

    public function setFactory(BookFactory $bookFactory){
        $this->factory = $bookFactory;
    }
    public function getFactory(){
        return $this->factory;
    }
}
