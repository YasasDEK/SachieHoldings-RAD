<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>RESERVATIONS</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>

                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->
<br><br>
<!--== Car List Area Start ==-->
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">
                    <center>Vehicle Pick Date</center>
                </th>
                <th scope="col">
                    <center>Vehicle Drop Date</center>
                </th>
                <th scope="col">
                    <center>Driver</center>
                </th>
                <th scope="col">
                    <center>Vehicle No.</center>
                </th>
                <th scope="col">
                    <center>Vehicle Type</center>
                </th>
                <th scope="col">
                    <center>EST. Cost</center>
                </th>
                <th scope="col">
                    <center>Total Cost</center>
                </th>
                <th scope="col">
                    <center>Status</center>
                </th>
                <th scope="col">
                    <center>Optons</center>
                </th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($view as $view) : ?>
                <tr>
                    <th><?php echo date("Y-m-d", strtotime($view['resPick'])); ?></th>
                    <td><?php echo date("Y-m-d", strtotime($view['resDrop'])); ?></td>
                    <td><?php echo $view['drvFirstName']; ?> <?php echo $view['drvLastName']; ?></td>
                    <td><?php echo $view['vhRegNo']; ?></td>
                    <td><?php echo $view['tyName']; ?></td>
                    <td><?php echo $view['estCost']; ?></td>
                    <td><?php echo $view['cost']; ?></td>
                    <td><?php echo $view['status']; ?></td>
                    <td>
                        <?php if ($view['status'] == "Pending"){ ?>
                            <?php echo form_open('ReservationController/delete/' . $view['resID']); ?>
                            <button type="button" onClick="confSubmit(this.form);" class="btn btn-danger" style="width:80px;">Delete</button>
                            </form>
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<!--== Scroll Top Area Start ==-->
<div class="scroll-top">
    <img src="<?php echo base_url(); ?>assets/img/scroll-top.png" alt="JSOFT">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!--=== Gijgo Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/gijgo.js"></script>
<!--=== Vegas Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/vegas.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/isotope.min.js"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/owl.carousel.min.js"></script>
<!--=== Waypoint Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/waypoints.min.js"></script>
<!--=== CounTotop Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/counterup.min.js"></script>
<!--=== YtPlayer Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/mb.YTPlayer.js"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/magnific-popup.min.js"></script>
<!--=== Slicknav Min Js ===-->
<script src="<?php echo base_url(); ?>assets/js/plugins/slicknav.min.js"></script>

<!--=== Mian Js ===-->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>