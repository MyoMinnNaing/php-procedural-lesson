<?php

function index()
{
    $sql = "SELECT * FROM test_table";
    if (!empty($_GET["q"])) {
        $q = $_GET["q"];
        $sql .= " WHERE name LIKE '%$q%' ";
    }

    // dd(str_replace("*", "COUNT(id) AS totalRows", $sql));
    // $totalRows = get("SELECT  COUNT(id) AS totalRows FROM test_table")['totalRows']; // test_table မှ rows အရေအတွက် ရယူခြင်း 



    return view("list/index", ["lists" => paginate($sql)]);
}

function create()
{
    view("list/create");
}


function store()
{
    // dd($_POST);
    $name = $_POST['name'];
    $money = $_POST['money'];
    $sql = "INSERT INTO test_table (name,money) VALUES ('$name', $money)";
    toConnectDatabase($sql);
    // mysqli_close($GLOBALS['conn']);
    // dd($GLOBALS['conn']);
    // setSession("list has created successfully");
    redierct(route("list"), "list has created successfully");
}


function delete()
{
    $id = $_POST['id'];
    $sql = "DELETE FROM test_table WHERE id = $id";
    toConnectDatabase($sql);
    // setSession("list has deleted successfully");

    redierct($_SERVER['HTTP_REFERER'], "list has deleted successfully");
}

function edit()
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM test_table WHERE id = $id";
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
    $sql = "UPDATE test_table SET name='$name', money=$money WHERE id = $id";
    toConnectDatabase($sql);
    // dd($query);

    // setSession("list has updated successfully");

    redierct(route("list"), "list has updated successfully");
}
