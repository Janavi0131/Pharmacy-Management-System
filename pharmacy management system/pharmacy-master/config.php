<?php
$host = "localhost";
$dbname = "pharmacy_management_new";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $dbname, $username, $password);

if ($mysqli->connect_errno){
    die("Connection error:" . $mysqli->connect_error);
}
 return $mysqli;
?>