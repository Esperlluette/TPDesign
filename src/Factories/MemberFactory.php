<?php
namespace app\Factories;
use app\Entity\Member;
class MemberFactory
{
    public static function newMember(int $id,string $name,string  $email,string $password){
        return new Member($id, $name, $email, $password);
    }
}
