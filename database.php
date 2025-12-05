<?php
$host = "localhost";
$user = "root";
$pass = "sowmika_123sql";
$db = "Todo_app";

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn) {
    die("database connection failed".mysqli_connect_error());
}