<?php

require_once "./1-connect.php";

$sql =" CREATE TABLE `test_database`.`test_table` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `money` INT NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";


if (mysqli_query($conn,$sql)) {
    echo "test_table has create";
}