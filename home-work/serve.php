
<?php

$port = rand(8000, 9999);
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    # code...
    system("cd router && php -S localhost:" . $port);
} else {
    system("cd router; php -S localhost:" . $port);
}
