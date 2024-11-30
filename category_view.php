<?php include ("aheader.php");?>
   <!-- Contact Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <!-- <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">View</h5> -->
                <h1 class="display-7 mb-0">Categories</h1>
				<hr class="w-25 mx-auto text-info" style="opacity: 1;">
            </div>
			
                                
            <div class="row g-12">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="rounded p-5 my-auto">
					
					<div class="col-10 col-sm-10 col-lg-4 col-md-4">
					<a href="category_add.php"><button class=" col-2 btn btn-sm btn-secondary w-50 btn-responsive" style="margin-bottom:12px;">ADD</button></a></div>
					<!-- <caption><center><big>View</big></center></caption>	 -->
					<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
					<tr>
					<th>Print category ID</th>
					<th>category Name</th>
					<th colspan=2>Action</th>
					</tr>
					
					<?php
					include("connect.php");
					$q="select * from printing_category";
					$res=mysqli_query($cn,$q);
					while($row=mysqli_fetch_assoc($res))
					{
					?>		
					
					<tr>
					<td><?php print $row['pc_id']; ?></td>
					<td><?php print $row['pc_name']; ?></td>
					<div class="btn-responsive">
					<td><a href="category_edit.php?pc_id=<?php print $row['pc_id'];?>" name="pc_id" class="btn btn-success py-2 mt-2 w-100 btn-responsive"><i class="fas fa-edit"></i>edit</a></td>
					<!-- <td><input type="button" class="btn btn-success" class="fas fa-edit" name="Edit" value="Edit"></td> -->
					<td><a href="category_delete.php?pc_id=<?php print $row['pc_id'];?>" name="pc_id" class="btn btn-danger py-2 mt-2 w-100 btn-resposive" onclick="return confirm('are you sure you want to delete this category')"><i class="fas fa-trash"></i>Delete</a></td>
					</div>
					</tr>
					<?php
					}
					?>
					</table>	
				</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact End -->
	
	
<?php include ("afooter.php");?>