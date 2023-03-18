<?php

$folderName = "testing_floder";
$fileName = "testing";
$fileExtension = ".php";


// mkdir($folderName); === create foler
// touch($folderName . "/" . $fileName . $fileExtension); === create file in a folder

// unlink($folderName . "/" . $fileName . $fileExtension); ===  delete file in a folder
// rmdir($folderName); === delete folder

// if (!is_dir($folderName)) {
//     mkdir($folderName);
// }

// touch($folderName . "/" . "aa" . $fileExtension);
// touch($folderName . "/" . "bb" . $fileExtension);
// touch($folderName . "/" . "cc" . $fileExtension);
// touch($folderName . "/" . "dd" . $fileExtension);
// touch($folderName . "/" . "ee" . $fileExtension);

// if (is_dir($folderName)) {
//     foreach (scandir($folderName) as $file) {
//         if (is_file($folderName . "/" . $file)) {
//             echo $file . "\n";
//         }
//     }
// }

if (is_dir($folderName)) {
    foreach (scandir($folderName) as $file) {
        $currentFilePath = $folderName . "/" . $file;
        if (is_file($currentFilePath)) {
            unlink($currentFilePath);
        }
    }
}

rmdir($folderName);
