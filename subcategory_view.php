<?php include ("aheader.php");?>
   <!-- Contact Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <!-- <h5 class="text-info text-uppercase" style="letter-spacing: 5px;">View</h5> -->
                <h1 class="display-7 mb-0">Subcategories</h1>
				<hr class="w-25 mx-auto text-info" style="opacity: 1;">
            </div>
			
                                
            <div class="row g-12">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="rounded p-5 my-auto">
					<div class="col-10 col-sm-10 col-lg-4 col-md-4">
					<a href="subcategory_add.php"><button class=" col-2 btn btn-sm btn-block btn-secondary w-50 btn-responsive" style="margin-bottom:12px;">ADD</button></a></div>
					<!-- <caption><center><big>View</big></center></caption>	 -->
					<div class="table-responsive">
					<table class="table table-bordered text-center">
					<tr>
					<th>Subcategory ID</th>
                    <th>Subcategory Name</th>
					<th>Category Name</th>
					<th colspan=2>Action</th>
					</tr>
					
                    
					<?php
					include("connect.php");
					$q="select * from printing_subcategory";
					$res1=mysqli_query($cn,$q);
					while($row1=mysqli_fetch_array($res1))
					{
					?>
                    <td><?php print $row1['sc_id'];?></td>
                	<td><?php print $row1['sc_name']; ?></td>
                <td>
				<?php

					$pc_id=$row1['pc_id']; 
					$q1="select * from printing_category where pc_id=$pc_id";
					$res=mysqli_query($cn,$q1);
				while($row=mysqli_fetch_array($res))
					{
					?>
					
					<?php print $row['pc_name'];?>
                    <?php }?>
					</td>
					<div class="btn-responsive">
					<td><a href="subcategory_edit.php?sc_id=<?php print $row1['sc_id'];?>" name="sc_id" class="btn btn-success py-2 mt-2 w-100 btn-responsive"><i class="fas fa-edit"></i>edit</a>
					<!-- <td><input type="button" class="btn btn-success" class="fas fa-edit" name="Edit" value="Edit"></td> -->
					<a href="subcategory_delete.php?sc_id=<?php print $row1['sc_id'];?>" name="sc_id" class="btn btn-danger py-2 mt-2 w-100 btn-resposive" onclick="return confirm('are you sure you want to delete this subcategory')"><i class="fas fa-trash"></i>Delete</a></td>
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