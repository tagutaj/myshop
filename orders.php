<?php 
include("includes/db.php");
session_start();
if(!$_SESSION['$email']){
    echo '<script>alert("Login to access admin portal!")</script>';
    header("location: index.php");
    die;
}

?>
<!DOCTYPE html>
<html  >
<?php include("includes/header_admin.html"); ?>

<section class="section-table cid-rMp1amXXlI" id="table1-1w">

  
  
  <div class="container container-table col-12">
      
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
          <table class="table isSearch" cellpadding="0" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
            
            <th class="head-item mbr-fonts-style display-7">DATE</th>
            <th class="head-item mbr-fonts-style display-7">FIRST NAME</th>
            <th class="head-item mbr-fonts-style display-7">SURNAME</th>
            <th class="head-item mbr-fonts-style display-7">EMAIL</th>
            <th class="head-item mbr-fonts-style display-7">CELL NUMBER</th>
            <th class="head-item mbr-fonts-style display-7">ADDRESS</th>
            <th class="head-item mbr-fonts-style display-7">SERVICE</th>
            <th class="head-item mbr-fonts-style display-7">STATUS</th>
            <th class="head-item mbr-fonts-style display-7"></th>
            <th class="head-item mbr-fonts-style display-7"></th>
            
                  
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
             
             <td class="body-item mbr-fonts-style display-7"><?php echo $dentry; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $fname; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $lname; ?></td>
             <td class="body-item mbr-fonts-style display-7">
             <a href="mailto:<?php echo $email; ?>"> <?php echo $email; ?></a></td>
             <td class="body-item mbr-fonts-style display-7">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $cellnumber; ?>">
                 <?php echo $cellnumber; ?></a></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $current_address; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $service; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $status; ?></td>
             <td class="body-item mbr-fonts-style display-7" style="background-color: yellow;">
                 <a href="edit_order.php?id=<?php echo $row_order['id']; ?>">Edit </a></td>
            <td class="body-item mbr-fonts-style display-7" style="background-color: red;">
                 <a href="del_orders.php?id=<?php echo $row_order['id']; ?>">Del </a></td>
    
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

    
<?php include("includes/footer.html"); ?>
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
</html>