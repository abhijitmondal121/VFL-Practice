<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<?php
  include 'partials/_header.php';
  include 'partials/_dbconnect.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $ProductType=$_POST['Product-Type'];
    $ProductName=$_POST['Product-Name'];
    $ProductDetails=$_POST['Product-Details'];
    $Productprice=$_POST['Product-price'];
    $sql="INSERT INTO `admin` (`p_type`, `p_name`, `p_details`, `p_price`) VALUES ( '$ProductType', '$ProductName', '$ProductDetails', '$Productprice')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo'<div class="alert alert-success alert-dismissible fade show my=0" role="alert">
        <strong>iteam added success fully</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else{
    echo"error".mysqli_error($conn);
    }}
?>
  



    <div class="container mt-3 mb-5">
    <div class="car mb-3" >
       <h4 class="d-flex justify-content-center text-white bg-secondary text-light py-1  " style=" font-size:45px; border-radius: 10px;" >-:Welcome to Admin-login:-</h4>
       </div>       
    <form style="border:2px dashed black;padding:15px;  border-radius: 10px;" action="adminpanel.php" method="POST">
  <div class="mb-3">
    <label for="Product-Type" class="form-label">Product-Type</label>
    <input type="text" class="form-control" id="Product-Type" name="Product-Type" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="Product-Name" class="form-label">Product-Name</label>
    <input type="text" class="form-control" id="Product-Name" name="Product-Name" aria-describedby="emailHelp">
  </div>
  <div class="form-floating">
  <label for="Product-Details">Product-Details</label>
  <textarea class="form-control" placeholder="" id="Product-Details" name="Product-Details"></textarea>
</div>
  <div class="mb-3">
    <label for="Product-price" class="form-label">Product-price</label>
    <input type="number" class="form-control" id="Product-price" name="Product-price" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>




 <?php
   include 'partials/_footer.php';
  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>