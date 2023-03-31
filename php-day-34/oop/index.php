<?php
system('cls');
// require_once "./classes/Student.php";
require_once "./autoload.php";

// $student1 = new Student("myo min naing", "male", "1994",);
// $student2 = new Student("khaing thin thin htay", "female", "2022");

// // print_r($student1);
// // echo $student1->showFullName();
// print_r($student2);
// echo $student2->showFullName();
// echo $student2->introduction();


// $one = new one;
// $one->name = "myo min naing";
// echo $one->name;


// $fruits = new Database("fruits");

// print_r($fruits->create([
//     "name" => "khaing thin thin htay",
//     "money" => 1500,
// ]));
// print_r($fruits->index());


// var_dump($fruits->oneRow(108));


// var_dump($fruits->delete(107));



// var_dump($fruits->update(107, [
//     "name" => "khaing ",
//     "money" => "1500",
// ]));


// $one = new One;

// print_r($one->a()->b()->c());


// $users = new QueryBuilder('users',);

// print_r($users->where("gender", "=", "female")->where("age", ">", "18")->sql());
// print_r($users->where("id", "=", "1")->orWhere("id", "=", "2")->orWhere("id", "=", "5")->sql());


$me = new Person();

// echo $me->getFbPassword();
var_dump($me->setFbPassword('myominnaing'));
