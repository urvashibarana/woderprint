<?php include("aheader.php");


?>

<div>
    <link rel="stylesheet" href="css/style.css">
	 <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center position-relative" style="z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-primary p-5 m-5 mb-0">
                        <form method="post" action="subcategory_edit_code.php" enctype="multipart/form-data">
                            <div class="row g-3">
                            <div class="col-12 col-sm-12">
                                 <div class="col-12 col-sm-12">
                                    <h3 style="text-align:center;">UPDATE SUBCATEGORY</h3>
                                </div>
                                <?php
						$sc_id=$_GET['sc_id'];
					   include("connect.php");
						$q2="select * from printing_subcategory where sc_id='$sc_id'";
						$res_ip=mysqli_query($cn,$q2);
						
						if($row_ip=mysqli_fetch_array($res_ip))
						{
                            ?>
                           
                                    <input type="text" class="form-control bg-light border-0" style="height: 55px;" name="sc_name" value="<?php print $row_ip['sc_name'];?>">
                                    <input type="hidden" value="<?php print $sc_id;?>" name="sc_id">
	
                                </div>
                                
                              	
                                <select name="pc_id" class="form-control bg-light border-0">

                                

                                    <?php
                                    include("connect.php");
                                    $q1="select * from printing_category";
                                    $res=mysqli_query($cn,$q1);
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        ?>
                                        <option value="<?php print $row['pc_id'];?>"><?php
                                        print $row['pc_name'];?></option>

                                    <?php
                                    }
                                    ?>
                                    </select>

																		
								</div>
                                
                              
                                <?php
                        }
                                ?>
                                <div class="col-12">
                            <!-- <input type=submit class="btn btn-success py-2 mt-2 w-100" class="btn btn-danger py-2 mt-2 w-100"><i class="fas fa-trash"></i>Update</a> -->
                            <input type="submit" class="btn btn-success py-2 mt-2 w-100" value="Update"> 
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