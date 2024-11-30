<?php include("vheader.php");

?>
<!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-5">Login</h1>
                <hr class="w-25 mx-auto text-info" style="opacity: 1;">
            </div>
            <div class="row justify-content-center position-relative" style="margin-top: 50px; z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-primary p-5 m-5 mb-0">
                        <form action="login_code.php" method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    
                                    <input type="text" class="form-control bg-light border-0" placeholder="Enter Username" style="height: 55px;" name="uname">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="password" class="form-control bg-light border-0" placeholder="Enter Password" style="height: 55px;" name="password">
                                </div>
								<div class="col-12 col-sm-12">
								<select name="utype" class="form-control bg-light border-0"  style="height: 55px;">
								<option value="select User">Select User</option>
								<option value="admin">Administrator</option>
								<option value="user">Register User</option>
								</select>
								</div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<?php include("footer.php");?>
