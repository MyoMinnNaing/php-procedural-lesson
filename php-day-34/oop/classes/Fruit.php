<?php

class Fruit
{
    public $name;
    public $color;
    public $weigth;
    public $price;

    function __destruct()  //  destruct function တွေက နောက်ဆုံးမှ အလုပ်လုပ်ပါတယ်။။
    {
        // echo "I am destructor \n";
    }

    function __construct($x, $y)
    {
        // echo "I am constructor -- $x -- $y \n";
    }


    public function detail()
    {

        return "This is $this->name and price is $this->price";
    }
}
