<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <script src="https://use.fontawesome.com/2587f1bd41.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?= base_url()?>assets/favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?= base_url()?>assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?= base_url()?>assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?= base_url()?>assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?= base_url()?>assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?= base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?= base_url()?>assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= base_url()?>style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?= base_url()?>assets/css/responsive.css" rel="stylesheet">
    
    <!--check password-->
    <script type="text/javascript">
    function val(){<?= base_url()?>
    if(frm.drvPassword.value == "")
    {
    alert("Enter the Password.");
    frm.drvPassword.focus(); 
    return false;
    }
    if((frm.drvPassword.value).length < 8)
    {
    alert("Password should be minimum 8 characters.");
    frm.drvPassword.focus();
    return false;
    }

    if(frm.drvCPass.value == "")
    {
    alert("Enter the Confirmation Password.");
    return false;
    }
    if(frm.drvCPass.value != frm.drvPassword.value)
    {
    alert("Password confirmation does not match.");
    return false;
    }

    return true;
    }
    </script>   

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>ADD NEW DRIVER</h2>
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
                            <h3>Register</h3>
                            
                            <?php
                              echo $error;  
                             ?> 
                             <div class="form-horizontal">
                            
                                <?php echo form_open_multipart('Regcontroller/submit'); ?>
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="drvFirstName" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="drvLastName" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="username">
                                    <input type="text" name="drvNIC" placeholder="NIC" required>
                                </div>
                                <div class="username">
                                    <input type="email" name="drvEmail" placeholder="Email" >
                                </div>
                                <div class="username">
                                    <input type="text" name="drvDOB" placeholder="Date of birth (yyyy-mm-dd)" required>
                                </div>
                                <div class="username">
                                    <input type="text" name="drvAddress" placeholder="Address" required>
                                </div>
                                <div class="username">
                                    <input type="text" name="drvLicense" placeholder="License number" required>
                                </div>
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="drvMobile" placeholder="Mobile" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="drvLAND" placeholder="Land">
                                        </div>
                                    </div>
                                </div>

                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="password" id="drvPassword" name="drvPassword" placeholder="Password" required>
                                        </div>
                                        <div class="col-md-6">
                                        <input type="checkbox" onclick="myFunction1()">Show Password
                                            <!--show password-->
                                            <script>
                                                function myFunction1() {
                                                    var x = document.getElementById("drvPassword");
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

                                <!--<div class="name">
                                    <div class="row">
                                        <div class="col-md-6">

                                    <input type="password" id="drvCPass" name="drvCPass" placeholder="Confirm password" required>
                                    


                                        </div>
                                        <div class="col-md-6">-->
                                        <!--<input type="checkbox" onclick="myFunction2()">Show Password-->
                                            <!--show password-->
                                            <!--<script>
                                                function myFunction2() {
                                                    var x = document.getElementById("drvCPass");
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
                                </div>-->    

                                    <div class="">
                                    <input type="file" name="drvimg" size="20" required> <label for="fileupload">Add a photo of driver's license (Select a file to upload)</label>
                                    </div>
                                
                                <!--<div class="">
                                    <input type="file" name="drvLicensePhoto" size="20" required> <label for="fileupload">Add a photo of driver's license (Select a file to upload)</label>
                                </div>-->

                                <div class="password">
                                    <input type="text" name="empNIC" placeholder="Adimn NIC" required> 
                                </div>                                
                                <div class="log-btn">
                                    <input type="submit" value="Sign Up" name="submit" onclick="return val();><i class="fa fa-check-square"></i> 
                                
                                </div>
                            </form>


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