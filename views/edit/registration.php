<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
    require('..\..\config\sql.php');
    //require('api_key.php');
    // If form submitted, insert values into the database.

    if (isset($_REQUEST['submit'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $charset = '@#$%^&*!0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $api_key = substr(str_shuffle($charset),0,12);
        
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, api_key, trn_date) VALUES
         ('$username', '".md5($password)."', '$email','$api_key', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" />
<input type="submit" name="submit" value="Register" />
</form>
</div>
    <?php  }?>
</body>
</html>
