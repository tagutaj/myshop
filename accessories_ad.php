<!DOCTYPE html>
<html>
<?php include("includes/header.html"); ?>
    
<section class="section-table cid-rMp1amXXlI" id="table1-1w">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Accessories List</h2>
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
            <th class="head-item mbr-fonts-style display-7">CATEGORY</th>
            <th class="head-item mbr-fonts-style display-7">DEVICE</th>
            <th class="head-item mbr-fonts-style display-7">IMAGE</th>
            <th class="head-item mbr-fonts-style display-7">PRICE(Rands)</th>
            </tr>
            </thead>

            <tbody>        
            <?php
                include("includes/db.php");
                
                $get_trans="SELECT * FROM accessories";
                $run_trans=mysqli_query($con,$get_trans);
                $i=0;
                while($row_trans=mysqli_fetch_array($run_trans)){
                    
                    $dentry=$row_trans['dentry'];
                    $category=$row_trans['category'];
                    $device=$row_trans['device_name'];
                    $image=$row_trans['image'];
                    $price=$row_trans['price'];
                    $i++
            ?>  
            <tr>
             <td class="body-item mbr-fonts-style display-7"><?php echo $i; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $dentry; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $category; ?></td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $device; ?></td>
             <td class="body-item mbr-fonts-style display-7">
            <div class="card p-3 col-2 col-md-4 col-lg-8">
                <div class="card-wrapper ">
                <div class="card-img">
                <div class="mbr-overlay"></div>
                <div class="mbr-section-btn text-center"><a href="insert_order.php?category=<?php echo $category; ?>" class="btn btn-primary display-4"><strong>Click here to Order!</strong></a></div>
                <?php echo '<img src="accessories_images/'.$image.'" width=100 height=50'; ?>
                </div>
                    
                </div></div>  
                 
                </td>
             <td class="body-item mbr-fonts-style display-7"><?php echo $price; ?></td>
    
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