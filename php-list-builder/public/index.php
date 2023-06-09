<?php
require_once "../index.php";

// if($_SERVER['REQUEST_URI'] === "/") {
//     require_once ViewDir."/home.view.php";
// }
// elseif($_SERVER['REQUEST_URI'] === "/about-us") {
//     require_once ViewDir."/about.view.php";
// }

// dd($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
$uriArray = parse_url($uri);
$path = $uriArray['path'];


switch ($path) {
     case "/":
          view("home", ["myName" => "myo min naing", "myAge" => 28]);
          break;

     case "/about-us":
          view("about", ["myLove" => "Khaing Thin Thin Htay", "herAge" => 27]);
          break;

     case "/list":
          controller("list@index");
          break;

     case "/list-create":
          controller("list@create");
          break;
     case "/list-store":
          controller("list@store");
          break;
     case "/list-delete":
          controller("list@delete");
          break;

     case "/list-edit":
          controller("list@edit");
          break;

     case "/list-update":
          controller("list@update");
          break;

     default:
          view("not-found");
}
