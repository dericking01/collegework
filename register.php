<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: reg1.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fontsr/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="cssr/style.css">
	</head>

	<body>
		<div class="wrapper" style="background-image: url('imagesr/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="imagesr/registration-form-1.jpg" alt="">
					<h1><button onclick="document.location='index.html'"><b>HOME</b></button></h1> 
				</div>
				<form action="" method="POST" class="login-email">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" name="firstname"  value="<?php echo $firstname; ?>" required >
						<input type="text" placeholder="Last Name" class="form-control" name="lastname"  value="<?php echo $lastname; ?>" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control" name="username"  value="<?php echo $username; ?>" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address" class="form-control" name="email"  value="<?php echo $email; ?>" required>
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
                    <input type="text" placeholder="social media ac." class="form-control" name="account"  value="<?php echo $account; ?>" required>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
					<label for="image" >File Upload</label>
    <input type="File" id="image" name="image" multiple >
</div>
					<button name="submit" class="btn">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Have an account ?</b> &nbsp&nbsp&nbsp <a href="reg1.php">Login Here</a>.</p><br>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>