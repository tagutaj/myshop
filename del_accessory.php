<?php 
include("includes/db.php");
session_start();
if(!$_SESSION['$email']){
    echo '<script>alert("Login to access admin portal!")</script>';
    header("location: index.html");
    die;
}

$query="DELETE FROM accessories WHERE id='".$_GET['id']."'";
if(mysqli_query($con,$query)){
	echo "<script>open('accessories.php','_SELF')</script>";
}
else 
{
	echo "<script>alert('Deletion Failed!')</script>";	
}

?>