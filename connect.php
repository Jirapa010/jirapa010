<?php

$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db = "jirapa";

$conn = mysqli_connect($host, $user, $pass, $db);


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();

}





?>