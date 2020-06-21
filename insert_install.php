<?php
	include("includes/db.php");
    
    include("includes/db.php");
    session_start();
    if(!$_SESSION['$email']){
        echo '<script>alert("Login to access admin portal!")</script>';
        header("location: index.php");
        die;
    }


        

    $service= $price="";

	if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        
	$service=mysqli_real_escape_string ($con,$_POST['service']);
    $price=mysqli_real_escape_string ($con,$_POST['price']);
    //image name
    $image = $_FILES['product_img']['name'];
    //temp image
    $temp_name = $_FILES['product_img']['tmp_name'];
    
    if($service=='' OR $price=='' OR $image==''){
        echo "<script>alert('Please fill all the fields!')</script>";
        exit();
        }
     else {
    //uploading images to its folder
    move_uploaded_file($temp_name,"cat_images/$image");
    
 
	$sql="INSERT INTO  installation(service,price,product_img)VALUES('$service','$price','$image')";
	
	if($con->query($sql)==TRUE)
	{
	echo '<script> alert("Successful") </script>';
	}
	
    else
    {
        echo mysqli_error($con);
	}
	}}
?>
	

<!DOCTYPE html>
<html  >
<?php include("includes/header_admin.html"); ?>
<br>
<br>
<br>
<section class="mbr-section form1 cid-rMiBVJ8hFC" id="form1-1s">

    
<div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>
                    ADD INSTALLATION SERVICES
                </strong></h2>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
               
                <form action="" method="POST" enctype="multipart/form-data" class="mbr-form form-with-styler">
                    <div class="row">
                        
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-2"> <label for="service-form1-1s" class="form-control-label mbr-fonts-style display-7">Service</label>
                        </div>
                        <div class="col-md-10  form-group" data-for="service">
                            <select class="form-control display-7" name="service" data-form-field="service" required="required" class="form-control display-7" id="service">
                            <option>Select Service</option>
                            <option>DSTV</option>
                            <option>CCTV</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="dragArea row">
                        <div class="col-md-2">
                        <label for="product_img-form1-1s" class="form-control-label mbr-fonts-style display-7">service Image</label>
                        </div>
                        <div class="col-md-10  form-group" data-for="product_img">
                        <input type="file" name="product_img" data-form-field="product_img" required="required" class="form-control display-7" id="product_img">
                        </div></div>




                    <div class="dragArea row">
                        <div class="col-md-2">
                        <label for="price-form1-1s" class="form-control-label mbr-fonts-style display-7">Price</label>
                        </div>
                        <div class="col-md-10  input-group" data-for="price">
                            <span class="input-group-addon">R</span>
                            <input type="number" name="price" data-form-field="price" required="required" class="form-control display-7" id="price">
                        </div>
                       
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" class="btn btn-primary btn-form display-4">Save</button>
                        </div>
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
 </html>