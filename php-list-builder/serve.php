<?php

$port = rand(8000, 9999);
if (strtoupper(substr(PHP_OS,0,3))==='WIN') {
    # code...
    system("cd public && php -S localhost:".$port);
}else {
    system("cd public; php -S localhost:".$port);
}

// system('cd /d public && php -S localhost:8080');
