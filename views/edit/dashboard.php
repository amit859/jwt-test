<?php
 
require('..\..\config\sql.php');
include("auth.php"); 
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to Dashboard.</p>

<p><a href="index.php">Home</a><p>
<p><a href="insert.php">Insert New Record</a></p>
<p><a href="view.php">View Records</a><p>
<p><a href="logout.php">Logout</a></p>

</div>
</body>
</html>