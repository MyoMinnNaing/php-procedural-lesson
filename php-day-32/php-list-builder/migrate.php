<?php
system('cls');
require_once "./core/connect.php";
require_once "./core/functions.php";

$tables = loopDataFromDatabase("show tables");
// print_r($tables);

foreach ($tables as $table) {
  toConnectDatabase("DROP TABLE IF EXISTS " . $table['Tables_in_profile']);
}



logger("All tables are dropped");



createTable("users", "name varchar(20) NOT NULL", "email varchar(50) NOT NULL", "phone varchar(50) NOT NULL", "address TEXT NOT NULL", "gender enum('male','female') NOT NULL");
createTable("customers", "customerName varchar(50) NOT NULL", "contactName varchar(50) NOT NULL", "address TEXT NOT NULL", "city varchar(50) NOT NULL", "country varchar(50) NOT NULL");
