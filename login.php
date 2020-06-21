<?php
session_start();
include("includes/db.php");


if(isset($_POST['submit'])){
	//get values from login.php
	$email=$_POST['email'];
	$pass=$_POST['password'];
	//prevent mysql injection
	$email=stripcslashes($email);
	$pass=stripcslashes($pass);
	$email=mysqli_real_escape_string($con,$email);
	$pass=mysqli_real_escape_string($con,$pass);
	
	
	$sel_user="select * from users where email='$email' and password ='$pass'";
	
	$run_user= mysqli_query($con,$sel_user);
	$check_user=mysqli_num_rows($run_user);
	if($check_user ==1){
		$_SESSION['$email']=$email;
		header("location: admin_portal.php");
		
	}
	else{
		echo '<script> alert("Login Failed, Try Again") </script>';
        header("location: login.php");
	}
}

?>


<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/sample-photo-1-122x92.jpeg" type="image/x-icon">
  <meta name="description" content="Advance Genuine Agency for all DSTV Subscriptions, DSTV, OVD, Solar Systems Accesories, Installation and Maintanance. Thanks for visiting us, Please Call Again!
#GraceTech">
  
  <title>Login</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
</head>
<body>
  
<br>
<br>
<br>
    
    
<section class="mbr-section form1 cid-rMiBVJ8hFC" id="form1-1s">

<div class="container">
    <div class="row justify-content-center">
    <div class="title col-12 col-lg-8">
        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>
            ADMIN LOGIN
                </strong></h2>
        </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
            <form action="" method="POST" class="mbr-form form-with-styler">
            
            <div class="row">
            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
            </div>
                </div>
                    
            
            
                                
            <div class="dragArea row">
             <div class="col-md-2">
             <label for="email-form1-1s" class="form-control-labelstyle display-7">Username</label>
             </div>
             <div class="col-md-10  form-group" data-for="email">
            <input type="email" name="email" data-form-field="email" required="required" class="form-control display-7" id="email">
                </div>
                
            </div>
            
            <div class="dragArea row">
             <div class="col-md-2">
             <label for="password-form1-1s" class="form-control-labelstyle display-7">Password</label>
             </div>
             <div class="col-md-10  form-group" data-for="password">
            <input type="password" name="password" data-form-field="password" required="required" class="form-control display-7" id="password">
                </div>
                
            </div>
                       
            <div class="col-md-12 input-group-btn align-center">
            <a href="index.php"><strong>HOME</strong></a>
            <button type="submit" name="submit" class="btn btn-primary btn-form display-4"><span class="mbr-iconfont mbrib-login"></span>Login</button>
                </div>
                
                </form>
            </div>
        </div>
    </div>
</section>
