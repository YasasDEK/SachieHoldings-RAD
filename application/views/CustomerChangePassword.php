
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Change</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Change your password and contue to be safe !!</p>
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
                            <h3>Update Profile</h3>
                            <form action="updatepassword" method='post' onsubmit="ConfirmPassword()">
                                <div class="password">
                                    <input type="password" placeholder="Password" id="pwd" name="pwd" onfocus="this.value=''" required>
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Confirm Password" id="pwdConfirm" name="custPassword" onfocus="this.value=''" required>
                                </div>
                                <div class="log-btn">
                                    <button type="submit" name="update"><i class="fa fa-check-square"></i> Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Update Page Content End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="<?php echo base_url();?>assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->
<!--=== Registration form validation ===-->
     <script src="<?php echo base_url();?>assets/js/updateProfile.js"></script>
    