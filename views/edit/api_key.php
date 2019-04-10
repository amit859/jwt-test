<?php
include("auth.php"); 
 ?>
<!DOCTYPE html>
<html>
<head>
<title>API </title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p> 
<input type="text" value="<?php echo $_SESSION['apikey'];?>"/></p>
<p><input type="text"/></p>
<p><input type="button" name = "Generate" value="submit " /></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
