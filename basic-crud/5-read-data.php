<?php
require_once "./1-connect.php";

$sql = "SELECT * FROM test_table";
$query = mysqli_query($conn, $sql);

//  print_r(mysqli_fetch_assoc($query));
//  print_r(mysqli_fetch_assoc($query));

while ($rows = mysqli_fetch_assoc($query)) {
    echo "<pre>";
    print_r($rows);
}
