<?php

function index()
{
    $sql = "SELECT * FROM fruits";
    if (!empty($_GET["q"])) {
        //  filter function က script tags နဲ့ serach လုပ်တဲ့အခါ script tags တွေကိုဖြုတ်ချ ပေးပါတယ်။။
        $q = filter($_GET["q"], true);
        $sql .= " WHERE name LIKE '%$q%' ";
    }


    return view("list/index", ["lists" => paginate($sql)]);
}

function create()
{
    view("list/create");
}


function store()
{
    if (empty(trim($_POST['name']))) {
        dd('name is requre');
    } else if (strlen($_POST['name']) < 3) {
        dd("name is too short");
    } else if (strlen($_POST['name']) > 20) {
        dd(" name is too long");
    }


    dd('data ready');




    // $name = filter($_POST['name']);
    // $money = $_POST['money'];
    // $sql = "INSERT INTO fruits (name,money) VALUES ('$name', $money)";
    // toConnectDatabase($sql);
    // // mysqli_close($GLOBALS['conn']);
    // // dd($GLOBALS['conn']);
    // // setSession("list has created successfully");
    // redierct(route("list"), "list has created successfully");
}


function delete()
{
    $id = $_POST['id'];
    $sql = "DELETE FROM fruits WHERE id = $id";
    toConnectDatabase($sql);
    // setSession("list has deleted successfully");

    redierct($_SERVER['HTTP_REFERER'], "list has deleted successfully");
}

function edit()
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM fruits WHERE id = $id";
    // $query = toConnectDatabase($sql);
    // $list = mysqli_fetch_assoc($query);

    return view("list/edit", ['list' => get($sql)]);
}



function update()
{
    // dd($_POST);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $money = $_POST['money'];
    $sql = "UPDATE fruits SET name='$name', money=$money WHERE id = $id";
    toConnectDatabase($sql);
    // dd($query);

    // setSession("list has updated successfully");

    redierct(route("list"), "list has updated successfully");
}
