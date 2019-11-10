<?php

$serverName = "localhost";
$dbName = "lux";
$userName = "root";
$password = "";

$con = mysqli_connect($serverName, $userName, $password);
mysqli_select_db($con, $dbName);

 ?>
