<?php

require_once "./1-connect.php";

$sql = "DELETE FROM test_table WHERE id = 79";

if (mysqli_query($conn, $sql)) {
    echo "row has been deleted";
}
