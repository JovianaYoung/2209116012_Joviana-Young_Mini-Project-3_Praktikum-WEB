<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "joviweb3";

$con = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$con) {
    die("Something went wrong;");
}
?>
