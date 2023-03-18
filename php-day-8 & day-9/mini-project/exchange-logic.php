<?php

$apiData = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$apiData = json_decode($apiData, true);
$rates = $apiData['rates'];

// 1. USD to MMK  -->   USD * MMK reate (know)

// 2. MMK to USD  --> MMK / USD (know)

// 3.USD to SGD   --?  USD --> MMK             --> MMk --->  SGD
//                     USD * MMK reate   --> MMK rate / SGD


if (isset($_POST['calc'])) :

    print_r($rates);

    $amount = $_POST["amount"];
    $from = $_POST["from"];
    $to = $_POST["to"];


    $mmk = $amount * str_replace(",", "", $rates[$from]);
    $result = $mmk / str_replace(",", "", $rates[$to]);
    echo "<br>";
    echo $mmk;

    // echo $result;

?>


    <div class="bg-light p-5 border border-2">
        <h5 class="text-warning">
            From
            <?= $amount  ?> <?= $from ?> to <?= $to ?>
        </h5>
        <h1 class="h4 text-primary">
            <?= round($result, 2)  ?>
            <?= $to ?>
        </h1>
    </div>

<?php endif; ?>