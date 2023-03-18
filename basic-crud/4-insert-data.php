<?php

require_once "./1-connect.php";

$sql = "INSERT INTO test_table (name, money) VALUES ('mya mya', 150000),('hla hla', 200000)";

if (mysqli_query($conn,$sql)) {
      echo "data inserting has finished";
}