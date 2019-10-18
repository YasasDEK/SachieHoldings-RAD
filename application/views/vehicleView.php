<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>VEHICLES</h2>
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
                    <center>Reg. No.</center>
                </th>
                <th scope="col">
                    <center>Type</center>
                </th>
                <th scope="col">
                    <center>Insurance No.</center>
                </th>
                <th scope="col">
                    <center>Name</center>
                </th>
                <th scope="col">
                    <center>Color</center>
                </th>
                <th scope="col">
                    <center>Description</center>
                </th>
                <th scope="col">
                    <center>Status</center>
                </th>
                <th scope="col" colspan="3">
                    <center>Options</center>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($view as $view) : ?>
                <tr>
                    <th scope="row"><?php echo $view['vhRegNo']; ?></th>
                    <td><?php echo $view['tyName']; ?></td>
                    <td><?php echo $view['vhInsurance']; ?></td>
                    <td><?php echo $view['vhName']; ?></td>
                    <td><?php echo $view['vhColor']; ?></td>
                    <td><?php echo $view['vhDescription']; ?></td>
                    <td><?php echo $view['vhStatus']; ?></td>
                    <td>
                        <?php if ($view['vhPhoto'] != null && $view['vhStatus'] == "Active") { ?>
                            <?php $attributes = array('target' => '_blank'); ?>
                            <?php echo form_open('vehicleController/viewIMG/' . $view['vhPhoto'], $attributes); ?>
                            <button type="submit" class="btn btn-success" style="width:80px;">Image</button>
                            </form>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($view['vhStatus'] == "Active") { ?>
                            <?php echo form_open('vehicleController/updateLoad/' . $view['vhRegNo']); ?>
                            <button type="submit" class="btn btn-warning" style="width:80px;">Edit</button>
                            </form>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($view['vhStatus'] == "Active") { ?>
                            <?php echo form_open('vehicleController/delete/' . $view['vhRegNo']); ?>
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