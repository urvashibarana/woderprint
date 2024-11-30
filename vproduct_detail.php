<?php
 ob_start(); 

require('vheader.php');?>

<?php

include("connect.php");

if(isset($_POST['add_to_cart']))
{
header('location:login.php');
}



?>
<?php
if(isset($_POST['buy']))
{
    include("connect.php");
?>
<script language="javascript">
      alert('buy now');
    
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head></head>
<body>

<form method="post" action="" enctype="multipart/form-data">

<div class="row my-3">
  <div class="col-md-12 col-sm-12"><h2 id="myclass">customize your product</h2>
  </div></div>

  
<!-- <input type="text" name="custom" id="custom"> -->
  
  
  
   
<?php
    include("connect.php");
    $pp_id=$_GET['pp_id'];

    $q="select * from printing_products where pp_id='$pp_id'";
    $res=mysqli_query($cn,$q);
    if($row=mysqli_fetch_array($res))
					{
 
 ?>
 <input type="hidden" name="pp_image" value="<?php print $row['pp_image']; ?>">
<input type="hidden" name="pp_id" value="<?php print $row['pp_id']; ?>">
  
<div class="container product_data mt-3">
       <div class="row">
                        <div class="col-md-4">
                        <!-- <div class="d-flex align-items-center"> -->
                          <div class="shadow">
                <img src="<?php print $row['pp_image']; ?>" name="pp_image" alt="product image" class="w-75 d-flex align-items-center mx-auto">
                </div></div>
                <div class="col-md-8 ps-5">
               
                <h5 class="fw-bold mt-4"><?php print $row['pp_name'];?></h5>
                  <input type="hidden" name="pp_name" value="<?php print $row['pp_name'];?>">
  
                  <hr>
                  <h4>product description</h4>
                  <p><pre style="font-family: Verdana;"><?php print $row['pp_description'];?></pre></p>
                <div class="row">
                  <div class="col-md-6">
                    <h5>price:<i class="fa fa-rupee-sign">&nbsp</i><span class="text-success fw-bold fs-4"><?php print $row['pp_price'];?></span></h5>
                    <input type="hidden" name="pp_price" value="<?php print $row['pp_price'];?>">
                  </div></div>
                  <div class="row">
                  <div class="col-md-6">
                    <h5>printng_cost:<i class="fa fa-rupee-sign">&nbsp</i><span class="text-success fw-bold fs-4"><?php print $row['printing_cost'];?></span></h5>
                    <input type="hidden" name="printing_cost" value="<?php print $row['printing_cost'];?>"></div>
                    <div class="row">
                    <div class="col-md-6">Custom your text here: <input type="text" class="form-control w-75 p-2" name="print_text" required></div></div>
                  <div class="row">
                  <div class="col-md-6">Quantity:<input type="number" class="form-control w-75 p-2" style="height: 55px;" value="1" name="cart_qty" required></div></div>
  
                  </div>

                  <div class="row">
                  <div class="col-md-6">
                   
                   <input type=submit value="add_to_cart" name="add_to_cart" class="btn btn-success w-75 mt-3 mb-3"></div>    
                   </div>
                </div>
 
                  
                  </div>
                  
  <?php 
}
?> 
   </div>
   </div>
</div>                  
       
        
  


</form>
</body>



</html>
<!-- <script src="js/custom.js"></script>  -->
<?php
include('footer.php');?>