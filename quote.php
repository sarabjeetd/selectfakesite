<?php
ini_set('display_errors',0);

include 'inc/landing-header.php'; ?>
<style type="text/css">
.banner-form .g-recaptcha.stage_3 {
    margin-bottom: 10px;
}
	.slider_area .single_slider {
    min-height: 820px;
    height: auto;
background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
/* .slider_bg_1 {
    background-image: url(../img/home-page-background.jpg);
} */
</style>
<div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">

            <div class="container">

        <!-- <div class="col-lg-12 col-md-12" id="ready-1">
            <div class="slider_text home-slide">
                <h1>SELECT <span>AUTO PROTECT</span></h1>
            </div>
        </div> -->

                <div class="row align-items-center">
                	<!-- id="ready-2" -->
                    <div class="col-lg-5 col-md-6 col-sm-12 float-left" id="ready-2">

                        <div class="slider_text">

                            <!-- <h1 class="mb-5">BE <span>READY </span>FOR LIFE'S <span>SURPRISES</span></h1> -->
                            <!-- <img src="img/cyber-monday.png" class="img-fluid"/> -->
                            <h1 class="mb-1"><span>$750</span> off</h1>
                            <h2 class="mb-4 pb-3">On First Purchase</h2>
                            <p class="mb-3">Select Auto Protect Will Help You Out!</p>
                            <ul class="home-list">

                                <li><i class="fa fa-check"></i>Any ASE Certified Facility</li>

                                <li><i class="fa fa-check"></i>24/7 Claims</li>

                                <li><i class="fa fa-check"></i>30 Day Money Back Guarantee</li>

                            </ul>

                        </div>

                    </div>
<!-- id="ready-3" -->
          <!-- start form --->
					<?php include_once('form/quote-form.php'); ?>
				<!-- end form --->	
                </div>
            </div>
        </div>
    </div>
<!---------------------------
End banner
----------------------------->



 <?php include 'inc/features.php'; ?>
  <!---------------------------
End feature
----------------------------->




<?php include 'inc/reviews.php'; ?>
<!---------------------------
End Reviews
----------------------------->



   <section class="quote-section">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-10 plan-heading pb-0 text-center">

          <h1 class="text-capitalize text-white">get a personalized, no obligation, free Quote from <a href="#" class="text-uppercase">SELECT AUTO PROTECT</a> now </h1> 

          <!-- <p>Searching for the right plan can be extremely time consuming.At Select Auto Protect we have a number of coverage plans to suit your vehicle's needs. Take a look below to find the right repair plan to keep your vehicle protected today.</p> -->

          <a href="#" class="btn btn-custom text-capitalize m-0 btn-lg">get an instant quote</a>

        </div>  

      </div>

    </div> 

  </section>
  <!---------------------------
End Quote
----------------------------->

<?php include 'inc/footer.php'; ?>
