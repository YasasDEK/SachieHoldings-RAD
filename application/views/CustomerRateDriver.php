    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Rate Driver</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Give us your feedback and help to maintain a good service</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Admin Edit area ==-->
    <br>
    <center><h3>RATE THE TRIP</h3></center>

    <form action="addratingtodriver" method="post" class="form-horizontal">
        
        <div class="form-group">
            <label for="firstname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                First Name : <input type="text" value="<?php echo $firstname ;?>" name="drvFirstName" class="form-control" readonly>
            </div>
        </div>


        <div class="form-group">
            <label for="lastname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Last Name : <input type="text" value="<?php echo $lastname ;?>" class="form-control" name="dvrLastName"readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="lastname" class="col-md-1 text-right"></label>
            <div class="col-md-10">
                Reservation ID : <input type="text" value="<?php echo $reservationID ;?>" class="form-control" name="resID"readonly>
            </div>
        </div>
        
        <div class="col-md-10">
            <b>Rate your trip</b><br>

            <input type="radio" name="star"  value="1" checked/>
            <label class="Poor" for="Poor">Poor</label><br>

            <input type="radio" name="star" value="2" />
            <label class="Bad" for="Bad">Bad</label><br>

            <input type="radio" name="star" value="3" />
            <label class="Average" for="Average">Average</label><br>

            <input type="radio" name="star"  value="4" />
            <label class="Good" for="Good">Good</label><br>

            <input type="radio" name="star"   value="5" />
            <label class="Excellent" for="Excellent">Excellent</label>
       </div>
       <br>
       <br>
       <div class="log-btn">
           <button type="submit"><i class="fa fa-sign-in"></i> Rate</button>
       </div>
   </form>

   <br>
   <br>