<head>
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

    

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>STAFF</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== profile Page Content Start ==-->
    <br>
    <h3><center>USER PROFILE</center></h3>

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
        <br>
        <thead>

                <tr>
                <td><b>Employee_Name</b></td>
                <td><?php echo $blog->empName; ?></td><br>
                </tr>    
                
                
                <tr>
                <td><b>NIC</b></td>
                <td><?php echo $blog->empNIC; ?></td>
                </tr>


                <tr>
                <td><b>Address</b></td>
                <td><?php echo $blog->empAddress; ?></td>
                </tr>


                <tr>
                <td><b>Contact_No</b></td>
                <td><?php echo $blog->empTelephone; ?></td>
                </tr>
                
                

                <tr>
                <td><b>Password</b></td>
                <td><?php echo $blog->emPassword; ?></td>
                </tr>

                

                

                <tr>
                <td><b>Image</b></td>
                <td><img src="<?php echo base_url('assets/img/team/').$blog->empPhoto; ?>" width=200 height=200></td>
                </tr>


        </thead>
        

        
        <tbody>
        
       <a href="http://[::1]/SYS/index.php/Emp_logcontroller">Log out</a>
        <?php
                }
            }
        ?>
        </tbody>


    </table>
    <a href="<?= site_url('Emp_showcontroller/update/').$blog->empNIC; ?>" class="btn btn-info">Edit</a>

    <a href="<?= site_url('Emp_showcontroller/delete/').$blog->empNIC; ?>" class="btn btn-danger">Delete</a>


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