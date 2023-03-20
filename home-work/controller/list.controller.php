<?php
function create()
{
    return  view("list/create");
}

function store()
{
    validationStart();

    if (empty(trim($_POST['name']))) {
        setError('name', 'name is requie');
    } else if (strlen(trim($_POST['name'])) < 3) {
        setError('name', 'name is too short');
    } else if (strlen(trim($_POST['name'])) > 15) {
        setError('name', 'name is too long');
    } else if (!preg_match("/^[a-zA-Z0-9 ]*$/", $_POST['name'])) {
        setError('name', "name only allows number, char and space");
    }

    if (empty(trim($_POST['money']))) {
        setError('money', 'plese insert amount');
    } else if (!is_numeric($_POST['money'])) {
        setError('money', 'money must be number');
    } else if (trim($_POST['money']) > 999999) {
        setError('money', 'money must be less than 100000');
    }

    if (empty(trim($_POST['stock']))) {
        setError('stock', 'plese insert amount');
    } else if (!is_numeric($_POST['stock'])) {
        setError('stock', 'stock must be number');
    } else if (trim($_POST['stock']) > 99) {
        setError('stock', 'stock must be less than 100');
    }


    validationEnd();



    // dd('data ready');

    $name = santizie($_POST['name'], true);
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
