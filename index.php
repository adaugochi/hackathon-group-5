<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Louvre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="css/bootstrap.min.css" />
    <link rel="stylesheet"  href="index.css" />
    <!--font-awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        / styling the carousel /

.carousel{

height: 500px;

margin-bottom:60px;

}

.carousel-caption{

z-index: 10;

}

.carousel-item{

height: 500px;

background-color: #777;

}

.carousel-inner>.item>.img{

position: absolute;

top:0;

left:0;

min-width: 100%;

height: 500px;

}

/ styling the first section /

.features h3{

margin:10px;

}

h3:after{

width: 100px;

height: 2px;

background-color: #e67e22;

display: block;

content: "";

margin:0 auto;

margin-top:30px;

}
    </style>
</head>
<body>
       

<div class="container navigation">
   
        <div class="logo float-left">
            <img src="img/logo.jpg" alt="Sample image">

        </div>
        <nav class="navbar navbar-expand-sm bg-light float-right">
            <ul class="navbar-nav">
             <li class="nav-item">
                 <a href="">Home</a>
             </li>
             <li class="nav-item">
                <a href="">Admin</a>
             </li>
             <li class="nav-item">
                <a href="">Vendor</a>
             </li>
            </ul>
        </nav>
    </div>

</div>
<br>
<br>

<div id="firstcarouselslideonly" class="carousel slide" data-ride="carousel" >

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/slide1.jpg" alt="first slide">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="img/slide-2.jpg" alt="second slide">
        </div>
        
        <div class="carousel-item">
            <img class="d-block w-100" src="img/slide-3.jpg" alt="second slide">
        </div>
    </div>

</div>
<br>
<br>
<div class="text-center">
 <h3>
     ART WORKS
 </h3>
</div>
<div class="container mx-auto text-center">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img class="card-img-top" src="img/image-9.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Nike art gallery</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <a href="order.php" class="btn btn-primary">Order</a>
        
              </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="img/image-1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nike art gallery</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <a href="order.php" class="btn btn-primary">Order</a> 
                  </div>
                </div>
         </div>
         <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="img/image2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nike art gallery</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <a href="order.php" class="btn btn-primary">Order</a>
                  </div>
                </div>
        </div>

    </div>
    <br>
    <div class="row">
            <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="img/image3.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nike art gallery</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <a href="order.php" class="btn btn-primary">Order</a>
                      </div>
                    </div>
             </div>
             <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="img/image-4.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nike art gallery</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <a href="order.php" class="btn btn-primary">Order</a> 
                      </div>
                    </div>
            </div> 
            <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="img/image-5.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nike art gallery</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <a href="order.php" class="btn btn-primary">Order</a>
                      </div>
                    </div>
            </div>

    </div>

</div>
<br>
<div class="container-fluid text-center">
    <h1>QUOTE OF THE WEEK </h1>
    <div class="col-4 mx-auto">
     <p>Painting is concerned with all the 10 attributes of sight; which are:
         Darkness, Light, Solidity and Colour, Form and Position, 
         Distance and Propinquity, Motion and Rest.
     </p>
    </div> 

</div>
<br>
<div class="container-fluid text-center">
    <h1>ART OF THE WEEK</h1>
    <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="img/image-6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Nike Art Gallery</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <a href="order.php" class="btn btn-primary">Order</a>
                  </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="img/image-7.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nike art gallery</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <a href="order.php" class="btn btn-primary">Order</a>
                      </div>
                    </div>
            </div>
            <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="img/image8.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nike art gallery</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <a href="order.php" class="btn btn-primary">Order</a>
                      </div>
                    </div>
                </div>
            <div class="col-md-3 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="img/image-9.jpg" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Nike art gallery</h5>
                            <h6 class="card-subtitle mb-2 text-muted"></h6>
                            <a href="order.php" class="btn btn-primary">Order</a>
                          </div>
                        </div>
             </div>
    
    </div>



</div>
<br>
<?php include 'footer.php'; ?>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    
</body>
</html>