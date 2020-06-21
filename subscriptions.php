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

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          DStv Package List</h2>
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
            <th class="head-item mbr-fonts-style display-7">CATEGORIES</th>
            <th class="head-item mbr-fonts-style display-7">IMAGE</th>
            <th class="head-item mbr-fonts-style display-7">PRICE(Rands)</th>
            <th class="head-item mbr-fonts-style display-7"></th>
            <th class="head-item mbr-fonts-style display-7"></th>
            </tr>
            </thead>

            <tbody>        
            <?php
                include("includes/db.php");
                
                $get_trans="SELECT * FROM subscriptions";
                $run_trans=mysqli_query($con,$get_trans);
                $i=0;
                while($row_trans=mysqli_fetch_array($run_trans)){
                    
                    $dentry=$row_trans['dentry'];
                    $category=$row_trans['category'];
                    $image=$row_trans['product_img'];
                    $price=$row_trans['price'];
                    $i++
            ?>  
            <tr>
             <td class="body-item mbr-fonts-style display-7"><?php echo $i; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $dentry; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $category; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo '<img src="cat_images/'.$image.'" width=100 height=50'; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $price; ?></td>
            <td class="body-item mbr-fonts-style display-7" style="background-color: yellow;">
            <a href="edit_subs.php?id=<?php echo $row_trans['id']; ?>">Edit</a></td>
            <td class="body-item mbr-fonts-style display-7" style="background-color: red;"><a href="del_subs.php?id=<?php echo $row_trans['id']; ?>">Del</a></td>
    
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