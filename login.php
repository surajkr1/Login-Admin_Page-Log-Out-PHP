<?php
session_start(); 
if(isset($_SESSION['username'])){
	header("location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Login</title>
</head>
<body>

<div class="container-fluid">
	<form method="POST">
		<div class="form-group">
		
		<label for="my-input">UserName</label>
		<input id="my-input" class="form-control" type="text" name="username">
		<label for="my-input">Password</label>
		<input id="my-input" class="form-control" type="password" name="password">
		
		</div>
		<button type="Submit" class="btn btn-primary" name="login">Log In</button>
	</form>
</div>
<?php
require("connect.php");
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `data` WHERE `Username` = '$username' AND `Password` = '$password'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==1){
		session_start();
		$_SESSION['username'] = $_POST["username"];
		header("location: admin.php");
	}
	else{
		echo '<script>alert("Incorrect Username or Password");</script>';
	}	
}

?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
