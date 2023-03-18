<?php
session_start();
require_once "./core/connection.php";
require_once "./core/functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // dd($_POST);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $money = $_POST['money'];
    
    $sql = "UPDATE test_table SET name='$name', money=$money WHERE id = $id";
    if(mysqli_query($conn,$sql)) {

        $_SESSION['status'] = [
            "message" => "Data Updated"
       ];
        header("LOCATION:list-index.php");
    }
}