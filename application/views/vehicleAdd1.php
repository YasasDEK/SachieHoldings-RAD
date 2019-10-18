<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Sachi Holdings- Car Rent</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?php echo base_url();?>assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?php echo base_url();?>assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?php echo base_url();?>assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?php echo base_url();?>assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?php echo base_url();?>assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?php echo base_url();?>assets/img/preloader.gif" alt="JSOFT">
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
                        <i class="fa fa-map-marker"></i> 177,Kandy Road,Pahala-Imbulgoda
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> 0770358775
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
                           
                            <a href="https://www.facebook.com/sachiholdings/"><i class="fa fa-facebook"></i></a>
                    
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
                            <img src="<?php echo base_url();?>assets/img/logo1.jpg" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="#">Home</a>
                                    
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="active"><a href="index.html">Add New</a>
                                    <ul>
                                        <li><a href="<?php echo site_url('Emp_regcontroller') ?>">Staff</a>
										<li><a href="<?php echo site_url('vehicleController/load') ?>">Vehicle</a>
										<li><a href="<?php echo site_url('Regcontroller') ?>">Driver</a>
										<li><a href="<?php echo site_url('TypeController/insert') ?>">Vehicle category</a>
                                    </ul>
                                </li>
                                
                                <li class="active"><a href="index.html">Manage</a>
                                    <ul>
                                        <li><a href="<?php echo site_url('Emp_showcontroller') ?>">Staff</a></li>
										<li><a href="<?php echo site_url('vehicleController/view') ?>">Vehicle</a></li>
										<li><a href="<?php echo site_url('Admincontroller') ?>">Drivers</a></li>
                                        <li><a href="<?php echo site_url('TypeController/displayData') ?>">Vehicle categories</a>
                                    </ul>
                                </li>
								<li class="active"><a href="index.html">Reports</a>
                                    <ul>
                                       <li><a href="<?php echo site_url('TypeController/displayReport') ?>">Reservations</a>
										
                                        
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>ADD NEW VEHICLE TYPE</h2>
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
                <div class="col-lg-6 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>New Type</h3>
							
							<?php echo form_open_multipart('vehicleController/insert');?>
							<form action="" method="">
								<div class="name">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="vType" class="minimal">
                                            <option selected disabled>Select Type</option>
                                            <?php foreach ($type as $type) : ?>
                                                <option value="<?php echo $type['tyID']; ?>"><?php echo $type['tyName']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">

                                        <input type="text" name="vNum" placeholder="Registration Number">
                                    </div>
                                </div>
                            </div>
                            <div class="insNumber">
                                <input type="text" name="vIns" placeholder="Insurance Number">
                            </div>
                            <div class="clr">
                                <input type="text" name="vName" placeholder="Model">
                            </div>
                            <div class="clr">
                                <input type="text" name="vColor" placeholder="Colour">
                            </div>
                            <div class="desc">
                                <textarea name="vDesc" placeholder="Description"></textarea>
                            </div>
                            <input class="input-file" id="my-file" type="file" name="vhPhoto">
                            <label tabindex="0" for="my-file" class="input-file-trigger"><b>Select a file...</b></label>
                            <p class="file-return"></p>

                            <div class="log-btn">
                                <button type="submit" name="upload" value="Upload"><i class="fa fa-check-square"></i> Register</button>
                            </div>
							<?php echo form_close(); ?>
							</form>
                		</div>
                		
                		
                		
                		
                	</div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
<div class="container">
        <h3>Vehicle Details</h3><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">
                        <center>Reg. No.</center>
                    </th>
                    <th scope="col">
                        <center>Type</center>
                    </th>
                    <th scope="col">
                        <center>Insurance No.</center>
                    </th>
                    <th scope="col">
                        <center>Name</center>
                    </th>
                    <th scope="col">
                        <center>Color</center>
                    </th>
                    <th scope="col">
                        <center>Description</center>
                    </th>
                    <th scope="col">
                        <center>Status</center>
                    </th>
                    <th scope="col" colspan="3">
                        <center>Options</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($view as $view) : ?>
                    <tr>
                        <th scope="row"><?php echo $view['vhRegNo']; ?></th>
                        <td><?php echo $view['tyName']; ?></td>
                        <td><?php echo $view['vhInsurance']; ?></td>
                        <td><?php echo $view['vhName']; ?></td>
                        <td><?php echo $view['vhColor']; ?></td>
                        <td><?php echo $view['vhDescription']; ?></td>
                        <td><?php echo $view['vhStatus']; ?></td>
                        <td>
                            <form action="<?php echo base_url() ?>insertController/viewIMG/<?php echo $view['vhPhoto'] ?> " target="_blank">
                                <button type="submit" class="btn btn-success" style="width:80px;">Image</button>
                            </form>
                        </td>
                        <td>
                            <form action="<?php echo base_url() ?>insertController/updateLoad/<?php echo $view['vhRegNo']; ?> ">
                                <button type="submit" class="btn btn-warning" style="width:80px;">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="<?php echo base_url() ?>insertController/delete/<?php echo $view['vhRegNo']; ?>">
                                <button type="button" onClick="confSubmit(this.form);" class="btn btn-danger" style="width:80px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="<?php echo base_url();?>assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?php echo base_url();?>assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>