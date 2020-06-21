<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/wallpaper-162x122.jpeg" type="image/x-icon">
  <meta name="description" content="Advance Genuine Agency for all DSTV Subscriptions, DSTV, OVD, Solar Systems Accesories, Installation and Maintanance. Thanks for visiting us, Please Call Again!
#GraceTech">
  
  <title>Update Orders</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-rM7SRoEw1W" once="menu" id="menu1-1u">

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
                    <a href="index.html">
                         <img src="assets/images/wallpaper-162x122.jpeg" alt="AGA" title="Advance Genuene Agency" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html">HOME</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.co" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbrib-setting3 mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Services
                    </a><div class="dropdown-menu"><div class="dropdown"><a class="text-white dropdown-item dropdown-toggle display-4" href="https://mobirise.co" data-toggle="dropdown-submenu" aria-expanded="false">DsTV Subs</a><div class="dropdown-menu dropdown-submenu"><a class="text-white dropdown-item display-4" href="dstv_subs.html#features18-1f">Zim Subs</a><a class="text-white dropdown-item display-4" href="dstv_subs.html#features18-1h" aria-expanded="false">SA Subs</a></div></div><a class="text-white dropdown-item display-4" href="installations.html" aria-expanded="false">CCTV</a><a class="text-white dropdown-item display-4" href="installations.html" aria-expanded="false">Cash Remit</a></div>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="accessories.html"><span class="mbri-devices mbr-iconfont mbr-iconfont-btn"></span>
                        Accessories</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.co">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"><br></span>
                        About Us
                    </a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="https://wa.me/+263774294131"><span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>
                    
                    DM</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/e">make your own website for free</a></section>
<section class="section-table cid-rMp1amXXlI" id="table1-1w">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Order List</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">In browser click on the table head to sort the table, use search to filter the table.     
      </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
            <th class="head-item mbr-fonts-style display-7">ID</th>
            <th class="head-item mbr-fonts-style display-7">DATE</th>
            <th class="head-item mbr-fonts-style display-7">FIRST NAME</th>
            <th class="head-item mbr-fonts-style display-7">SURNAME</th>
            <th class="head-item mbr-fonts-style display-7">EMAIL</th>
            <th class="head-item mbr-fonts-style display-7">CELL NUMBER</th>
            <th class="head-item mbr-fonts-style display-7">ADDRESS</th>
            <th class="head-item mbr-fonts-style display-7">SERVICE</th>
            <th class="head-item mbr-fonts-style display-7">STATUS</th>
            </tr>
            </thead>

            <tbody>        
            <?php
                include("includes/db.php");
                $get_order="SELECT * FROM orders";
                $run_order=mysqli_query($con,$get_order);
                $i=0;
                while($row_order=mysqli_fetch_array($run_order)){
                    
                    $dentry=$row_order['dentry'];
                    $fname=$row_order['fname'];
                    $lname=$row_order['lname'];
                    $email=$row_order['email'];
                    $cellnumber=$row_order['cellnumber'];
                    $current_address=$row_order['current_address'];
                    $service=$row_order['service'];
                    $status=$row_order['status'];
                    $i++
            ?>  
            <tr> 
             <td class="body-item mbr-fonts-style display-7"><?php echo $i; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $dentry; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $fname; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $lname; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $email; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $cellnumber; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $current_address; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $service; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $status; ?></td>
    
              </tr>
          <?php }; ?>    
     </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section once="footers" class="cid-rM82yKTFuq" id="footer7-1v">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Services</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7"><a href="sms:+263779317131">
                        Get In Touch
                    </a></li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Careers</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Work</a>
                    </li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2019 GraceTech - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>