<?php include("vheader.php");?>
<!DOCTYPE html>
<html lang="en">

    <!-- Navbar End -->


    <!-- Hero Start -->
    <div>

<!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
        <div class="container py-4">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h6 class="display-1 text-dark">We Believe in Best Quality,Service & Perfection..</h6>
					<!--<h1 class="fs-4 text-dark mb-4">We Belive in Best Quality,Service & Perfection..</h1>-->
                    <p class="fs-4 text-dark mb-4">The Last Stop Of Printing Solution...</p>
					
					
					
                </div>
            </div>
        </div>
    </div>
   
</div>
 <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5 border border-5 border-teal">
        <div class="container">
            <h3>New arrivals:</h3>
        <!-- <div class="row justify-content-center"> -->
         <div class="row gy-3 my-3">
                    <?php
					include("connect.php");
                    // $sc_id=$_GET['sc_id'];
                
                    //     $_SESSION['sc_id']=$sc_id;
		
					$q="(SELECT * FROM printing_products ORDER BY pp_id DESC LIMIT 8)ORDER BY pp_id ASC;";
					$res=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($res))
					{
                        			?>		
					 <!-- <input type="hidden" value=<?php //print $sc_id?> name="sc_id"> -->
            <div class="col-sm-6 col-lg-3 col-sm-3 col-xs-6" id="card1">                         <!--col-md-3 pb-3-->
                
                <div class="card" id="animation">
                <a href="vproduct_detail.php?pp_id=<?php print $row['pp_id'];?>" name="pp_id" id="a"><img src="<?php echo $row['pp_image'];?>" class="card-img-top" name="pp_image" alt="not found" width=260px height=230px></a>
                    <div class="card-body">
                    <!-- <input type="text" echo $row" print $pp_id;?>" name="pp_id"> -->
        
                    <h5 class="card-title text-center" name="pp_name"><?php echo $row['pp_name'];?></h5>
                       
                        <h5 class="text-center" name="pp_price">₹<?php echo $row['pp_price'];?></h5>
                      
                    </div>
                    <div class="btn">
                     <!-- 1111 -->
                     <a href="vproduct_detail.php?pp_id=<?php print $row['pp_id'];?>" name="pp_id" id="a"><button class="btn" id="view" style="width:100%;">View<i class="fa fa-shopping-cart"></i></a></button>
                    </div>
                </div>
            </div>
            <?php }?>
            
          

    </div>
 </div>
     </div>
    </div>
    <!-- About End -->
    <div class="container-fluid py-5">
        <div class="container py-5 border border-5 border-teal">
        <div class="container">
            <h3>Best Seller:</h3>
        <!-- <div class="row justify-content-center"> -->
         <div class="row gy-3 my-3">
                    <?php
					include("connect.php");
                    // $sc_id=$_GET['sc_id'];
                
                    //     $_SESSION['sc_id']=$sc_id;
		
					$q_random="SELECT * FROM printing_products ORDER BY RAND() LIMIT 8;";
					$res_random=mysqli_query($cn,$q_random);
					while($row4=mysqli_fetch_array($res_random))
					{
                        			?>		
					 <!-- <input type="hidden" value=<?php //print $sc_id?> name="sc_id"> -->
            <div class="col-sm-6 col-lg-3 col-sm-3 col-xs-6" id="card1">                         <!--col-md-3 pb-3-->
                
                <div class="card" id="animation">
                <a href="vproduct_detail.php?pp_id=<?php print $row4['pp_id'];?>" name="pp_id" id="a"><img src="<?php echo $row4['pp_image'];?>" class="card-img-top" name="pp_image" alt="not found" width=260px height=230px></a>
                    <div class="card-body">
                    <!-- <input type="text" echo $row" print $pp_id;?>" name="pp_id"> -->
        
                    <h5 class="card-title text-center" name="pp_name"><?php echo $row4['pp_name'];?></h5>
                       
                        <h5 class="text-center" name="pp_price">₹<?php echo $row4['pp_price'];?></h5>
                        
                    </div>
                    <div class="btn">
                     <!-- 1111 -->
                     <a href="vproduct_detail.php?pp_id=<?php print $row4['pp_id'];?>" name="pp_id" id="a"><button class="btn" id="view" style="width:100%;">View<i class="fa fa-shopping-cart"></i></a></button>
                    </div>
                </div>
            </div>
            <?php }?>
    </div>
 </div>
     </div>
    </div>
   <?php include("footer.php");?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>