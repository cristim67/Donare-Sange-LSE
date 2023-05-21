<?php 
 
 
    $emailus=$_SESSION["email"];


       $sql1_=$con->query("SELECT code FROM usertable WHERE email='$emailus'");

    if($sql1_->fetch_assoc()["code"]>0)
    
    {    
        header('location: user-otp.php');
    }
    
 ?>