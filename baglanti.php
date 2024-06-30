<?php
$server = "localhost";
$user = "root";
$pass = "";
$db ="diamond-magaza";

$con = mysqli_connect($server, $user, $pass, $db);
if (!$con) {
    echo mysqli_connect_error();
}