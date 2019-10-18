
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Drivers</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                     
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

<br><br>
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

<center> 
    <table class="table table-bordered table-responsive">
        <br>
        <thead>
            <tr>
                <td><b>FIRST NAME</b></td>
                <th>LAST NAME</th>
                <th>DRIVER PHOTO</th>
                <th>Driver rate</th>
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
                <td><img src=<?php echo $blog->drvimg; ?>  width="50" height="50"></td>
                

            <?php if($blog->count!=NULL && $blog->count!=0){
                   echo '<td>' .$blog->sum/$blog->count. '</td>';
                }
                else{
                    echo '<td> Not rated yet </td>';   
                } 
                ?>
            </tr>
        <?php
                }
            }
        ?>
        </tbody>
    </table>
</center>
