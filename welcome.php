<?php
	session_start();

	if(isset($_POST['submit'])){
		$proname 		= 	$_POST['proname'];
		$price 		= 	$_POST['price'];
		$image		= 	$_POST['image'];


		
		if (!empty($proname) && !empty($price) && !empty($image)) {
			
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
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome |</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body style="background-color: whitesmoke;">
	<div class="container">
		<h3 class="text-center lead display-4"> 
			<?php 
				if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
					echo "Welcome ". $_SESSION['fname']."<br>";
				}
			?>
		</h3>
	</div>
	<div class="container">
		<a href="logout.php" class="btn btn-outline-dark float-right">Logout</a>
	</div>
	<div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card my-5">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <div class="container py-5">
                        	<input type="hidden" name="vendorid" value="<?php echo $_SESSION['id'] ?>">
                            <div class="form-group">
                                <label for="proname" class="font-weight-bold">Product Name</label>
                                <input type="text" class="form-control form-control-sm" id="proname" name="proname" placeholder="Enter Product Name">                    
                            </div>
                            <div class="form-group">
                                <label for="price" class="font-weight-bold">Product Price</label>
                                <input type="text" class="form-control form-control-sm" id="price" name="price" placeholder="Enter price">                        
                            </div>
                            <div class="form-group">
                                <label for="password" class="font-weight-bold">Product Image</label>
                                <input type="file" class="form-control form-control-sm" name="image"placeholder="Upload image">        
                            </div>
                            <button class="btn btn-block btn-dark" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>