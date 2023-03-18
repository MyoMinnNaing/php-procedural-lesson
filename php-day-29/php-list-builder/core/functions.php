<?php

function dd($data, $showType = false): void
{
    echo "<pre style='background-color: #1d1d1d;color: #cdcdcd; padding: 20px; margin: 10px; border-radius: 10px; line-height: 1.2rem;'>";
    if ($showType) {
        var_dump($data);
    } else {
        print_r($data);
    }
    echo  "</pre>";
    die();
}


function url(string $path = null): string
{
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if (isset($path)) {
        $url .= "/";
        $url .= $path;
    }
    return $url;
}

function alert(string $message, string $color = 'success')
{
    return "<div class='alert alert-$color'>$message </div>";
}

function showDateTime(string $timestamp, string $format = "j M Y"): string
{
    return date($format, strtotime($timestamp));
}

function view(string $viewName, array $data = null): void
{
    // array to variable
    if (!is_null($data)) {
        foreach ($data as $key => $value) {
            // dynamic variable name
            ${$key} = $value;
        }
    }
    require_once ViewDir . "/$viewName.view.php";
}

function controller(string $controllerName): void
{
    //  string to array 
    // "list@index" =>  ["list","index"]
    $controllerNameArray = explode("@", $controllerName);
    require_once ControllerDir . "/$controllerNameArray[0].controller.php";
    // dynamic function call
    call_user_func($controllerNameArray[1]);
}


function route(string $path, array $queries = null): string
{
    $url = url($path);
    if (!is_null($queries)) {
        $url .= "?" . http_build_query($queries);
    }
    return $url;
}

function redierct($url): void
{
    header("location:" . $url);
}


function checkRequestMethod(string $methodName)
{
    $result  = false;
    $methodName = strtoupper($methodName);
    $severRequestMethod = $_SERVER["REQUEST_METHOD"];
    if ($methodName === "POST" && $severRequestMethod === "POST") {
        $result = true;
    } elseif ($methodName === "PUT" && $severRequestMethod === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "PUT") {
        $result = true;
    } elseif ($methodName === "DELETE" && $severRequestMethod === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "DELETE") {
        $result = true;
    }

    return $result;
}


// database function start

function toConnectDatabase(string $sql, bool $closeConnection = true): object|bool
{
    try {
        $query = mysqli_query($GLOBALS['conn'], $sql);
        if ($closeConnection) mysqli_close($GLOBALS['conn']);
        return $query;
    } catch (Exception $e) {
        dd($e);
    }
}


function loopDataFromDatabase(string $sql): array
{
    $lists = [];
    $query = toConnectDatabase($sql);

    while ($row = mysqli_fetch_assoc($query)) {
        $lists[] = $row;
    }

    return $lists;
}


function get(string $sql): array
{
    $query = toConnectDatabase($sql);
    $list = mysqli_fetch_assoc($query);

    return $list;
}

// database function end