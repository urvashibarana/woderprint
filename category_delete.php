<?php
include("connect.php");
$pc_id=$_GET['pc_id'];
$q="delete from printing_category where pc_id='$pc_id'";
mysqli_query($cn,$q);
header("location:category_view.php");