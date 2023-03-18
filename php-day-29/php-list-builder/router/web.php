<?php




// dd($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
$uriArray = parse_url($uri);
$path = $uriArray['path'];
// dd($path);


const Routes = [
    "/"         => "page@home",
    "/about-us" => "page@about",
    "/list"      => "list@index",
    "/list-create" => "list@create",
    "/list-store" => ["post", "list@store"],
    "/list-edit" => "list@edit",
    "/list-update" => ["put", "list@update"],
    "/list-delete" => ["delete", "list@delete"],

];


if (array_key_exists($path, Routes) && is_array(Routes[$path]) && checkRequestMethod(Routes[$path]['0'])) {
    controller(Routes[$path][1]);
} elseif (array_key_exists($path, Routes) && !is_array(Routes[$path])) {
    controller(Routes[$path]);
} else {
    view("not-found");
}
