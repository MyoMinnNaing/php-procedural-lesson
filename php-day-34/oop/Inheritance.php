<?php

class A
{
    public $name = "ktth";
    protected $money = "12000000";
    private $fbPassword = "asdf";
}

class B extends A
{
    public function b()
    {
        return "this is b ----" . $this->name;
    }
}

$b = new B();
print_r($b->b());
