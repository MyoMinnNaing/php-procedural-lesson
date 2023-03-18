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
    validationStart();
    if (empty(trim($_POST["name"]))) {
        setError("name", "name is required");
    } else if (strlen($_POST['name']) < 3) {
        setError("name", "name is too short");
    } else if (strlen($_POST['name']) > 20) {
        setError("name", "name is too long");
    } else if (!preg_match("/^[a-zA-Z0-9 ]*$/", $_POST['name'])) {
        setError("name", "name only allows number, char and space");
    }

    if (empty(trim($_POST["money"]))) {
        setError("money", "money is required");
    } else if (!is_numeric($_POST['money'])) {
        setError("money", "money must be number");
    } else if ($_POST['money'] < 100) {
        setError("money", "money must be greater than 100");
    } else if ($_POST['money'] > 9999) {
        setError("money", "money must be less than 9999");
    }

    validationEnd();

    dd("Data ready");

    $name = $_POST['name'];
    $money = $_POST['money'];


    $sql = "INSERT INTO fruits (name,money) VALUES ('$name', $money)";
    toConnectDatabase($sql);
    // // mysqli_close($GLOBALS['conn']);
    // // dd($GLOBALS['conn']);
    // // setSession("list has created successfully");
    redierct(route("list"), "list has created successfully");
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
