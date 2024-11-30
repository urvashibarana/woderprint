<?php
include("connect.php");
$sc_id=$_POST['sc_id'];
$pc_id=$_POST['pc_id'];
$sc_name=$_POST['sc_name'];

$q3="update printing_subcategory set pc_id='$pc_id', sc_name='$sc_name' where sc_id='$sc_id'";


mysqli_query($cn,$q3);
//print $q3;


header("location:subcategory_view.php");

?>
 <!-- <textarea class="form-control bg-light border-0" rows="5" name="pp_description" value=><?php echo $row_ip['pp_description'];?></textarea> -->