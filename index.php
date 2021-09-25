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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://source.unsplash.com/user/erondu/2400x500" alt="First slide">
    </div>
    
  </div>
</div>


  <div class="container my-3" id="ques">
  <h2 class="text-center" style="font-size:50px;font-family:Times New Roman;font-weight:bold;">Welcome to vocal for local-catagory</h2>
  <div class="row mt-3 mb-5">

  <?php
    $sql="SELECT * FROM `admin`";
    $result= mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $id=$row['slno'];
      $ptype=$row['p_type'];
      $pname=$row['p_name'];
      $pdetails=$row['p_details'];
      $pprice=$row['p_price'];
      echo '  <div class="col-md-4 my-3">
      <div class="card" style="width: 15rem;">
      <img src="https://source.unsplash.com/500x400/?'. $pname.',coding" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">'. $pname.'</a></h5>
        <p class="card-text">'.substr($pdetails,0,20).'.......</p>
        <a href="a.php?subject='.$id.'"class="btn btn-success mx-1" >View details</a>
        </div>
      </div>
      </div>
    ';

    }
  ?>
    </div>
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