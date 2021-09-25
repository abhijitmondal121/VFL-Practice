<?php
$showerror="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbconnect.php';
    $user_name=$_POST['name'];
    $user_number=$_POST['number'];
    

    $sql="SELECT * FROM `users` WHERE `name`='$user_name'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0){
        $showerror="email already exists";
        header("Location:/com-pro/index.php?signupsuccess=false");
    }
    else{
         $sql="INSERT INTO `users` ( `name`, `number`, `time`) VALUES ( '$user_name', '$user_number', current_timestamp());";
         $result=mysqli_query($conn,$sql);
         if($result){
                   $showalert=true;
                    header("Location:/com-pro/index.php?signupsuccess=true");
                }
    }
}

?>