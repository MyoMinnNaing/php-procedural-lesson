<?php
$myArray = [
    "first" => [
        "name" => "John",
        "age" => 25
    ],
    "second" => array(
        "name" => "Jane",
        "age" => 30
    )
    ];

foreach ($myArray as $key => $value) {
    echo "$key:\n";
    foreach ($value as $innerKey => $innerValue) {
        echo "  $innerKey => $innerValue\n";
    }
}
