<?php
namespace app\Factories;
use app\Entity\Book;
class BookFactory
{
    public function createBook(int $id, string $title,string  $description,string  $author,\DateTime $publicationDate,string $publisher): Book{
        return new Book($id, $title, $description, $author, $publicationDate, $publisher);
    }
}
