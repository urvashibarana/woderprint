<?php


if( empty(session_id()) && !headers_sent()){
    session_start();
}?>
<!DOCTYPE html>
<html lang="en">

<!-- Footer Start -->
 <div class="container-fluid bg-dark bg-footer text-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-5">
                    <h4 class="text" style="color: var(--primary);">Get In Touch</h4>
                    <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                    <h5 class="mb-4" style="color: var(--primary);">Wonderprint</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-secondary me-3"></i>26,1st Floor,Matrushree Complex,Above Central Bank,Joravarnagar</p>
                    <p class="mb-2"><i class="fa fa-envelope text-secondary me-3"></i>wonderprint@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-secondary me-3"></i>95674 89012</p>
                </div>
                <div class="col-lg-7 col-md-7">
                    <h4 class="" style="color: var(--primary);">Quick Links</h4>
                    <hr class="w-25 text-secondary mb-4" style="opacity: 1;">
                    <div class="d-flex flex-column justify-content-start">
                       
                        <?php
                        if(isset($_SESSION['user_id']))
                        {
                          ?>  
                          <a class="text-light mb-2" href="rhome.php"><i class="fa fa-angle-right me-2"></i>Home</a>
                          <a class="text-light mb-2" href="about.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
                          <a class="text-light mb-2" href="contact.php"><i class="fa fa-angle-right me-2"></i>Contact</a>
                          <a class="text-light mb-2" href="r_view_printing_cat.php"><i class="fa fa-angle-right me-2"></i>Shop</a>
                        <a class="text-light mb-2" href="feedback.php"><i class="fa fa-angle-right me-2"></i>Feedback</a>
                        <a class="text-light mb-2" href="logout.php"><i class="fa fa-angle-right me-2"></i>Logout</a>
                      
                      
                      <?php 
                       }
                       else
                       {
                        ?>
                       
                        <a class="text-light mb-2" href="vhome.php"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="vabout.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="vcontact.php"><i class="fa fa-angle-right me-2"></i>Contact</a>
                        <a class="text-light mb-2" href="v_view_printing_cat.php"><i class="fa fa-angle-right me-2"></i>Shop</a>
                        <a class="text-light mb-2" href="user_registration.php"><i class="fa fa-angle-right me-2"></i>Register</a>
                        <a class="text-light mb-2" href="login.php"><i class="fa fa-angle-right me-2"></i>Login</a>
                      
                       <?php
                       }
                       ?>
                       
                        
                </div>
                    </div>
                    </div> 
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-dark py-4">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">Copyright &copy; <a class="text-dark fw-bold" href="#">Wonderprint</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-dark fw-bold" href="https://htmlcodex.com">Urvashiba Rana</a></p>
                </div>
            </div>
        </div>
    </div>    <!-- Footer End -->
                    </html>