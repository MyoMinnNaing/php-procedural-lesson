<?php require_once "./classes/Fruit.php";

system('cls');
// instantiate (class => obj)
$fruit1 = new Fruit("mmn", "ktth");
$fruit1->name = 'orange';
$fruit1->color = "red";
$fruit1->weigth = "1kg";
$fruit1->price = 1500;

echo $fruit1->detail();
