<?php


class Person
{
    public $skinColor;

    protected $money;

    private $fbPassword = "asdffdsa";



    public function setFbPassword($newPassword)
    {
        return $this->fbPassword = $newPassword;
    }
    public function getFbPassword()
    {
        return $this->fbPassword;
    }
}
