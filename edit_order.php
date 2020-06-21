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

  
  
  <div class="container container-table col-12 col-lg-12">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Update Order List</h2>
     
      <div class="table-wrapper">
        <div class="container">
         
        

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
            
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
                $key=$_GET['id'];
                
                $get_order="SELECT * FROM orders WHERE id=$key";
                $run_order=mysqli_query($con,$get_order);
                $i=0;
                while($row_order=mysqli_fetch_array($run_order)){
            
            echo "<tr><form action=edit_order.php method='post'></tr>";
            echo"<td><input type=text name=fname value='".$row_order['fname']."'></td>";
            echo"<td><input type=text name=lname value='".$row_order['lname']."'></td>";
            echo"<td><input type=email name=email value='".$row_order['email']."'></td>";
            echo"<td><input type=number name=cellnumber value='".$row_order['cellnumber']."'></td>";
            echo"<td><input type=text name=current_address value='".$row_order['current_address']."'></td>";
            echo"<td><input type=text name=service value='".$row_order['service']."'></td>";
            echo"<td><input type=text name=status value='".$row_order['status']."'></td>";
            echo "<td><input type=hidden  name=id value='".$row_order['id']."'></td>";
            echo "<td><input type=submit name=update ></td>";
            echo "</form></tr>";
            }
                
        if(isset($_POST['update'])){
        $sql=" UPDATE orders SET fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',cellnumber='$_POST[cellnumber]',current_address='$_POST[current_address]',service='$_POST[service]',status='$_POST[status]' WHERE id='$_POST[id]'";

        if(mysqli_query($con,$sql))
        {
        
        echo "<script>open('orders.php','_SELF')</script>";
        
        }
        else
        echo "<script>alert('Failed To Update!')</script>";
        }
        ?>
            
   
     </table>
        </div>
          </div></div></div>
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