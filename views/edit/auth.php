<?php
session_start();
if(!isset($_SESSION["username"]) && !isset($_SESSION["apikey"])){
header("Location: login.php");
exit(); }

?>
