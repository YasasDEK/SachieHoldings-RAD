
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>PROFILE</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== profile Page Content Start ==-->
    

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
  <div class="container">
  <table class="table table-condensed">

         <?php 
            if($blogs){
                foreach($blogs as $blog){
        ?>
        
        <thead>

                <tr>
                <td><b>First Name</b></td>
                <td><?php echo $blog->drvFirstName; ?></td><br>
                </tr>    
                
                <tr>
                <td><b>Last Name</b></td>
                <td><?php echo $blog->drvLastName; ?></td>
                </tr>
                

                <tr>
                <td><b>NIC</b></td>
                <td><?php echo $blog->drvNIC; ?></td>
                </tr>
                
                <tr>
                <td><b>DOB</b></td>
                <td><?php echo $blog->drvDOB; ?></td>
                </tr>

                <tr>
                <td><b>ADDRESS</b></td>
                <td><?php echo $blog->drvAddress; ?></td>
                </tr>

                <tr>
                <td><b>MOBILE</b></td>
                <td><?php echo $blog->drvMobile; ?></td>
                </tr>

                <tr>
                <td><b>LAND</b></td>
                <td><?php echo $blog->drvLAND; ?></td>
                </tr>

                <tr>
                <td><b>EMAIL</b></td>
                <td><?php echo $blog->drvEmail; ?></td>
                </tr>

                <tr>
                <td><b>LICENSE</b></td>
                <td><?php echo $blog->drvLicense; ?></td>
                </tr>

                <tr>
                <td><b>RATE</b></td>
                <?php if($blog->count!=NULL && $blog->count!=0){
                   echo '<td>' .$blog->sum/$blog->count. '</td>';
                }
                else{
                    echo '<td> Not rated yet </td>';   
                } 
                ?>
                </tr>                

                <tr>
                <td><b>IMAGE</b></td>
                <td><img src=<?php echo $blog->drvimg; ?>  width="100" height="100"></td>
                </tr>

                <td><a href="<?php echo site_url('Showcontroller/trips/'.$blog->drvNIC); ?>" class="btn btn-info">REMAINING TRIPS</a></td><br>

                <td><a href="<?php echo site_url('Showcontroller/edit/'.$blog->drvNIC); ?>" class="btn btn-info">Edit</a></td>


        </thead>
        
        <tbody>
       
        <?php
                }
            }
        ?>
        </tbody>


    </table>
</div>
                        
           
    <br>
  
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