<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "imgUpload";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
$mysqli = new mysqli("localhost", "root", "", "imgUpload");

if (!$conn) {
    echo "Connection failed!" . mysqli_connect_error();
}