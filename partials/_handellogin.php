<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_name=$_POST['name'];
    $number=$_POST['number'];
    $sql="SELECT * FROM `users` WHERE `name`='$user_name'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$user_name;
            //echo "login".$user_name;
            header("Location:/com-pro/adminpanel.php?loginsuccess=true");
        }
           else{
               echo "unable to login";
           }
       
    
}
?>
    
