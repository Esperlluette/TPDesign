<?php
namespace app\Entity;
class Book
{
    private static $nbBooks= 0;
    protected int $id;
    protected string $title;
    protected string $description;
    protected string $author;
    protected \DateTime $publicationDate;
    protected string $publisher;

    public function __construct(int $id,string $title,string $description,string $author,\DateTime $publicationDate,string $publisher)
    {
        self::$nbBooks++;
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
        $this->publicationDate = $publicationDate;
        $this->publisher = $publisher;
    }
    public function __toString()
    {
        // Vous pouvez adapter le format à vos besoins
        return sprintf(
            "Livre #%d : %s\nDescription : %s\nAuteur : %s\nDate de publication : %s\nÉditeur : %s\n",
            $this->id,
            $this->title,
            $this->description,
            $this->author,
            $this->publicationDate->format('Y-m-d'),
            $this->publisher
        );
    }
    
    public function getId(): int
    {
        return $this->id;
    }
    public function getTitle(): string{
        return $this->title;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getAuthor(): string{
        return $this->author;
    }
    public function getPublicationDate(): \DateTime
    {
        return $this->publicationDate;
    }
    public function getPublisher(): string
    {
        return $this->publisher;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }
    public function setPublicationDate(\DateTime $publicationDate): void
    {
        $this->publicationDate = $publicationDate;
    }
    public function setPublisher(string $publisher): void
    {
        $this->publisher = $publisher;
    }
}
