<?php

function index()
{
    $sql = "SELECT * FROM users";
    if (!empty($_GET["q"])) {
        $q = $_GET["q"];
        $sql .= " WHERE name LIKE '%$q%' ";
    }

    return view("user/index", ["lists" => paginate($sql)]); //example out put ===> view/list/index.view.php ကို ပို့ပေးပါတယ်။။  view function က parameter အနေနဲ့  array တစ်ခုရော သယ်သွားပါတယ်။။
}

function create()
{
    view("user/create");
}


function store()
{
    // dd($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    // dd(var_dump($gender));
    $sql = "INSERT INTO users (name,email,phone,address,gender) VALUES ('$name', '$email','$phone','$address','$gender')";
    toConnectDatabase($sql);
    // mysqli_close($GLOBALS['conn']);
    // dd($GLOBALS['conn']);
    // setSession("list has created successfully");
    redierct(route("user"), "user created successfully");
}


function delete()
{
    // dd($_POST);
    $id = $_POST['id'];
    $sql = "DELETE FROM users WHERE id = $id";
    toConnectDatabase($sql);
    // setSession("list has deleted successfully");

    redierct(route("user"), "user has deleted successfully");
}

function edit()
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    // $query = toConnectDatabase($sql);
    // $list = mysqli_fetch_assoc($query);

    return view("user/edit", ['list' => get($sql)]);
}



function update()
{
    // dd($_POST);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];




    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address', gender='$gender' WHERE id = $id";
    toConnectDatabase($sql);
    // dd($query);

    // setSession("list has updated successfully");

    redierct(route("user"), "user updated successfully");
}
