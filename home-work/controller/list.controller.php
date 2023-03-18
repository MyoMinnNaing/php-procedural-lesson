<?php
function create()
{
    return  view("list/create");
}

function store()
{
    // dd($_POST);
    $name = $_POST['name'];
    $money = $_POST['money'];
    $stock = $_POST['stock'];
    $sql = "INSERT INTO fruits (name,money,stock) VALUES ('$name',$money,$stock)";

    query($sql);
    // dd($GLOBALS['conn']);
    // setSession('list created');
    return redierct(route("list"), "list created");
}





function index()
{

    $sql = "SELECT * FROM fruits";
    if (!empty($_GET['q'])) {
        $q = $_GET['q'];
        $sql .= " WHERE name LIKE '%$q%' ";
    }

    return view("list/index", ["lists" => paginate($sql)]);
}


function delete()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM fruits WHERE id = $id";
    query($sql);

    // setSession('list deleted');
    return   redierct($_SERVER['HTTP_REFERER'], 'list deleted');
}

function edit()
{

    $id = $_GET['id'];
    $sql = "SELECT * FROM fruits WHERE id = $id";

    return view("list/edit", ['data' => getOneData($sql)]);
}


function update()
{
    // dd($_POST);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $money = $_POST['money'];
    $stock = $_POST['stock'];

    $sql = "UPDATE fruits SET name='$name', money=$money, stock=$stock WHERE id =$id ";


    query($sql);

    redierct(route('list'), 'list updated');
    // return   redierct($_SERVER['HTTP_REFERER'], 'list updated');
}
