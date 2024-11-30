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
                        <form method="post" action="subcategory_add_code.php" enctype="multipart/form-data">
                            <div class="row g-3">
                            <div class="col-12 col-sm-12">
                                 <div class="col-12 col-sm-12">
                                    <h3 style="text-align:center;">ADD NEW SUBCATEGORY</h3>
                                </div>
                           
                                    <input type="text" class="form-control bg-light border-0" required placeholder="Enter subcategory_name" style="height: 55px;" name="sc_name">
                                </div>
                                
                               <div>
                                    
								
									<select name="pc_id" class="form-control bg-light border-0">

									<option value="select category">select category</option>

									<?php
									include("connect.php");
									$q="select * from printing_category";
									$res=mysqli_query($cn,$q);
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
                                
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="text">Add</button>
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