<?php

session_start();
$_SESSION = array();
session_destroy();
$arr1 = $_SESSION;
print_r($arr1);
header("Location: ../index.php");

?>