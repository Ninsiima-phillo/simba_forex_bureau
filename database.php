<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simbaforex_database";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die("could not connect:" . mysqli_connect_error());
}

mysqli_select_db($connect, "simbaforex_database") or die("error");
