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
  ?>



<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $Name=$_POST['name'];
    $address=$_POST['address'];
    $number=$_POST['number'];


    $sql="INSERT INTO `contactus` (`email`, `name`, `address`, `number`, `date`) VALUES ( '$email', '$Name', '$address', '$number', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo'<div class="alert alert-success alert-dismissible fade show my=0" role="alert">
        <strong>your details added success fully</strong> You will get call from our side!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else{
    echo"error".mysqli_error($conn);
    }}
?>
    
    <div class="container my-4">
    <div class="car" >
       <h4 class="d-flex justify-content-center text-white bg-secondary py-1  " style=" font-size:40px; border-radius: 10px;" >-:Welcome to Contact-Us:-</h4>
       </div>

    <form action="contactus.php" method="POST">
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Name">
  </div>
  <div class="form-floating">
  <label for="Product-Details">Address</label>
  <textarea class="form-control" placeholder="Address" id="Address" name="address"></textarea>
 </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone-Number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number" placeholder="Enter Number">
    
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>
</form>
    
    </div>


    <?php include 'partials/_footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>