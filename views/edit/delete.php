<?php
require('..\..\config\sql.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_connect_error());
header("Location: view.php"); 
?>