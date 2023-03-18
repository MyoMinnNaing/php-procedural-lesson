<?php

function index()
{
    $sql = "SELECT * FROM test_table";
    $query = mysqli_query($GLOBALS["conn"], $sql);
    $lists = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $lists[] = $row;
    }

    return view("list/index", ["lists" => $lists]);
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
    $query = mysqli_query($GLOBALS['conn'], $sql);
    // dd($query);
    redierct(route("list"));
}


function delete()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM test_table WHERE id = $id";
    $query = mysqli_query($GLOBALS['conn'], $sql);
    redierct(route("list"));
}

function edit()
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM test_table WHERE id = $id";
    $query = mysqli_query($GLOBALS['conn'], $sql);
    $list = mysqli_fetch_assoc($query);  // get array from database 

    return view("list/edit", ['list' => $list]);  // send array to edit.view.php

}



function update()
{
    // dd($_POST);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $money = $_POST['money'];
    $sql = "UPDATE test_table SET name='$name', money=$money WHERE id = $id";
    $query = mysqli_query($GLOBALS['conn'], $sql);
    // dd($query);
    redierct(route("list"));
}
