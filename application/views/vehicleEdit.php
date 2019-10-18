

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>UPDATE VEHICLE</h2>
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
                            <h3>Update Vehicle : <?php echo $view['vhRegNo']; ?></h3>
                            <?php echo form_open_multipart('vehicleController/update/' . $view['vhRegNo']); ?>
                            <div class="name">
                                <select name="vType" class="minimal">
                                    <option selected disabled value="<?php echo $view['tyID']; ?>"><?php echo $view['tyName']; ?> </option>
                                    <?php foreach ($type as $type) : ?>
                                        <option value="<?php echo $type['tyID']; ?>"><?php echo $type['tyName']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="insNumber">
                                <input type="text" name="vIns" placeholder="Insurance Number : <?php echo $view['vhInsurance']; ?>">
                            </div>
                            <div class="clr">
                                <input type="text" name="vName" placeholder="Model : <?php echo $view['vhName']; ?>">
                            </div>
                            <div class="clr">
                                <input type="text" name="vColor" placeholder="Colour : <?php echo $view['vhColor']; ?>">
                            </div>
                            <div class="desc">
                                <textarea name="vDesc" placeholder="Description : <?php echo $view['vhDescription']; ?>"></textarea>
                            </div>
                            <input class="input-file" id="my-file" type="file" name="vhPhoto">
                            <label tabindex="0" for="my-file" class="input-file-trigger"><b>Select a file...</b></label>
                            <p class="file-return"></p>
                            <img src="<?php echo base_url() ?>assets/img/car/<?php echo $view['vhPhoto']; ?>" alt="vehicle image" height="420" width="420">

                            <div class="log-btn">
                                <button type="submit" name="upload" value="Upload"><i class="fa fa-check-square"></i> Update</button>
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