
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>ADD NEW VEHICLE</h2>
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
                            <h3>Register New Vehicle</h3>
                            <font color="#0f14bc"><?= $msg ?></font>
                            <font color="red"><?php echo validation_errors(); ?></font>
                            <?php echo form_open_multipart('vehicleController/insert'); ?>
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

                                        <input type="text" name="vNum" placeholder="Registration Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="insNumber">
                                <input type="text" name="vIns" placeholder="Insurance Number" required>
                            </div>
                            <div class="clr">
                                <input type="text" name="vName" placeholder="Model" required>
                            </div>
                            <div class="clr">
                                <input type="text" name="vColor" placeholder="Colour" required>
                            </div>
                            <div class="desc">
                                <textarea name="vDesc" placeholder="Description" required></textarea>
                            </div>
                            <input class="input-file" id="my-file" type="file" name="vhPhoto">
                            <label tabindex="0" for="my-file" class="input-file-trigger"><b>Select a file...</b></label>
                            <p class="file-return"></p>

                            <div class="log-btn">
                                <button type="submit" name="upload" value="Upload"><i class="fa fa-check-square"></i> Register</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
   
  
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