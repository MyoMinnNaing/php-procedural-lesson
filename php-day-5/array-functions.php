<?php

$fruits = ["orange","magno","apple","banana","grape"];

// $result = array_push($fruits,"coconut");

// echo ($result)."\n"; 
// print_r($fruits);


//  $sliceArray = array_slice($fruits,0,2);

//  print_r($sliceArray); 
//  echo "<br>";
//  print_r($fruits);

$joinArray = join("-",$fruits);
echo ($joinArray) . "<br>"; 

print_r($fruits);
echo "<hr>";


// An array that represents a possible record set returned from a database
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);


 $returnValueArrayColumn = array_column($a, "last_name","first_name");

 print_r($returnValueArrayColumn);
echo "<br>";

print_r($a);


echo "<hr>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("e"=>"red","f"=>"green","g"=>"blue","d"=>"yellow","h"=> "black");

$resultArrayDiff = array_diff($a2,$a1);

print_r($resultArrayDiff) ;


