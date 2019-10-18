

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>RREGISTER NEW EMPLOYEE</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto"> 
                    <div class="login-page-content">
                        <div class="login-form">
                            
                            
                            <?php
                              echo $error;  
                             ?>   
                            <?php echo form_open_multipart('Emp_regcontroller/submit'); ?>
                            <form action="" method="post" class="form-horizontal">
                                <!-- <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="empName" placeholder="empName" required>
                                        </div>
                                        
                                    </div>
                                </div> -->
                                <div class="username">
                                    <input type="text" name="empName" placeholder="empName" required>
                                </div>
                                <div class="username">
                                    <input type="text" name="empNIC" placeholder="empNIC" required>
                                </div>
                                
                                
                                <div class="username">
                                    <input type="text" name="empAddress" placeholder="empAddress" required>
                                </div>
                                
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="empTelephone" placeholder="empTelephone" required>
                                        </div>
                                        
                                    </div>
                                </div>

                               <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="password" id="emPassword" name="emPassword" placeholder="Password" required>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="checkbox" onclick="myFunction1()">Show Password
                                            <!--show password-->
                                            <script>
                                                function myFunction1() {
                                                    var x = document.getElementById("emPassword");
                                                    if (x.type === "password") {
                                                        x.type = "text";
                                                        } 
                                                    else {
                                                        x.type = "password";
                                                        }
                                                    }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            

                                
                                    

                                    <div class="photo">
                                    <input type="file" name="empPhoto" value="empPhoto" id="fileupload" required> <label for="fileupload">Add a photo of employee (Select a file to upload)</label>
                                </div>
                                
                                <!--<div class="password">
                                    <input type="text" name="empNIC" placeholder="Adimn NIC" required> 
                                </div>-->                                
                                <div class="log-btn">
                                    <input type="submit" value="Sign Up" name="submit" onclick="return val();><i class="fa fa-check-square"></i> 
                                
                                </div>
                            </form>
                        </div>
                        
                        <div class="login-other">
                            <span class="or">or</span>
                        </div>
                        <div class="create-ac">
                            <p>Have an account? <a href="http://[::1]/SYS/index.php/Emp_logcontroller">Log In</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

    

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="<?= base_url()?>assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?= base_url()?>assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="<?= base_url()?>assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="<?= base_url()?>assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?= base_url()?>assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="<?= base_url()?>assets/js/main.js"></script>

</body>

</html>