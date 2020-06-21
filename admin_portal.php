<?php
session_start();    
include("includes/db.php");
    
if(!$_SESSION['$email']){
    echo '<script>alert("Login to access admin portal!")</script>';
    header("location: index.php");
    die;
}

$get_on="SELECT * FROM orders WHERE status='on'";
$run_on=mysqli_query($con,$get_on);
$counton=mysqli_num_rows($run_on);
$get_off="SELECT * FROM orders WHERE status='off'";
$run_off=mysqli_query($con,$get_off);                
$countoff=mysqli_num_rows($run_off);
                
?>  

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/wallpaper-162x122.jpeg" type="image/x-icon">
  <meta name="description" content="Advance Genuine Agency for all DSTV Subscriptions, DSTV, OVD, Solar Systems Accesories, Installation and Maintanance. Thanks for visiting us, Please Call Again!
#GraceTech">
  
  <title>admin</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rM7SRoEw1W" once="menu" id="menu1-1x">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                    <img src="assets/images/wallpaper-162x122.jpeg" alt="AGA" title="Advance Genuene Agency" style="height: 4.1rem;">

                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="">HOME</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
            <li class="nav-item"><a class="nav-link link text-white display-4" href="index.php"><span class="mbr-iconfont mbrib-logout"></span>Logout</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="https://wa.me/+263779317131"><span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>
            DM</a></div>
        </div>
    </nav>
</section>

<section class="header12 cid-rMtwxhJsBz mbr-fullscreen mbr-parallax-background" id="header12-22">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container  ">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1">WELCOME ADMIN!</h1>
                    <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5">
                        Adding subscriptions, accessories and viewing them from one portal!</p>
                    <div class="mbr-section-btn align-center py-2">
                    <a class="btn btn-md btn-primary display-4" href="insert_subs.php"><span class="mbri-plus mbr-iconfont mbr-iconfont-btn"></span>SUBSCRIPTIONS</a> 
                    <a class="btn btn-md btn-primary display-4" href="insert_accessory.php"><span class="mbri-plus mbr-iconfont mbr-iconfont-btn"></span>ACCESSORIES</a>
                    <a class="btn btn-md btn-primary display-4" href="insert_install.php"><span class="mbri-plus mbr-iconfont mbr-iconfont-btn"></span>INSTALLATION</a>
                    </div>

                    <div class="icons-media-container mbr-white">
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                            <a href="orders.php">
                                <span class="mbr-iconfont mbri-briefcase"></span>
                                <h5 class="mbr-fonts-style display-5">Placed Orders</h5>
                            </a>
                            </div>
                            
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="accessories.php">
                                    <span class="mbr-iconfont mbrib-image-gallery"></span>
                                    <h5 class="mbr-fonts-style display-5">Accessories</h5>
                                </a>
                            </div>
                            
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="subscriptions.php">
                                    <span class="mbri-cash mbr-iconfont"></span>
                                    <h5 class="mbr-fonts-style display-5">
                                Subcriptions</h5>
                                </a>
                            </div>
                            
                        </div>
                        
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="install.php">
                                    <span class="mbr-iconfont mbri-devices"></span>
                                    <h5 class="mbr-fonts-style display-5">
                                Installation</h5>
                                    
                                </a>
                            </div>
                            
                        </div>

                        
                    </div>
                </div>
            </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="counters1 counters cid-rMtvfrdUCe" id="counters1-1z">

    

    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            SUMMARY
        </h2>
        <h3 class="mbr-section-subtitle align-center mbr-fonts-style display-5">
           Click Icon to See Details!
        </h3>

        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="orders_uproc.php">
                            <span class="mbri-mobirise mbr-iconfont"></span>
                            </a>
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  <?php echo $counton; ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Unprocessed Orders
                            </h4>
                        </div>
                    </div>
                </div>
                
                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <a href="orders_uproc.php">
                            <span class="mbri-mobirise mbr-iconfont"></span>
                            </a>
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  <?php echo $countoff; ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Processed Orders
                            </h4>
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
   </div>
</section>


<section once="footers" class="cid-rM82yKTFuq" id="footer7-1y">
<?php include("includes/footer.html"); ?>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>