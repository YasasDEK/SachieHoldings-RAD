<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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

</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?= base_url()?>assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> No: 177, Kandy Road, Pahala Imbulgoda, Sri Lanka
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> 0332 264 490 | 0332 264 485
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="<?= base_url()?>assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index2.html">Home 2</a></li>
                                        <li><a href="index3.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="#">Cars</a>
                                    <ul>
                                        <li><a href="car-left-sidebar.html">Car Left Sidebar</a></li>
                                        <li><a href="car-right-sidebar.html">Car Right Sidebar</a></li>
                                        <li><a href="car-without-sidebar.html">Car Without Sidebar</a></li>
                                        <li><a href="car-details.html">Car Details</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="index.html">Pages</a>
                                    <ul>
                                        <li><a href="package.html">Pricing</a></li>
                                        <li><a href="driver.html">Driver</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="help-desk.html">Help Desk</a></li>
                                        <li><a href="http://[::1]/group/index.php/Logcontroller">Log out</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="article.html">Blog Page</a></li>
                                        <li><a href="article-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Login</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Turning miles into smiles</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Admin Edit area ==-->
    <br>
    <center><h3>RATE THE TRIP</h3></center>
    <form action="<?php echo site_url('Ratecontroller/update') ?>" method="post" class="form-horizontal">
        
    <div class="form-group">
            <label for="firstname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                First Name : <input type="text" value="<?php //echo $blog->drvFirstName; ?>" placeholder="First name" name="drvFirstName" class="form-control" readonly>
            </div>
        </div>


        <div class="form-group">
            <label for="lastname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Last Name : <input type="text" value="<?php //echo $blog->drvLastName; ?>" placeholder="Last name" name="drvLastName" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="lastname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Trip ID : <input type="text" value="<?php //echo $blog->drvLastName; ?>" placeholder="Trip ID" name="tripID" class="form-control" readonly>
            </div>
        </div>
    

        <div class="form-group">
            <label for="lastname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                <form id="ratingsForm">
        
        <div class="stars">
            <b>Rate your trip</b><br>
            <input type="radio" name="star" class="star-1" id="star-1" />
            <label class="Poor" for="Poor">Poor</label><br>
            <input type="radio" name="star" class="star-2" id="star-2" />
            <label class="Bad" for="Bad">Bad</label><br>
            <input type="radio" name="star" class="star-3" id="star-3" />
            <label class="Average" for="Average">Average</label><br>
            <input type="radio" name="star" class="star-4" id="star-4" />
            <label class="Good" for="Good">Good</label><br>
            <input type="radio" name="star" class="star-5" id="star-5" />
            <label class="Excellent" for="Excellent">Excellent</label>
            <span></span>
       </div>
  
        </form>

            </div>
        </div>


        <div class="form-group">
            

    </form>

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