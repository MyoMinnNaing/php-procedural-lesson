<?php


// echo file_get_contents("data.json");

$fileName = "myLove.txt";
$myName = "myo min naing";

if (!is_file($fileName)) {
    touch($fileName);

    $fileOpened = fopen($fileName, "w"); // file is opened

    fwrite($fileOpened, $myName . " ");
    fwrite($fileOpened, "love" . " ");
    fwrite($fileOpened, "khaing thin thin htay");

    fclose($fileOpened);
}
