<?php

require_once "./1-connect.php";

$sql = "CREATE DATABASE test_database";

if (mysqli_query($conn, $sql)) {
    echo "database has created";
}else {
    echo "fail to create database";
}