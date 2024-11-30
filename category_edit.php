
<?php
include("connect.php");
if(isset($_POST['Update']))
{
    $pc_id=$_POST['pc_id'];
    $pc_name=$_POST['pc_name'];
    
$q3="update printing_category set pc_name='$pc_name' where pc_id='$pc_id'";


mysqli_query($cn,$q3);
  header('location:category_view.php');  

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
                                    <h3 style="text-align:center;">UPDATE CATEGORY</h3>
                                </div>
                                <?php
						$pc_id=$_GET['pc_id'];
					   include("connect.php");
						$q2="select * from printing_category where pc_id=$pc_id";
						$res_ip=mysqli_query($cn,$q2);
						
						if($row_ip=mysqli_fetch_array($res_ip))
						{
                            ?>
                           
                                    <input type="text" class="form-control bg-light border-0" style="height: 55px;" name="pc_name" value="<?php print $row_ip['pc_name'];?>">
                                    <input type="hidden" value="<?php print $pc_id;?>" name="pc_id">
	
                                </div>
                                <?php
                        }
                                ?>
                                <div class="col-12">
                            <!-- <input type=submit class="btn btn-success py-2 mt-2 w-100" class="btn btn-danger py-2 mt-2 w-100"><i class="fas fa-trash"></i>Update</a> -->
                            <input type="submit" class="btn btn-success py-2 mt-2 w-100" name="Update" value="Update"> 
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