

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Types</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Service Page Content Start ==-->
    <section id="service-page-wrapper" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Services Start -->
					<?php foreach($records as $rec):?>
                    <div class="single-service-item">
					
                        <div class="service-item-thumb">
						<img src="<?= base_url().$rec->tyPhoto;?>" alt="Type photo">
						</div>
                        <div class="service-item-content">
							
								<?="<h3>". $rec->tyName. "</h3><p>Number of Passengers ". $rec->tyPassenger."</p><p>Rate ". $rec->tyDRate."</p><p>Weekly Rate ". $rec->tyWParcent."</p><p>monthly Rate ". $rec->tyMPercent."</p><p>Description ". $rec->tyDescription."<br>";?>
								
								<form action='deleteData' method='post'>
										<input type='hidden' value=<?=$rec->tyID;?> name='id'>
										<div class='delete-btn'>
										<button  onclick='delfun()' >Delete</button>
										<script>
										function delfun(){
											if(confirm('Sure want to delete?')){}
											else{event.preventDefault();}
										}
										</script>
										</div>
								</form>					
								<form action='updateDataSelect' method='post'>
										<input type='hidden' value=<?=$rec->tyID;?> name='id'>
										<div class='update-btn'>
										<button type='submit' >Update</button>
										</div>
								</form>
							
                         </div>   
                    </div>
					<?php endforeach;?>
                    <!-- Single Services End -->



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
