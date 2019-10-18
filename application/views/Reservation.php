    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <font color="red"><?php echo validation_errors(); ?></font>
                            <?php echo form_open('ReservationController/insert/'.$pDate.'/'.$dDate); ?>
                            <!--== Pick Up Location ==-->
                            <div class="pickup-location book-item">
                                <h4>CHOOSE DRIVER:</h4>
                                <select name="resDrv" class="custom-select">
                                    <?php foreach ($driver as $driver) : ?>
                                        <option value="<?php echo $driver['drvNIC']; ?>"><?php echo $driver['drvFirstName']; ?> <?php echo $driver['drvLastName']; ?> | Rating : <?php if($driver['count']==0){echo "Not Rated";}else{echo $driver['sum']/$driver['count'];}?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!--== Pick Up Location ==-->
                            <!--== Car Choose ==-->
                            <div class="choose-car-type book-item">
                                <h4>CHOOSE CAR TYPE:</h4>
                                <select name="resType" class="custom-select">
                                <?php print_r($type); ?>
                                    <?php foreach ($type as $type) : ?>
                                        <option value="<?php echo $type['tyID']; ?>"><?php echo $type['tyName']; ?> : Cost ~ Rs: <?php echo round($type['estPrice']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!--== Car Choose ==-->

                            <div class="book-button text-center">
                                <button class="book-now-btn">Book Now</button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h1>BOOK A CAR TODAY!</h1>
                                    <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->
