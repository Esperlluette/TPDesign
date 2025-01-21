<?php
namespace app\Controllers;
use app\Factories\MemberFactory;
class MemberController
{
    private MemberFactory $memberFactory;
    public function __construct()
    {
        $this->memberFactory = new MemberFactory();
    }
    public function getMemberFactory(){
        return $this->memberFactory;
    }
}
