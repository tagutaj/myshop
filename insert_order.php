<?php
	include("includes/db.php");
        
   $fname=$lname=$email=$cellnumber=$current_address="";
   $status="on";
    
   $serv=$_GET['category'];
    
	if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        
	$fname=mysqli_real_escape_string ($con,$_POST['fname']);
    $lname=mysqli_real_escape_string ($con,$_POST['lname']);
    $email=mysqli_real_escape_string ($con,$_POST['email']);
    $cellnumber=mysqli_real_escape_string ($con,$_POST['cellnumber']);
    $current_address=mysqli_real_escape_string ($con,$_POST['current_address']);
    $service=mysqli_real_escape_string ($con,$_POST['service']);
    $status='on';
 
	$sql="INSERT INTO  orders(fname,lname,email,cellnumber,current_address,service,status)VALUES('$fname','$lname','$email','$cellnumber','$current_address','$service','$status')";
	
	if($con->query($sql)==TRUE)
	{
	   echo '<script> alert("Successful") </script>';
	}
	
    else
    {
        echo mysqli_error($con);
	}
	}
?>
	

<!DOCTYPE html>
<html  >
<?php include("includes/header.html"); ?>
    
<br>
<br>
<br>
    
    
<section class="mbr-section form1 cid-rMiBVJ8hFC" id="form1-1s">

<div class="container">
    <div class="row justify-content-center">
    <div class="title col-12 col-lg-8">
        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>
            PERSONAL DETAILS
                </strong></h2>
        <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"><strong><u>
        NB</u>&nbsp;:</strong><em>Details to be used for following up on you only!</em></h3>
        </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-12" data-form-type="formoid">
            <form action="" method="POST" class="mbr-form form-with-styler">
            
            <div class="row">
            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
            </div>
                </div>
                    
            <div class="dragArea row">
             <div class="col-md-1">
             <label for="fname-form1-1s" class="form-control-labelstyle display-7">First Name</label>
             </div>
             <div class="col-md-3  form-group-sm" data-for="fname">
            <input type="text" name="fname" data-form-field="fname" required="required" class="form-control display-7" id="fname">
                </div>
                
            <div class="col-md-1">
            <label for="lname-form1-1s" class="form-control-label mbr-fonts-style display-7">Surname</label>
            </div>
            <div class="col-md-3  form-group" data-for="lname">
            <input type="text" name="lname" data-form-field="lname" required="required" class="form-control display-7" id="lname">
            </div>
                
             <div class="col-md-1">
             <label for="email-form1-1s" class="form-control-labelstyle display-7">Email</label>
             </div>
             <div class="col-md-3  form-group" data-for="email">
            <input type="email" name="email" data-form-field="email" required="required" class="form-control display-7" id="email">
                </div></div>
                
                                
            <div class="dragArea row">
             <div class="col-md-1">
             <label for="cellnumber-form1-1s" class="form-control-labelstyle display-7">Cell Number</label>
             </div>
             <div class="col-md-3  form-group-sm" data-for="cellnumber">
            <input type="text" name="cellnumber" data-form-field="cellnumber" placeholder="263779317131" required="required" class="form-control display-7" id="cellnumber">
                </div>
                
            <div class="col-md-1">
            <label for="current_address-form1-1s" class="form-control-label mbr-fonts-style display-7">Address</label>
            </div>
            <div class="col-md-3  form-group" data-for="current_address">
            <input type="text" name="current_address" data-form-field="current_address" required="required" class="form-control display-7" id="current_address">
            </div>
                
             <div class="col-md-1">
             <label for="service-form1-1s" class="form-control-labelstyle display-7">Service</label>
             </div>
             <div class="col-md-3  form-group" data-for="service">
            <input type="text" name="service" data-form-field="service" required="required" class="form-control display-7" id="service" value="<?php echo $serv ;?>" readonly>
            </div></div>
                       
            <div class="col-md-12 input-group-btn align-center">
            <button type="submit" class="btn btn-primary btn-form display-4">Save</button>
                </div>
                
                </form>
            </div>
        </div>
    </div>
</section>

<section once="footers" class="cid-rM82yKTFuq" id="footer7-1r">

    
<?php include("includes/footer.html"); ?>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>