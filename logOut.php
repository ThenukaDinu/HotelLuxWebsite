<?php 
session_start();

unset($_SESSION['loggedEmail']);
unset($_SESSION['loggedUName']);

header("Location: index.php");
die();
?>