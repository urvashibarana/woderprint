<?php include("vheader.php");?>

<div class="container">
<div class="row">
<?php
    include("connect.php");
    $pp_id=$_GET['pp_id'];

    $q="select * from printing_products where pp_id='$pp_id'";
    $res=mysqli_query($cn,$q);
    if($row=mysqli_fetch_array($res))
	{
    ?>

<div class="col-md-4">
  <img width="300" height="300" src="<?php print $row['pp_image']; ?>"> 
</div>
<div class="col-md-8">
<div>Name: <?php print $row['pp_name']; ?></div>
<div>Detail: <?php print $row['pp_description']; ?></div>
<div>Price: <?php print $row['pp_price']; ?></div>
<div>Cost: <?php print $row['printing_cost']; ?></div>
<div class="col-12 col-sm-12">Custom your text here: <input type="text" class="form-control bg-light border-0"  style="height: 55px;"></div>
	
</div>
<?php }?>    

</div>
</div>

	
	
								

					

<?php include("footer.php");?>