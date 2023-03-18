<?php

function index()
{
    $sql = "SELECT * FROM customers";
    if (!empty($_GET["q"])) {
        $q = $_GET["q"];
        $sql .= " WHERE name LIKE '%$q%' ";
    }

    // return responseJson(paginate($sql));
    return responseJson(loopDataFromDatabase($sql));
}




function store()
{
    // return responseJson($_POST);

    $customerName = $_POST['customerName'];
    $contactName = $_POST['contactName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    toConnectDatabase("INSERT INTO customers (customerName,contactName,address,city,country) VALUES ('$customerName', '$contactName', '$address', ' $city','$country')");

    $currentCustomer = get("SELECT * FROM customers WHERE id = {$GLOBALS['conn']->insert_id}");
    // dd($currentCustomer);
    return responseJson($currentCustomer);
}


function delete()
{
    // dd("I'm delete");
    $id = $_GET['id'];
    $sql = "DELETE FROM customers WHERE id = $id";
    toConnectDatabase($sql);

    return responseJson("customer is deleted");
}

function show()
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM customers WHERE id = $id";

    return responseJson(get($sql));
}



function update()
{
    // dd(file_get_contents("php://input"));
    parse_str(file_get_contents("php://input"), $_PUT);  // parse_str function က string ကို array ပြောင်းပေးပီး $_PUT ထဲကို သိမ်းပေးပါတယ်။။
    // dd($_PUT);

    $id = $_GET['id'];
    $customerName = $_PUT['customerName'];
    $contactName = $_PUT['contactName'];
    $address = $_PUT['address'];
    $city = $_PUT['city'];
    $country = $_PUT['country'];
    $sql = "UPDATE customers SET customerName='$customerName', contactName='$contactName', address='$address', city='$city', country='$country' WHERE id = $id";
    toConnectDatabase($sql);


    return responseJson(get("SELECT * FROM customers WHERE id = $id"));
}
