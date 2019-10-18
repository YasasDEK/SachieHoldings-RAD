

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>DRIVER LIST</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->


    <!--== Admin view Area==-->
       

    <?php
        if($this->session->flashdata('success_msg')){
    ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success_msg'); ?>
        </div>
    <?php       
        }
    ?>


    <?php
        if($this->session->flashdata('error_msg')){
    ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('error_msg'); ?>
        </div>
    <?php       
        }
    ?>

    <table class="table table-bordered table-responsive">
        <br>
        <thead>
            <tr>
                <td><b>FIRST NAME</b></td>
                <th>LAST NAME</th>
                <th>NIC</th>
                <th>EMAIL</th>
                <th>DOB</th>
                <th>DRIVER PHOTO</th>
                <th>LICENSE NUMBER</th>
                <th>MOBILE</th>
                <th>LAND</th>
                <th>EMPLOYEE</th>
                
            </tr>
        </thead>
        <tbody>
        <?php 
            if($blogs){
                foreach($blogs as $blog){
        ?>
            <tr>
                <td><?php echo $blog->drvFirstName; ?></td>
                <td><?php echo $blog->drvLastName; ?></td>
                <td><?php echo $blog->drvNIC; ?></td>
                <td><?php echo $blog->drvEmail; ?></td>
                <td><?php echo $blog->drvDOB; ?></td>
                <td><img src=<?php echo $blog->drvimg; ?>  width="100" height="100"></td>
                <td><?php echo $blog->drvLicense; ?></td>
                <td><?php echo $blog->drvMobile; ?></td>
                <td><?php echo $blog->drvLAND; ?></td>
                <td><?php echo $blog->empNIC; ?></td>    
                <td>
                    <a href="<?php echo site_url('Admincontroller/edit/'.$blog->drvNIC); ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo site_url('Admincontroller/delete/'.$blog->drvNIC); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
                </td>
            </tr>
        <?php
                }
            }
        ?>
        </tbody>
    </table>

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