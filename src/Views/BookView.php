<?php
namespace app\Views;
use app\CustomErrors\NotImplementedException;
use app\Entity\Book;
class BookView
{
    public static function view(Book $book){
        throw new NotImplementedException();
    }
}
