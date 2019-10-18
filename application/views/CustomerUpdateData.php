
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Update Your Details</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Update your profile and continue with your journey !!</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Signup Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <?php echo validation_errors('<div>','</div>');?>
                            <h3>Update Profile</h3>
                            <?php echo form_open_multipart('CustomerMain/update','onsubmit="updateValidate()"')?>
                            <!--<form action="update" method='post' onsubmit="updateValidate()">-->
                                <div class="name">
                                    <input type="text" placeholder="Your Name" id="custName" name="custName" value="<?php if(isset($_SESSION['custName'])){echo $_SESSION['custName'];}?>" onfocus="this.value=''" required>
                                </div>
                                <div class="DOB">
                                    <input type="text" name="date of birth" value="<?php if(isset($_SESSION['custDOB'])){echo $_SESSION['custDOB'];}?>" readonly="readonly">
                                    <input type="Date" id="dob" name="custDOB" onfocus=" this.value=''">
                                </div>
                                <div class="telephone">
                                    <input type="text" placeholder="Telephone" id="telephone" name="custTelephone" value="<?php if(isset($_SESSION['custTelephone'])){echo $_SESSION['custTelephone'];}?>" onfocus="this.value=''" required>
                                </div>

                                <div class="Address">
                                    <input type="text" placeholder="Adress" id="custAddress" name="custAddress" value="<?php if(isset($_SESSION['custAddress'])){echo $_SESSION['custAddress'];}?>" onfocus="this.value=''" required>
                                </div>

                                <div class="email">
                                    <input type="email" placeholder="Email" id="eMail" name="custEmail" value="<?php if(isset($_SESSION['custEmail'])){echo $_SESSION['custEmail'];}?>"onfocus="this.value=''">
                                </div>
                                <div>
                                <h3>Choose Profile Image</h3>
                            
                                <?php echo form_upload(['name'=>'userfile','value'=>'Save'])?>
                                <?php echo form_error('userfile','<div>','</div>')?>

                                <!--<?php //echo form_submit(['name'=>'submit','value'=>'Upload'])?>-->
                                </div>
                                <div class="log-btn">
                                    <button type="submit" name="update" value="Upload" onsubmit="updateValidate()"><i class="fa fa-check-square"></i> Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Update Page Content End ==-->

    <!--=== Update form validation ===-->
     <script src="<?php echo base_url().'assets/js/updateProfile.js';?>"></script>
    