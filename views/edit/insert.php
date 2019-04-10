<?php
require('..\..\config\sql.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
 $name =$_REQUEST['name'];
 $age = $_REQUEST['age'];
 $password = $_REQUEST['password'];
 $title = $_REQUEST['author'];
 $author = $_REQUEST['title'];
 $body = $_REQUEST['body'];
$submittedby = $_SESSION["username"];
$key = $_SESSION['apikey'];
$ins_query= "INSERT INTO new_record (`trn_date`,`name`,`age`,`password`,`author`,`title`,`body`,`submittedby`,`key`) VALUES ('$trn_date','$name','$age','$password','$author','$title','$body','$submittedby','$key')";
mysqli_query($con,$ins_query) or die(mysqli_connect_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input type="password" name="password" placeholder="enter password" require/></p>
<p><input type="text" name="author" placeholder="Enter author" required /></p>
<p><input type="text" name="title" placeholder="Enter title" required /></p>
<p><input type="text" name="body" placeholder="Enter body" required /></p>

<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
</body>
</html>
