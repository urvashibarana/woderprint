<!DOCTYPE html>
<html lang="en">
<?php include('vheader.php');?>
<head>
    <style>
        /* .card
{
    box-shadow:0px 2px 5px black;
    transition:transform 0.5s;
    cursor:pointer;
    /* width: 100%;
    height:auto;
     */

/*}
.card:hover
{
    transform:translateY(-15px);
} */

        </style>
</head>

<div class="container">
        <!-- <div class="row justify-content-center"> -->
         <div class="row gy-3 my-3">
                    <?php
					include("connect.php");
                    $sc_id=$_GET['sc_id'];
                
                        $_SESSION['sc_id']=$sc_id;
		
					$q="select * from printing_products where sc_id='$sc_id'";
					$res=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($res))
					{
                        			?>		
					 <input type="hidden" value=<?php print $sc_id?> name="sc_id">
            <div class="col-sm-6 col-lg-3 col-sm-3 col-xs-6" id="card1">                         <!--col-md-3 pb-3-->
                
                <div class="card" id="animation">
                <a href="vproduct_detail.php?pp_id=<?php print $row['pp_id'];?>&sc_id=<?php print $sc_id;?>" name="pp_id" id="a"><img src="<?php echo $row['pp_image'];?>" class="card-img-top" name="pp_image" alt="not found" width=270px height=270px></a>
                    <div class="card-body">
                    <!-- <input type="text" echo $row" print $pp_id;?>" name="pp_id"> -->
        
                    <h5 class="card-title text-center" name="pp_name"><?php echo $row['pp_name'];?></h5>
                        <!-- <p class="card-text" name="pp_description"><?php //echo $row['pp_description'];?></p> -->
                        <h5 class="text-center" name="pp_price">₹<?php echo $row['pp_price'];?></h5>
                        <!-- <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i> -->
                    </div>
                    <div class="btn">
                     <!-- 1111 -->
                     <a href="vproduct_detail.php?pp_id=<?php print $row['pp_id'];?>&sc_id=<?php print $sc_id;?>" name="pp_id" id="a"><button class="btn" id="view" style="width:100%;">View<i class="fa fa-shopping-cart"></i></a></button>
                    </div>
                </div>
            </div>
            <?php }?>
            
          

    </div>
 </div>
    <body>
        </html>
        <?php
include('footer.php');?>
     <!-- @media (max-width: 1199px) {
    .card.img-responsive {
        background-size: contain;
        width:100%;
        height:fixed;
        overflow:hidden;
    }
}
@media (max-width: 1403px) {
    img {
        background-size: contain;
        width:100%;
        height:fixed;
        overflow:hidden;
    }
}
@media (max-width: 820px) {
    .card.img-responsive {
        background-size: contain;
        width:100%;
        height:fixed;
        overflow:hidden;
        
    }
}*/
/* my area 
@media (max-width: 2643px) {
    img {
        background-size: contain;
        width:100%;
        height:fixed;
        overflow:hidden;
    }
} */
/* @media (min-width: 768px){
.col-md-3 {
    flex: 0 0 auto;
    width: 26%;
}}
@media (min-width: 967px){
.col-md-3 {
    flex: 0 0 auto;
    width: 27%;
}} */ -->
