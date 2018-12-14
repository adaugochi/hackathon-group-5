<?php
?>
<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="css/bootstrap.min.css" />
</head>
<body>

  <div class="container">
        <form>
         
            <div class="col-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name"  placeholder="Name" required>
                 
                </div>
            </div> 
        <br>   
            <div class="col-6">
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="address" required>
                </div> 
            </div>    
        <br>
            <div class="col-6">   
                <div class="form-group">
                  <label for="phoneno">phone Number</label>
                  <input type="number" class="form-control" id="phoneno" placeholder="phone">
                </div>
            </div> 
        <br>    
                
              <button type="submit" class="btn btn-primary" name="order">Order</button>
    </form>
        
  </div>




  <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>  
</body>
</html>