<?php

// COMMON FUNCTIONS START

function responseJson(mixed $data, int $status = 200): string
{
    header("Content-type:Application/json");
    http_response_code($status);
    if (is_array($data)) {
        return print(json_encode($data));
    }
    return print(json_encode(["message" => $data]));
}

function logger(string $message, int $colorCode = 32): void
{
    echo " \e[39m[LOG]" . " \e[{$colorCode}m" . $message . " \n";
}

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


function filter(string $string, bool $strip = false)
{

    if ($strip) {
        $string = strip_tags($string);
    }
    // $string = str_replace('script', '', $string);
    // $string = trim($string, "<></>");

    $string = htmlentities($string, ENT_QUOTES);
    $string = stripslashes($string);
    return $string;
}

// COMMON FUNCTIONS END


// session function start

function setSession(string $message, string $key = "message"): void
{
    // $_SESSION["message"] = value
    $_SESSION[$key] = $message;
}

function hasSession(string $key = "message"): bool
{
    if (!empty($_SESSION[$key])) return true;
    return false;
}

function showSession(string $key = "message"): string
{
    $message = $_SESSION[$key];   // $message = message(default) or something alert word;
    unset($_SESSION[$key]);
    return $message;  // return value is => "message" or "somethin alert word";
}

// session function end



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
    require_once ControllerDir . "/$controllerNameArray[0].controller.php"; //example out put ===> php-list-builder/controller/list.controller.php ကို ရောက်ပါတယ်
    // dynamic function call
    call_user_func($controllerNameArray[1]); // example out put ===> list.controller.php ထဲက index function ကို run ပေးပါတယ်။။
}


function route(string $path, array $queries = null): string
{
    $url = url($path);
    if (!is_null($queries)) {
        $url .= "?" . http_build_query($queries);
    }
    return $url;
}

function redierct(string $url, string $message = null): void
{
    if (!is_null($message)) setSession($message);
    header("location:" . $url);
}

function redierctBack(string $message = null): void
{
    redierct($_SERVER['HTTP_REFERER'], $message);
}




function checkRequestMethod(string $methodName)
{
    $result  = false;
    $methodName = strtoupper($methodName);
    $severRequestMethod = $_SERVER["REQUEST_METHOD"];
    if ($methodName === "POST" && $severRequestMethod === "POST") {
        $result = true;
    } elseif ($methodName === "PUT" && ($severRequestMethod == "PUT" || ($severRequestMethod === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "PUT"))) {
        $result = true;
    } elseif ($methodName === "DELETE" && ($severRequestMethod == "DELETE" || ($severRequestMethod === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "DELETE"))) {
        $result = true;
    }

    return $result;
}


// database function start

function toConnectDatabase(string $sql, bool $closeConnection = false): object|bool
{
    try {
        $query = mysqli_query($GLOBALS['conn'], $sql);

        // closeConnection  ture ဖြစ်ရင် mysqli_connect ကို cloe မယ် 
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


function paginate($sql, $limit = 10)
{
    $totalRows = get(str_replace("*", "COUNT(id) AS totalRows", $sql))['totalRows'];

    $totalPage = ceil($totalRows / $limit);  // 100 / 10 = 10 pages

    $curretPage = isset($_GET['page']) ? $_GET['page'] : 1; // url မှာ page ပါလာရင် --> ပါလာတဲ့ page ကိုသွား မဟုတ်ရင် page 1 ကိုသွား
    $offset = ($curretPage - 1) * $limit; // eg--> (1-1) * 10 = 0 / eg --> (2-1) * 10 = 10;
    $sql .= " LIMIT $offset,$limit"; // SELECT * FROM test_table LIMIT 0 or 1 or ..ect , 10;

    $links = [];

    for ($i = 1; $i <= $totalPage; $i++) {
        $queries = $_GET;
        $queries["page"] = $i;
        $url = url() . $GLOBALS['path'] . "?" . http_build_query($queries);
        $links[] = [
            "url" => $url,
            "is_active" => $i == $curretPage ? "active" : "",
            "page_number" => $i,
        ];
    }

    $lists = [
        "totalRows" => $totalRows,
        "limit" => $limit,
        "total_page" => $totalPage,
        "current_page" => $curretPage,
        "data" => loopDataFromDatabase($sql),
        "links" => $links,
    ];
    return $lists;
}



function createTable(string $tableName, ...$columns): void
{

    $sql = "DROP TABLE IF EXISTS $tableName";
    toConnectDatabase($sql);
    logger($tableName . " table drop successfully", 93);


    $sql = "CREATE TABLE $tableName (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    " . join(",", $columns) . ",
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

    toConnectDatabase($sql);
    logger($tableName . " table create successfully");
}
// database function end


// ERROR FUNCITON START
function setError(string  $key, string $message): void
{
    $_SESSION['error'][$key] = $message;
}

function hasError(string $key): bool
{
    if (!empty($_SESSION['error'][$key])) return true;
    return false;
}

function showError(string $key): string
{
    $message = $_SESSION['error'][$key];
    unset($_SESSION['error'][$key]);
    return $message;
}

// ERROR FUNCITON END

// VALIDATION FUNCTION START

function validationStart()
{
    $_SESSION['old'] = $_POST;
}


function validationEnd()
{
    if (hasSession('error')) {
        redierctBack();
    }
}
// VALIDATION FUNCTION END
