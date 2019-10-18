<?= base_url()?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <script src="https://use.fontawesome.com/2587f1bd41.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?= base_url()?>assets/favicon.ico" type="image/x-icon" />

    <title>Sachi Holdings-Car Rent</title>

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
    if(frm.emPassword.value == "")
    {
    alert("Enter the Password.");
    frm.emPassword.focus(); 
    return false;
    }
    if((frm.emPassword.value).length < 8)
    {
    alert("Password should be minimum 8 characters.");
    frm.emPassword.focus();
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
                        <h2>STAFF LOGIN</h2>
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
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Welcome Back!</h3>
                            <?php echo form_open('Emp_logcontroller/login_validation'); ?>
                            <form method="post" action="">
                                <div class="username">
                                    <input type="text" name="empNIC" placeholder="Username(NIC)" required>
                                    <span class="text-danger"><?php echo form_error('empNIC');?></span>
                                </div>
                                <div class="password">
                                    <input type="password" name="emPassword" placeholder="Password" required>
                                    <span class="text-danger"><?php echo form_error('emPassword');?></span>
                                </div>
                                <div class="log-btn">
                                    <button type="submit" name="insert" value="login"><i class="fa fa-sign-in"></i> Log In</button>
                                    <?php  
                                        echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';
                                    ?>
                                </div>
                            </form>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
                        
           

    
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