<?php





$uri = $_SERVER['REQUEST_URI'];
$uriArray = parse_url($uri);

$path = $uriArray['path'];



const Routes = [
    "/"         => "page@home",
    "/about-us" => "page@about",
    "/list"      => "list@index",
    "/list-create" => "list@create",
    "/list-store" => ["post", "list@store"],
    "/list-edit" => "list@edit",
    "/list-update" => ["put", "list@update"],
    "/list-delete" => ["delete", "list@delete"],

    "/user"      => "user@index",
    "/user-create" => "user@create",
    "/user-store" => ["post", "user@store"],
    "/user-edit" => "user@edit",
    "/user-update" => ["put", "user@update"],
    "/user-delete" => ["delete", "user@delete"],

    "/api/customers"      => "customer@index",
    "/api/customer"      => "customer@show",
    "/api/customer-store" => ["post", "customer@store"],
    "/api/customer-update" => ["put", "customer@update"],
    "/api/customer-delete" => ["delete", "customer@delete"],


];

// path လမ်းကြောင်းလည်းပါတယ် && paht ဟာ array လည်ဖြစ်မယ် && _method က တစ်ခုခုဖြစ်မယ်ဆို 
if (array_key_exists($path, Routes) && is_array(Routes[$path]) && checkRequestMethod(Routes[$path]['0'])) {
    controller(Routes[$path][1]);
} elseif (array_key_exists($path, Routes) && !is_array(Routes[$path])) {
    controller(Routes[$path]);
} else {
    view("not-found");
}
