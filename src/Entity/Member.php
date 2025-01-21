<?php
namespace app\Entity;
class Member
{
    private static int $nbMembers = 0;
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    public function __construct(int $id,string  $name,string $email,string  $password)
    {
        self::$nbMembers++;
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    public function __toString()
    {
        return sprintf(
            "Membre #%d\nName : %s\nEmail : %s\nPassword : %s\n",
            $this->id,
            $this->name,
            $this->email,
            $this->password
        );
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }
}
