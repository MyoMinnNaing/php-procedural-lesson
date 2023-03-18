<?php


$num = (int) 45;

$num2 = (float) 42.12;

$myName = (string) "myominnaing";

$students = (object) [
      "name" => "mg mg",
      "age" => 23,
      "city" =>"yango"

];

echo $students->name;
echo "\n";

$boolType = (bool) ""; // return true or false 

var_dump($boolType);

echo "\n";
$boolType2 = (bool) " 123 "; // return true or false 
var_dump($boolType2);
echo "\n";


function run(float $num, float $num2) : float {
     return $num * $num2;
} 

var_dump(run(3,3.3));


