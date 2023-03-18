<?php

function index()
{
    $sql = "SELECT * FROM test_table";
    // $query = mysqli_query($GLOBALS["conn"], $sql);
    // $query = toConnectDatabase($sql);
    // $lists = [];

    // while ($row = mysqli_fetch_assoc($query)) {
    //     $lists[] = $row;
    // }

    return view("list/index", ["lists" => loopDataFromDatabase($sql)]);
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
    redierct(route("list"));
}


function delete()
{
    $id = $_POST['id'];
    $sql = "DELETE FROM test_table WHERE id = $id";
    toConnectDatabase($sql);
    redierct(route("list"));
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
    redierct(route("list"));
}
