
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>UPDATE YOUR DETAILS</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Admin Edit area ==-->
        <br>
       
    <form action="<?php echo site_url('Showcontroller/update') ?>" method="post" class="form-horizontal">
        
    <div class="form-group">
            <label for="firstname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                First Name : <input type="text" value="<?php echo $blog->drvFirstName; ?>" placeholder="First name" name="drvFirstName" class="form-control" required>
            </div>
        </div>


        <div class="form-group">
            <label for="lastname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Last Name : <input type="text" value="<?php echo $blog->drvLastName; ?>" placeholder="Last name" name="drvLastName" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label for="id" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                NIC : <input type="text" value="<?php echo $blog->drvNIC; ?>" placeholder="NIC" name="drvNIC" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Email : <input type="password" value="<?php echo $blog->drvEmail; ?>" placeholder="Email" name="drvEmail" class="form-control" required> </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                DOB : <input type="text" value="<?php echo $blog->drvDOB; ?>" placeholder="DOB" name="drvDOB" class="form-control" required>
            </div>
        </div>
        
        <!--<div class="form-group">
            <label for="description" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                License photo : <input type="text" value="<?php //echo $blog->drvLicensePhoto; ?>" placeholder="license Photo" name="drvLicensePhoto" class="form-control" readonly>
            </div>
        </div>-->

        <!--<div class="form-group">
            <label for="description" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Driver Photo : <input type="text" value=" //echo $blog->drvimg; " placeholder="Photo" name="drvimg" class="form-control" readonly>
            </div>
        </div>-->

        <div class="form-group">
            <label for="description" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                License Number : <input type="text" value="<?php echo $blog->drvLicense; ?>" placeholder="License Number" name="drvLicense" class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Mobile : <input type="text" value="<?php echo $blog->drvMobile; ?>" placeholder="Moblile" name="drvMobile"class="form-control" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Land : <input type="text" value="<?php echo $blog->drvLAND; ?>" placeholder="LAND" name="drvLAND" class="form-control" required>
            </div>
        </div>

        
        <div class="form-group">
            <label class="col-md-1 text-right"></label>
            <div class="col-md-10">
                <input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
                <!--<a href="<?php //echo site_url('Viewbackcontroller/login_validation($blog->drvNIC,$blog->drvPassword)'); ?>" class="btn btn-default">Back</a>-->
            </div>
        </div>

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