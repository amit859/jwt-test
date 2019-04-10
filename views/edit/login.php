<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('..\..\config\sql.php');
	session_start();

    if (isset($_POST['submit'])){
		
	 $username = stripslashes($_REQUEST['username']); 
	 $username = mysqli_real_escape_string($con,$username); 
	 $password = stripslashes($_REQUEST['password']);
	 $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT username,api_key FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_connect_error());
		$rows = mysqli_num_rows($result);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "id: " . $row["username"]. " - Name: " . $row["api_key"]. "<br>";
				$uname = $row["username"];
				$apikey = $row["api_key"];
			}
		} else {
			echo "NULL results";
		}
        if($rows==1){

			$_SESSION['username'] = $username;
			$_SESSION['apikey'] = $apikey;;
			header("Location: index.php");
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />

</form>
<p> forget password <a href='reset.php'>forget</a></p>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>


</body>
</html>
