<?php

include "koneksi.php";
error_reporting(0);

session_start();

if(isset($_SESSION['username'])){
    header("location:home.php");
}

if (isset($_POST['btnregister'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username, password)
					VALUES ('$username', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User berhasil ditambahkan')</script>";
				$username = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} 
		} else {
			echo "<script>alert('Username telah terdaftar')</script>";
		}

	} else {
		echo "<script>alert('Password tidak sesuai')</script>";
	}
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Register Form </title>

	<link href="css/style2.css" rel="stylesheet" type="text/css" />

	
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required> 
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required> 
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>  
			</div>
			<div class="input-group">
				<button name="btnregister" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>


	</div>
</body>
</html>