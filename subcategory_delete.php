<?php
include("connect.php");
$sc_id=$_GET['sc_id'];
$q="delete from printing_subcategory where sc_id='$sc_id'";
mysqli_query($cn,$q);

header("location:subcategory_view.php");
?>