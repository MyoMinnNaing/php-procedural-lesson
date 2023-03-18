<?php

require_once "./1-connect.php";

$sql = "UPDATE test_table SET name='grape' WHERE id = 74 ";

if (mysqli_query($conn, $sql)) {
     echo "row updating was successful";
}
