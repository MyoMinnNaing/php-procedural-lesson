<?php

require_once "./core/connect.php";
require_once "./core/functions.php";

// delete table if exits
$sql = "DROP TABLE IF EXISTS `test_table`";
toConnectDatabase($sql);

// create table when the table has been deleted
$sql = " CREATE TABLE `test_table` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `money` int(11) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

toConnectDatabase($sql);
