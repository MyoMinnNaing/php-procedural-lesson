<?php
// echo "<pre>";
// print_r($_REQUEST);
// print_r($_FILES);



// echo "</pre>";

// echo "My name is {$_POST['your_name']} and My email is {$_POST['your_email']}";

use function PHPSTORM_META\type;

header("Content-type:application/json");
echo json_encode($_POST);