<?php
namespace app\Factories;
use app\Entity\Member;
class MemberFactory
{
    public static function newMember($id, $name, $email, $password){
        return new Member($id, $name, $email, $password);
    }
}
