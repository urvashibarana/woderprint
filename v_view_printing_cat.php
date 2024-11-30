<?php include("vheader.php");?>
<!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Printing Products</h1>
                <hr class="w-25 mx-auto text-info" style="opacity: 1;">
            </div>
			 <div class="row gy-4 gx-3">
			<?php
                    include("connect.php");
                     $q1="select * from printing_category";
                     $res=mysqli_query($cn,$q1);
                     while($row=mysqli_fetch_array($res))
                      {
						  $pc_id=$row['pc_id'];
                     ?>
            
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
                        <div class="service-icon p-3">
                            <div><i></i></div>
                        </div>
                        <h3 class="mt-5" style="color:white;"><?php print ucfirst($row['pc_name']);?></h3>
                        <a class="btn shadow-none text-secondary" href="v_view_printing_subcat.php?pc_id=<?php print $pc_id;?>">View Detail<i></i></a>
                        
                      </div>
                </div>
          
			<?php
              }
            ?>
        </div>
		</div>
    </div>
    <!-- Services End -->
<?php include("footer.php");?>
