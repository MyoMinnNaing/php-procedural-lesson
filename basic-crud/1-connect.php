 <?php
   $hostname = "localhost";
   $username = "mmn";
   $password = "myominnaing";
   $database = "test_database";
   $conn = mysqli_connect($hostname, $username, $password, $database);

   if ($conn) {
      // print_r($conn);
   }
