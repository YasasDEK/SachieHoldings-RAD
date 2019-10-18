

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
							
							<?php echo form_open_multipart('TypeController/dataSend');?>
							<form action="" method="">
								<div class="tyName"> <p> Type Name </p>
									<input type="text" placeholder="Type Name" name="name" required>
								</div>
								<div class="tyPassenger"><p> No of Passengers </p>
									<input type="number" placeholder="No of Passengers" name="passenger" required>
								</div>
								<div class="tyRate"> <p> Rate </p>
									<input type="text" placeholder="Per Day Rate" name="dRate" required>
								</div>
								<div class="month/yearlyRate">
									<div class="row">
										<div class="col-md-6"><p> Monthly Rate </p>
											<input type="text" placeholder="Monthly Rate [0-1]" name="mRate" min="0" max="1" required>
										</div>
										<div class="col-md-6"><p> Weekly Rate </p>
											<input type="text" placeholder="Weekly Rate [0-1]" name="wRate" min="0" max="1" required>
										</div>
									</div>
								</div>
								<div class="tyDescription"><p> Description </p>
									<input type="text" placeholder="Description" name="description" required>
								</div>
								<div class="tyPhoto"><p> Upload Photo </p>
									<input type="file" placeholder="choose .jpg file" name="photo" required>
								</div>
								<div class="log-btn">
									<button type="submit" name="add" >Add</button>
									
								</div>
							</form>
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