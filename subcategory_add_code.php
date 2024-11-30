<?php
include("connect.php");

$sc_name=$_POST['sc_name'];
$pc_id=$_POST['pc_id'];

$q="insert into printing_subcategory(pc_id,sc_name)values('$pc_id','$sc_name')";
//print $q;
mysqli_query($cn,$q);



header("location:subcategory_view.php");

?>