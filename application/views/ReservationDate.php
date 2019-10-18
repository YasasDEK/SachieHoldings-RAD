<!--== Slider Area Start ==-->
<section id="slider-area">
    <!--== slide Item One ==-->
    <div class="single-slide-item overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="book-a-car">
                        <font color="red"><?php echo validation_errors(); ?></font>
                        <?php echo form_open('ReservationController/getDate'); ?>
                        <!--== Pick Up Location ==-->

                        <!--== Pick Up Location ==-->

                        <!--== Pick Up Date ==-->
                        <div class="pick-up-date book-item">
                            <h4>PICK-UP DATE:</h4>
                            <input id="startDate" name="pDate" placeholder="Pick Up Date" />

                            <div class="return-car">
                                <h4>Return DATE:</h4>
                                <input id="endDate" name="dDate" placeholder="Return Date" />
                            </div>
                        </div>
                        <!--== Pick Up Location ==-->

                        <!--== Car Choose ==-->

                        <!--== Car Choose ==-->

                        <div class="book-button text-center">
                            <button type="submit" class="book-now-btn">Proceed</button>
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