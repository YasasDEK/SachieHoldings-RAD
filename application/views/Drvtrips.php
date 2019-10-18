<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>REMAINING TRIPS</h2>
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


<?php
if ($this->session->flashdata('success_msg')) {
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
<?php
}
?>


<?php
if ($this->session->flashdata('error_msg')) {
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
<?php
}
?>
<div class="container">
    <table class="table table-condensed">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">
                            <center>Reservation</center>
                        </th>
                        <th scope="col">
                            <center>Customer</center>
                        </th>
                        <th scope="col">
                            <center>EST Cost</center>
                        </th>
                        <th scope="col">
                            <center>Pickup Date</center>
                        </th>
                        <th scope="col">
                            <center>Drop Off Date</center>
                        </th>
                        <th scope="col">
                            <Center>Options</center>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($blogs as $blog) :
                        ?>
                        <tr>
                            <?php if ($blog['drvNIC'] != NULL && $blog['drvNIC'] != 0) {
                                echo '<td scope="col">' . $blog['resID'] . '</td>';
                            }

                            ?>


                            <?php if ($blog['drvNIC'] != NULL && $blog['drvNIC'] != 0) {
                                echo '<td scope="col">' . $blog['custName'] . '</td>';
                            }

                            ?>


                            <?php if ($blog['drvNIC'] != NULL && $blog['drvNIC'] != 0) {
                                echo '<td scope="col">Rs. ' . $blog['estCost'] . '.00</td>';
                            }

                            ?>


                            <?php if ($blog['drvNIC'] != NULL && $blog['drvNIC'] != 0) {
                                echo '<td scope="col">' . date("Y-m-d", strtotime($blog['resPick'])) . '</td>';
                            }

                            ?>


                            <?php if ($blog['drvNIC'] != NULL && $blog['drvNIC'] != 0) {
                                echo '<td scope="col">' . date("Y-m-d", strtotime($blog['resPick'])) . '</td>';
                            }

                            ?>

                            <?php echo form_open('Showcontroller/statUpdate/' . $blog['resID'].'/'.$blog['drvNIC']); ?>
                            <?php echo "<td scope='col'><button type='submit' class='btn btn-success' style='width:80px';>Done</button> </td>" ?>
                            <?php echo "</form>" ?>
                        
                        </tr>



                    <?php
                    endforeach;

                    ?>

            </table>
        </div>


        </tbody>


    </table>
</div>


<br>

<!--== Scroll Top Area Start ==-->
<div class="scroll-top">
    <img src="<?= base_url() ?>assets/img/scroll-top.png" alt="JSOFT">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="<?= base_url() ?>assets/js/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!--=== Gijgo Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/gijgo.js"></script>
<!--=== Vegas Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/vegas.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/isotope.min.js"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/owl.carousel.min.js"></script>
<!--=== Waypoint Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/waypoints.min.js"></script>
<!--=== CounTotop Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/counterup.min.js"></script>
<!--=== YtPlayer Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/mb.YTPlayer.js"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/magnific-popup.min.js"></script>
<!--=== Slicknav Min Js ===-->
<script src="<?= base_url() ?>assets/js/plugins/slicknav.min.js"></script>

<!--=== Mian Js ===-->
<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>