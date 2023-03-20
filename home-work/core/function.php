<?php

function alert(string $message, string $color = 'success')
{
    return "<div class='alert alert-$color'>$message </div>";
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


function controller(string $controllerName): void
{
    //  string to array 
    // "list@index" =>  ["list","index"]
    $controllerNameArray = explode("@", $controllerName);
    require_once ControllerDir . "/$controllerNameArray[0].controller.php";
    // dynamic function call
    call_user_func($controllerNameArray[1]);
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


function url(string $path = null): string
{
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if (isset($path)) {
        $url .= "/";
        $url .= $path;
    }
    return $url;  // $url = http://localhost:8080/$path
}

function route(string $path, array $queries = null): string
{
    $url = url($path);   // $url = http://localhost:8080/$path 
    if (!is_null($queries)) {
        $url .= "?" . http_build_query($queries);  // eg =>  $url = http://localhost:8080/$path?q=apple 

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
    // die();
}

// Validation Function Start

function setError(string $key, string $message): void
{
    $_SESSION['error'][$key] = $message;
}

function hasError($key): bool
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


function validationStart(): void
{
    unset($_SESSION['old']);
    unset($_SESSION['error']);
    $_SESSION['old'] = $_POST;
}


function showOldData($key): string|null
{
    if (isset($_SESSION['old'][$key])) {
        $data = $_SESSION['old'][$key];
        // unset($_SESSION['old'][$key]);
        return $data;
    }
    return null;
}


function validationEnd()
{
    if (hasSession('error')) {
        redierctBack();
        die();
    } else {
        unset($_SESSION['old']);
    }
}

// Validation Function End



// SESSION FUNCTION START

function setSession(string $message, string $key = "message"): void
{
    $_SESSION[$key] = $message;
}


function hasSession(string $key = "message"): bool
{

    // SESSION VARIABLE မှာ $key တန်ဖိုးရှိနေရင် return တန်း true :
    if (!empty($_SESSION[$key])) return true;
    return false;
}


function showSession(string $key = "message"): string
{
    $message = $_SESSION[$key];
    unset($_SESSION[$key]);

    return $message;
}
// SESSION FUNCTION END

// DATABASE FUNCTIONS START

function query(string $sql, $colseDb = false): object|bool
{

    $query = mysqli_query($GLOBALS['conn'], $sql);
    if ($colseDb) mysqli_close($GLOBALS['conn']);

    return $query;
}


function loopMysqlObject(string $sql): array
{
    $arrayFromDatabase = [];
    $query = query($sql);
    while ($rows = mysqli_fetch_assoc($query)) {
        $arrayFromDatabase[] = $rows;
    }

    return $arrayFromDatabase;
}


function getOneData(string $sql): array
{
    $query = query($sql);
    $data = mysqli_fetch_assoc($query);

    return $data;
}


function paginate(string $sql, $limit = 5): array
{
    $totalRows = getOneData(str_replace("*", "COUNT(id)AS totalRows", $sql))['totalRows'];
    $totalPages = ceil($totalRows / $limit);

    // offset ရဖို့ လက်ရှိရောက်နေတဲ့ page ကို သိဖို့လိုတယ်။
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $limit;
    // dd($offset);

    $sql .= " LIMIT $offset, $limit";
    $links = [];

    for ($i = 1; $i <= $totalPages; $i++) {
        $queries = $_GET;
        $queries['page'] = $i;
        $url = url() . $GLOBALS['path'] . "?" . http_build_query($queries);
        //eg -->$url = http://localhost:8080/list?q=dar&page3  (http://localhost:8080 is url, /list is path and q=dar&page=3 is query)


        $links[] = [

            "url" => $url,
            "page_number" => $i,
            "is_active" => $i == $currentPage ? "active" : "",
        ];
    }

    $lists = [
        "totalRows" => $totalRows,
        "limit" => $limit,
        "total_page" => $totalPages,
        "current_page" => $currentPage,
        "data" => loopMysqlObject($sql),
        "links" => $links,

    ];

    return $lists;
}

// DATABASE FUNCTIONS END


// USER INPUT SANTIZING FUNCTION

function santizie(string $string, $strip = false): string
{
    if ($strip) {
        $string = strip_tags($string);
    }
    $string = htmlentities($string, ENT_QUOTES);
    $string = stripslashes($string);

    return $string;
}
