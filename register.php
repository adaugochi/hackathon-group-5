<?php
	session_start();
	include 'db.php';

	if(isset($_POST['signup'])){
		$fname 				= 	checkInput($_POST['fname']);
		$email 				= 	checkInput($_POST['email']);
		$companyname		= 	checkInput($_POST['companyname']);
		$address 			= 	checkInput($_POST['address']);
		$password 			= 	md5(checkInput($_POST['password']));
		$pnum 				=	checkInput($_POST['pnum']);
		
		if (!empty($fname) && !empty($email) && !empty($companyname) && !empty($address) && !empty($password) && !empty($pnum) ) {
			
			$query = "SELECT email FROM vendors WHERE email = '$email'";
			$query_run = mysqli_query($conn, $query);

			if (mysqli_num_rows($query_run) == 1) {
				$userDetail = "details already exist, you can login to your account";
			} else { 
				$query_insert = "INSERT INTO vendors (id, name, email, company_name, company_address, password, phone_number)  VALUES('','$fname', '$email', '$companyname', '$address', '$password','$pnum')";
				$query_insert_run = mysqli_query($conn, $query_insert);

				if ($query_insert_run) {
					echo "successful";//header('location:index.php');
				} else {
					echo "<script> alert('Application is unsuccessful!')</script>";
				}
			}
		}
	}
	
	

	if(isset($_POST['signin'])){
		$email 		= 	checkInput($_POST['email']);
		$password 	= 	md5(checkInput($_POST['password']));

		if (!empty($email) && !empty($password)) {
			
			$query = "SELECT * FROM vendors WHERE email = '$email' AND password = '$password'";
			$query_run = mysqli_query($conn, $query);

			if (mysqli_num_rows($query_run) == 1) {
				while ($query_row = mysqli_fetch_array($query_run)) {
					$_SESSION['fname'] 	 = strtoupper($query_row['name']);
					$_SESSION['email'] 	 = $query_row['email'];
					$_SESSION['pnum']	 = $query_row['phone_number'];
					$_SESSION['id']		 = $query_row['id'];
				}	
				header('location:welcome.php');

			} else {
				echo "Invalid login credentials";
			}
		} else {
			echo "Please enter your login credentials";
		}
	}

	function checkInput($userinput) {
	 	$userinput = trim($userinput);
	 	$userinput = stripslashes($userinput);
	 	$userinput = htmlspecialchars($userinput);
	 	return $userinput;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!--font-awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="signin.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<div class="login-wrap my-5">
	<div class="login-html">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Email</label>
						<input id="email" type="email" class="input form-control-sm" name="email">
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input form-control-sm" name="password">
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check">
						<label for="check"><span class="icon"></span> Remember password</label>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign In" name="signin">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</div>
		</form>
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="regForm" onsubmit="return validateForm()">
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Fullname</label>
						<input id="user" type="text" class="input form-control-sm" name="fname" placeholder="enter full name">
						<span class="text-danger" id="fnameErr"> </span>
					</div>
					<div class="group">
						<label for="pass" class="label">Email</label>
						<input id="pass" type="email" class="input form-control-sm" name="email">
						<span class="text-danger" id="emailErr"> </span>
					</div>
					<div class="group">
						<label for="pass" class="label">Company Name</label>
						<input id="pass" type="text" class="input form-control-sm" name="companyname">
						<span class="text-danger" id="compnameErr"> </span>
					</div>
					<div class="group">
						<label for="pass" class="label">Company Address</label>
						<input id="pass" type="text" class="input form-control-sm" name="address">
						<span class="text-danger" id="addressErr"> </span>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input form-control-sm" name="password">
						<span class="text-danger" id="passwordErr"> </span>
					</div>
					<div class="group">
						<label for="pass" class="label">Phone Number</label>
						<input id="pass" type="text" class="input form-control-sm" name="pnum">
						<span class="text-danger" id="pnumErr"> </span>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign Up" name="signup">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1">Already a Member?</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="validate.js"></script>
</body>
</html>