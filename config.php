<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'u4660227wh_restxml');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (empty($_SESSION["lang"])) {
    $default_lang = "en.php";
} else {
    $default_lang = $_SESSION["lang"];
}
if (empty($_SESSION["city"])) {
    $default_city = "Nur-sultan";
} else {
    $default_city = $_SESSION["city"];
}