<?php

require_once "../index.php";
// echo "<pre>";
// dd($_SERVER);



$uri = $_SERVER['REQUEST_URI'];
$uriArray = parse_url($uri); // parse_url function က string ကို array ပြောင်းပေးပါတယ်။။
// dd($uriArray);
$path = $uriArray['path'];
// dd($path);


const Routes = [
    "/list"      => "list@index",
    "/list-create" => "list@create",
    "/list-store" => "list@store", // post method
    "/list-delete" =>  "list@delete", // delete method
    "/list-edit" => "list@edit",
    "/list-update" => "list@update", // put method

];


if (array_key_exists($path, Routes)) {
    controller(Routes[$path]);
} else {
    view("not-found");
}
