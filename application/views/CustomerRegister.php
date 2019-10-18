
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
                        <p>Sign up here and continue with your journey !!</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Signup Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <?php echo validation_errors('<div>','</div>');?>
                            <?php if(isset($_SESSION['userError'])){echo $_SESSION['userError'];}?>
                            <h3>Sign Up</h3>
                            <form action="registerValidation" method='post' onsubmit="signUpValidate()">
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="First Name" id="fName" name="fName" onfocus="this.value=''" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last Name" id="lName" name="lName" onfocus="this.value=''" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="DOB">
                                    <div>
                                        Date of Birth
                                    </div>
                                    <input type="Date" value="" id="dob" name="custDOB" onfocus="this.value=''" required>
                                </div>
                                <div class="NIC">
                                    <input type="text" placeholder="NIC" id="nic" name="custNIC" onfocus="this.value=''" required>
                                </div>
                                <div class="Licence">
                                    <input type="text" placeholder="Licence no" id="licence" name="custLicence" onfocus="this.value=''">
                                </div>
                                <div class="telephone">
                                    <input type="text" placeholder="Telephone" id="telephone" name="custTelephone" onfocus="this.value=''" required>
                                </div>

                                <div class="Address">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" placeholder="No" id="no" name="no" onfocus="this.value=''" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="Street" id="street" name="street" onfocus="this.value=''" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="City" id="city" name="city" onfocus="this.value=''" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="email">
                                    <input type="email" placeholder="Email" id="eMail" name="custEmail" onfocus="this.value=''">
                                </div>

                                <div class="password">
                                    <input type="password" placeholder="Password" id="pwd" name="pwd" onfocus="this.value=''" required>
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Confirm Password" id="pwdConfirm" name="custPassword" onfocus="this.value=''" required>
                                </div>

                                <div class="log-btn">
                                    <button type="submit" name="signUp"><i class="fa fa-check-square"></i> Sign Up</button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="create-ac">
                            <span class="or">or</span>
                            <p>Have an account? <a href="<?php echo base_url('index.php/CustomerMain/login');?>">Sign In</a></p>
                        </div>
                        <div class="login-menu">
                            <a href="about.html">About</a>
                            <span>|</span>
                            <a href="contact.html">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <img src="assets/img/logo.png" alt="JSOFT">
                                <p>Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Recent Posts</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="#">
                                           Hello Bangladesh! 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          Lorem ipsum dolor sit amet
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           Hello Bangladesh! 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            consectetur adipisicing elit?
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> 177, Kandy Road,Pahala-Imbulgoda,</li>
                                    <li>Sri Lanka</li>
                                    <li><i class="fa fa-mobile"></i> +94 77 035 8775</li>
                                    <li><i class="fa fa-envelope"></i> sarojudyama@gmail.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->
<!--=== Registration form validation ===-->
     <script src="<?php echo base_url();?>assets/js/Registration.js"></script>
    