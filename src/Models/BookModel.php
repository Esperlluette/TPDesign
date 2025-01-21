<?php
namespace app\Models;
use app\Entity\Book;
class BookModel
{
    //add Database;
    public function getBookbyId(string $id){
        $now = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        return new Book($id, "NO DATABASE", "NO DATABASE", "NO DATABASE", $now,"NO DATABASE");
    }
    public function getBookbyTitle(string $title){
        $now = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        return new Book("0", $title, "NO DATABASE", "NO DATABASE", $now,"NO DATABASE");
    }
    public function getBookbyAuthor(string $author){
        $now = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        return new Book("0", "NO DATABASE", "NO DATABASE", $author, $now,"NO DATABASE");
    }
}
