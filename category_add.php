
<?php

include("connect.php");
if(isset($_POST['Add']))
{
$pc_name=$_POST['pc_name'];

$q="insert into printing_category(pc_name)values('$pc_name')";
//print $q;
$query=mysqli_query($cn,$q);
if($query)
{
  header('location:category_view.php');  
}
}


?>

<div>
<?php include("aheader.php");


?>
<link rel="stylesheet" href="css/style.css">
	 <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center position-relative" style="z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-primary p-5 m-5 mb-0">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                            <div class="col-12 col-sm-12">
                                 <div class="col-12 col-sm-12">
                                    <h3 style="text-align:center;">ADD NEW CATEGORY</h3>
                                </div>
                           
                                    <input type="text" class="form-control bg-light border-0" required placeholder="category_name" style="height: 55px;" name="pc_name">
                                </div>
                                
                            
                                
                                <div class="col-12">
                                    <!-- <button class="btn btn-secondary w-100 py-3" type="text">Add</button> -->
                                    <input type=submit name="Add" value="Add" class="btn btn-sm btm-lg btn-secondary w-100 py-3">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


 

</div>
<?php include("afooter.php");?>