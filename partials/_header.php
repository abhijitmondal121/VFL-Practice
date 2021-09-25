<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  <div>
  <button type="button" class="btn btn-success mx-1" data-toggle="modal" data-target="#loginModal">Login</button>
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signupModal">Signup</button>
     </div> -->
     <?php
     //include "_signupModal.php";
     //include "_loginModal.php";
     ?>
<!--</nav> -->
<?php
session_start();

echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 
  <a class="navbar-brand " href=""> <span style="margin-left:20px;font-size:18px;color:blue;">VF-L</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


     ';

     if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']=true){
        echo '
        <form class="form-inline my-2 " style="margin-left:78%;">
        <h5 class="text-light mx-3" >welcome-'. $_SESSION['name'].'</h5>
        <div>
        <a href="partials/_logout.php" class="btn btn-success mx-1" >logout</a>
        </div>
        ';
      }
    else{
        echo'
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
           <a class="nav-link" href="index.php"><span class="sr-only">(current)</span>Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="about.php">About</a>
        </li>
    
        <li class="nav-item">
         <a class="nav-link " href="contactus.php">Contactus</a>
        </li>
      </ul>
     <form class="form-inline my-2 my-lg-0">

        <div>
        <button type="button" class="btn btn-success mx-1" data-toggle="modal" data-target="#loginModal">Login</button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signupModal">Signup</button>
     </div> ';
    } 
     echo '
    </form>
  </div>
</nav>';
include "_signupModal.php";
include "_loginModal.php";
if(isset($_GET['signupsuccess'])&&$_GET['signupsuccess']=="true"){
    echo'<div class="alert alert-success alert-dismissible fade show my=0" role="alert">
    <strong>signup success fully</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}


?>