<?php
    include 'db.php';

    if(isset($_POST['login'])){
        $username      =   $_POST['username'];
        $password      =   $_POST['password'];

        if (!empty($username) && !empty($password)) {
            
            $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) == 1) {
                header('location:adorder.php');
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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
</head>
<body style="background-color: whitesmoke">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card my-5">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <div class="container py-5">
                            <div class="form-group">
                                <label for="username" class="font-weight-bold">Username</label>
                                <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Enter username">                            
                            </div>
                            <div class="form-group">
                                <label for="password" class="font-weight-bold">Password</label>
                                <input type="password" class="form-control form-control-sm" name="password"  id="password" placeholder="Enter password">        
                            </div>
                            <button class="btn btn-block btn-dark" name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>