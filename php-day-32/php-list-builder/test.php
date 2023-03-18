<?php

system('cls');


// function filter(string $string)
// {
//     $string = str_replace('script', '', $string);
//     $string = trim($string, "<></>");
//     return $string;
// }

// echo filter('<script>location.href="mms-it.com"</script>');



function filter(string $string)
{
    // $string = str_replace('script', '', $string);
    // $string = trim($string, "<></>");
    $string = strip_tags($string);
    // $string = trim($string);  // trim function က space တွေကို ဖြတ်ထုတ်ပေးပါတယ်။။
    // $string = htmlentities($string, ENT_QUOTES);
    // $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    // $string = htmlspecialchars_decode($string);
    // $string = stripslashes($string);


    return $string;
}

// echo filter('<script> location.href="https:/mms-it.com"</script>');

// var_dump(filter("&lt;script&gt;alert(&quot;Hello&quot;);&lt;/script&gt;"));


$string = "myo min naing";

$string = trim($string);
$lenght = strlen($string);

echo $lenght;
