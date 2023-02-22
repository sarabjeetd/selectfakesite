<?php 
ini_set('display_errors',0);

require_once('config.php');
define ('SITEURL', $cfg->siteurl);
$title = 'Select Auto Protect - Extended Car Warranty';
$description = "Cover the repair of your car with Select Auto Protect extended car warranty. We will take care of your repairs quickly and efficiently.";
include 'inc/header.php';
 ?>
<?php 
$years = array_combine(range(date('Y', strtotime('+1 year')), 1999), range(date('Y', strtotime('+1 year')), 1999));

?>
<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
    document.validCaptcha = false;

    function enableBtn() {
      document.validCaptcha = true;
      document.mayBeEnableSubmitBtn();
      // document.getElementById("next3").disabled = false;
      stage_3();
    }
  </script>
  <style>
    .banner-form .g-recaptcha.stage_3 {
      margin-bottom: 10px;
    }

    .slider_area .single_slider {
      min-height: 820px !important;
      height: auto;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
 </style>
    
 
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
        <div class="col-lg-12 col-md-12" id="ready-1">
            <div class="slider_text home-slide">
                <h1>SELECT <span>AUTO PROTECT</span></h1>
            </div>
        </div>
                <div class="row justify-content-end align-items-center m-0">
                    <div class="col-lg-5 col-md-6 col-sm-12 float-left" id="ready-2">
                        <div class="slider_text">
                            <!-- <h1 class="mb-5">BE <span>READY </span>FOR LIFE'S <span>SURPRISES</span></h1> -->
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
                  <div class="col-lg-7 col-md-6 col-sm-12 banner-form-wrap" id="ready-3">
                    <div class="screen banner-form">
                     <div class=top-part>
                     	<div class="top-heading">
                     		<h2 sytle="">Protect <span>your</span><br><span class="form-car-today">car today!</span></h2>
                     	</div>
                     	<div>
                     		<ul class="banner-ul">
                     			<li><img src="img/award-solid.png" alt="award">Free Quote</li>
                     			<li><img src="img/sack-xmark-solid.png" alt="sack with xmark">No Hidden Fees</li>
                     			<li><img src="img/ban-solid.png" alt="cancel">Cancel Anytime</li>
                     		</ul>
                     		<hr style="width: 100%; max-width: 100%; margin-top: 0px; margin-bottom:5px;">
                     		<p>We made it easy for you, just follow 3 simple steps</p>
                     		<div class="progress m-0">
												  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
												</div>
                     	</div>
                     </div>
                      <div class="contact-form">
                        <form class="form-horizontal needs-validation show-offer-api" action="" id="multistep_form" data-modal="show" novalidate>
            <fieldset id="account">
	            <div class="panel-body">

                      <div class="panel-body-inner">
                      	<div class="form-group text-left">
				        <!-- <label>Zip Code</label>
				        <input type="text" autocomplete="off" class="form-control quote_user" name="zip_code" required id="quote_zip" placeholder="xxxxx">
				         <span id="zip_valid" class="valid_c"></span>
				        <div class="invalid-feedback">
					        Please provide a valid city.
					      </div> -->
					      <div class="input-group mb-3">

  								<input type="text" autocomplete="off" class="form-control quote_user" placeholder="Enter your area’s zipcode" aria-label="" aria-describedby="basic-addon1" name="zip_code" required data-hj-allow id="quote_zip">
								    <div class="input-group-prepend">
								    <button  type="button" name="password" class="btn btn-primary next action-btn"  id="next1" style='margin-left:15px; border-radius: 5px; width:100%;'>Get Your Free Quote </button>
								  </div>
								  <span id="zip_valid" class="valid_c"></span>
                  <span class="valid_c VPN_message"></span>
				        <div class="invalid-feedback">
					        Please provide a valid city.
					      </div>
								</div>
				      </div>

                     <!-- <input type="button" name="password" class="btn btn-primary next " value="Next" id="next1" style='margin-left:15px' disabled /> -->
                      </div>
                     <p class="banner-form-agreement">By clicking “Get Your Free Quote” button you agree to our <span>
                      <a href="http://localhost:81/serviceagreement.php">Terms & Conditions.</a></span></p>
  	            </div>
              </fieldset>

              <fieldset id="personal">
               <div class="panel-body">
  				<div class="form-group text-left form-check p-0">
  	                    <label>Year <span>*</span></label>
  	                    <select class="form-control quote_class stage_2" required id="quote_year">
  	                      <option hidden="" value="">*Please select*</option>
                          <?php foreach($years as $year){  ?>
                            <option value="<?php echo $year;  ?>"><?php echo $year;  ?></option>
                          <?php } ?>
  	                      <option value="Other">Other</option>
  	                    </select>
  	                  </div>
                		<div class="form-group text-left form-check p-0">
  	                    <label>Make <span>*</span></label>
  	                    <select class="form-control quote_class stage_2" required id="quote_make">
  	                      <option hidden="" value="">*Please select*</option>
  	                      <option value="Acura">Acura</option>
  	                      <option value="Aston Martin">Aston Martin</option>
  	                      <option value="Audi">Audi</option>
  	                      <option value="Bentley">Bentley</option>
  	                      <option value="BMW">BMW</option>
  	                      <option value="BMW Alpina">BMW Alpina</option>
  	                      <option value="Buick">Buick</option>
  	                      <option value="Cadillac">Cadillac</option>
  	                      <option value="Chevrolet">Chevrolet</option>
  	                      <option value="Chrysler">Chrysler</option>
  	                      <option value="Daewoo">Daewoo</option>
  	                      <option value="Dodge">Dodge</option>
  	                      <option value="Ferrari">Ferrari</option>
  	                      <option value="Ford">Ford</option>
  	                      <option value="GMC">GMC</option>
  	                      <option value="Honda">Honda</option>
  	                      <option value="Hyundai">Hyundai</option>
  	                      <option value="Infiniti">Infiniti</option>
  	                      <option value="Isuzu">Isuzu</option>
  	                      <option value="Jaguar">Jaguar</option>
  	                      <option value="Jeep">Jeep</option>
  	                      <option value="Kia">Kia</option>
  	                      <option value="Lamborghini">Lamborghini</option>
  	                      <option value="Land Rover">Land Rover</option>
  	                      <option value="Lexus">Lexus</option>
  	                      <option value="Lincoln">Lincoln</option>
  	                      <option value="London Taxi">London Taxi</option>
  	                      <option value="Lotus">Lotus</option>
  	                      <option value="Maserati">Maserati</option>
  	                      <option value="Mazda">Mazda</option>
  	                      <option value="Mercedes-Benz">Mercedes-Benz</option>
  	                      <option value="Mercury">Mercury</option>
  	                      <option value="MINI">MINI</option>
  	                      <option value="Mitsubishi">Mitsubishi</option>
  	                      <option value="Morgan">Morgan</option>
  	                      <option value="Nissan">Nissan</option>
  	                      <option value="Oldsmobile">Oldsmobile</option>
  	                      <option value="Other Make (Not Listed)">Other Make (Not Listed)</option>
  	                      <option value="Pontiac">Pontiac</option>
  	                      <option value="Porsche">Porsche</option>
  	                      <option value="Roush Performance">Roush Performance</option>
  	                      <option value="Saab">Saab</option>
  	                      <option value="Saturn">Saturn</option>
  	                      <option value="Subaru">Subaru</option>
  	                      <option value="Suzuki">Suzuki</option>
  	                      <option value="Toyota">Toyota</option>
  	                      <option value="Volkswagen">Volkswagen</option>
  	                      <option value="Volvo">Volvo</option>
  	                    </select>
  	                </div>
              		<div class="form-group text-left">
  	                    <label>Model <span>*</span></label>
  	                    <input type="text" data-hj-allow autocomplete="off" class="form-control quote_user stage_2" name="quote_model" required id="quote_model">
  	                </div>
              		<div class="form-group text-left form-check p-0">
  	                    <label>Mileage <span>*</span></label>
  	                    <input type="text" data-hj-allow autocomplete="off" name="quote_mileage" class="form-control quote_class stage_2" required id="quote_mileage">
  						<span id="q_mileage" class="valid_c"></span>
              <span class="valid_c VPN_message"></span>
  						<!--<select class="form-control quote_class stage_2" required id="quote_mileage">
  	                      <option hidden="" value="">*Please select*</option>
  	                      <option value="0 - 25,000 miles">0 - 25,000 miles</option>
  	                      <option value="25,000 - 50,000 miles">25,000 - 50,000 miles</option>
  	                      <option value="50,000 - 100,000 miles">50,000 - 100,000 miles</option>
  	                      <option value="100,000+ miles">100,000+ miles</option>
  	                    </select> -->
  	                </div>

                  <!-- <input type="button" name="previous" class="previous btn btn-prev" value="Previous" id="previous1" style='margin-left:30%'/> -->
                  <button  type="button" class="btn btn-primary next m-0 action-btn" value="Next" id="next2" style='margin-left:30%'>Next</button>
              </div>
              </fieldset>

              <fieldset id="contact">
               <div class="panel-body">
               	<div class="form-group text-left">
  			        <label>First Name</label>
  			        <input type="text" data-hj-allow class="form-control quote_user stage_3" name="first_name" required id="quote_first_name">
  			      </div>
  				<div class="form-group text-left">
  			        <label>Last Name</label>
  			        <input type="text" data-hj-allow class="form-control quote_user stage_3" name="last_name" required id="quote_last_name">
  			      </div>
  				<div class="form-group text-left">
  			        <label>Email</label>
  			        <input type="email" data-hj-allow class="form-control quote_user stage_3" name="email" required id="quote_email">
  			          <span id="email_valid" class="valid_c"></span>
  			      </div>
  				<div class="form-group text-left">
  			        <label>Mobile Number</label>
  			        <input type="text" data-hj-allow class="form-control quote_user stage_3" name="phoneNumber" required id="quote_phone" placeholder="xxxxxxxxxx">
  			         <span id="ph_valid" class="valid_c"></span>
  			      </div>
              
         
              <div class="form-group text-left">
  			        <label>Home/Work Number</label>
  			        <input type="text" data-hj-allow class="form-control stage_4" name="home_phone"  id="home_phone" placeholder="xxxxxxxxxx">
  			         <span id="qa_valid" class="valid_c"></span>
                 <span class="valid_c VPN_message"></span>
  			      </div>
            
                 <input type="hidden"  name="home_phone" value=0>  
              

  			      <input type="hidden" id="affid" value="<?php echo isset($_GET['affid'])?$_GET['affid']:''; ?>">
  				  <input type="hidden" id="ref" name="ref" value="<?php echo isset($_GET['ref'])?$_GET['ref']:''; ?>">
  			      <input type="hidden" id="sid" name="sid" value="<?php echo isset($_GET['sid'])?$_GET['sid']:''; ?>">
  			      <input type="hidden" id="uid" name="uid" value="<?php echo isset($_GET['uid'])?$_GET['uid']:''; ?>">
  					<input type="hidden" id="gclid" name="gclid" value="<?php echo isset($_GET['gclid'])?$_GET['gclid']:''; ?>">
            <input type="hidden" id="zr_track_id" name="zr_track_id" value="">
            <?php $tier = ''; 
  					if(isset($_GET['tier'])){ $tier = $_GET['tier']; } 
  					if(isset($_GET['Tier'])){ $tier = $_GET['Tier']; } 
  					?>
  				  <input type="hidden" id="tier" name="tier" value="<?php echo isset($tier)?$tier:''; ?>">
  				  <input type="hidden" id="utm_source" name="utm_source" value="<?php echo isset($_GET['utm_source'])?$_GET['utm_source']:''; ?>">
  			      <input type="hidden" id="utm_medium" name="utm_medium" value="<?php echo isset($_GET['utm_medium'])?$_GET['utm_medium']:''; ?>">
  			      <input type="hidden" id="utm_campaign" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign'])?$_GET['utm_campaign']:''; ?>">
  			      <input type="hidden" id="utm_content" name="utm_content" value="<?php echo isset($_GET['utm_content'])?$_GET['utm_content']:''; ?>">
  			      <input type="hidden" id="utm_term" name="utm_term" value="<?php echo isset($_GET['utm_term'])?$_GET['utm_term']:''; ?>">
  				<!-- <input type="button" name="previous" class="previous btn btn-prev" value="Previous" id="previous2" style='margin-left:30%'/> -->
       
                        <div class="g-recaptcha stage_3" name="google_validate_captcha" data-sitekey="6LfG70chAAAAAApopnppMrUAx4yZNxgKVLv_6qdb" data-callback="enableBtn"></div>
                        <span id="captcha_valid" class="valid_c"></span>
                   
          <button type="button" name="submit" id="next3" class="btn btn-primary m-0 multistep_submit submit-form s_form next action-btn" value="Get Your Free Quote" style='margin-left:30%' disabled >Get Your Free Quote</button><!--  id="quote_btn" -->

              </div>
              </fieldset>
              <div id="form-loader" style="display:none;">
                  <lottie-player src="img/lf30_editor_narsfrhd.json" background="transparent"  speed="1"  style="width: 50%; height: 200px; margin:auto;" loop autoplay></lottie-player>
                  </div>

          </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- slider_area_end -->
    <!-- Features_area_Start -->
    <?php include 'inc/features.php'; ?>
    <!-- Features_area_Start -->
      <!-- Plan_area_start  -->
      <div class="service_area py-0">
           <div class="row justify-content-center ">
               <div class="col-lg-12 col-md-12">
                   <div class="section_title text-center mb-95">
                      <h2>COULD YOU AFFORD A $5,000 AUTO REPAIR BILL TODAY?</h2>
            <p>An Auto warranty plan from Select Auto Protect saves you from expensive surprises.</p>
            <hr>
                   </div>
               </div>
           </div> 
          <div class="row">
          <div class="col-lg-12 mt-4 pt-4">
            <div class="container">
              <div class="row">
                <div class="col-md-4 text-center">
                  <div class="feature-item">
                    <img src="img/engine.png" alt=" image showing an engine"/>
                    <h3>Engine</h3>
                    <p><strong class="color-red">$3250</strong></p>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="feature-item">
                    <img src="img/transmission.png" alt="image showing gear transmission"/>
                    <h3>Transmission</h3>
                    <p><strong class="color-red">$2707</strong></p>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="feature-item">
                    <img src="img/suspension.png" alt="image showing suspension"/>
                    <h3>Suspension</h3>
                    <p><strong class="color-red">$2930</strong></p>
                  </div>
                </div>
                <div class="col-sm-12">
                	<p class="cover-repair">*Coverage varies by state and plan selected.</p>
                </div>
         </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Plan_area_end -->
    <!-- Testimonial_area_Srart -->
    <div class="why-choose pb-0 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 why-choose-content">
            <h2>WHY CHOOSE SELECT AUTO PROTECT?</h2>
            <p>Our objective is simple: to take the stress out of auto repairs and unexpected maintenance. Vehicle repairs can be costly, leaving vehicle owners frustrated and overwhelmed. That’s why here at Select Auto Protect-  we are committed to offering first-rate services to our customers. <strong>We offer our customers peace of mind from unwanted auto repair bills, protecting your budget as well as providing you with the comfort of knowing a solution is a phone call away.</strong></p>
          </div>
          <div class="container">
            <div class="testiSlide my-5">
              <div>
              <figure class="testimonial">
                <div id="slick-slide00" style="display:none">
                  UNEXPECTED REPAIRS
                </div>
                <div class="peopl">
               <h3>UNEXPECTED REPAIRS</h3>
                </div>
                <blockquote>When unexpected auto repairs come your way, Select Auto Protect is here for you! We will take care of your repairs quickly and efficiently.
                <div class="btn"></div>
                </blockquote>
              </figure>
              </div>
              <div>
              <figure class="testimonial">
                <div id="slick-slide01" style="display:none">
                  Any ASE Certified Facility
                </div>
                <div class="peopl">
                <h3> Any ASE Certified Facility</h3>
                </div>
                <blockquote>With Select Auto Protect, you're not limited to your location! We accept any ASE Certified technician throughout the Country.
                <div class="btn"></div>
                </blockquote>
              </figure>
              </div>
              <div>
              <figure class="testimonial">
                <div id="slick-slide02" style="display:none">
                  Multiple Plans
                </div>
                <div class="peopl">
                <h3>Multiple Plans</h3>
                </div>
                <blockquote>At Select Auto Protect, we have several customizable plans to choose from! We will help you pick a plan that fits your vehicle and budget. Call us to get your free quote! 
                <div class="btn"></div>
                </blockquote>
              </figure>
              </div>
              <div>
              <figure class="testimonial">
                <div id="slick-slide03" style="display:none">
                  30 Day Money Back Guarantee
                  </div>
                <div class="peopl">
                <h3>30 Day Money Back Guarantee</h3>
                </div>
                <blockquote>If you're not satisfied, we're not satisfied. That's why we offer a 30 day money back guarantee. If for any reason you're not satisfied with our services, Select Auto Protect will refund you in full. 
                <div class="btn"></div>
                </blockquote>
              </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial_area_end -->
    <!-- Testimonial Lower Section -->
    <?php include 'inc/reviews.php'; ?>
    <!-- Testimonial Lower Section -->
    <section class="why-choose pb-4">
    <div class="container">
      <div class="row pb-5">
  		<div class="col-sm-12">
  			<h2 class="page-title text-center">By Vehicle Manufacturer</h2>
  		</div>
  	</div>
  	<div class="container">
    <div class="row">
      <div class="col-sm-2">
        <a class="cr-lt" href="<?php echo SITEURL ?>acura-extended-warranty.php"><img class="wd-img" alt="Acura extended warranty" title="Acura extended warranty" src="img/acura.png"></a>
      </div>
      <div class="col-sm-2">
       <a class="cr-lt" href="<?php echo SITEURL ?>audi-extended-warranty.php"><img class="wd-img" alt="Audi extended warranty" title="Audi extended warranty"  src="img/audi.png"></a>
      </div>
      <div class="col-sm-2">
      <a class="cr-lt" href="<?php echo SITEURL ?>bentley-extended-warranty.php"><img class="wd-img" alt="Bentley extended warranty" title="Bentley extended warranty"  src="img/bently.png"></a>
      </div>
      <div class="col-sm-2">
      <a class="cr-lt" href="<?php echo SITEURL ?>aston-martin-extended-warranty.php"><img class="wd-img" alt="Aston Martin extended warranty" title="Aston Martin extended warranty" src="img/austin.png"></a>
      </div>
      <div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>bmw-extended-warranty.php"><img class="wd-img" alt="BMW extended warranty" title="BMW extended warranty" src="img/bmw.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>dodge-extended-warranty.php"><img class="wd-img" alt="Dodge extended warranty" title="Dodge extended warranty"  src="img/dodge.png"></a>
      </div>
    </div>
    <div class="row justify-content-center">
          
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>chrysler-extended-warranty.php"><img class="wd-img" alt="Chrysler extended warranty" title="Chrysler extended warranty" src="img/Chrysler.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>buick-extended-warranty.php"><img class="wd-img" alt="Buick extended warranty" title="Buick extended warranty" src="img/Buick.png"></a>
      </div>
      <div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>cadillac-extended-warranty.php"><img class="wd-img" alt="Cadillac extended warranty" title="Cadillac extended warranty" src="img/Cadillac.png"></a>
      </div>
  		<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>chevrolet-extended-warranty.php"><img class="wd-img" alt="Chevrolet extended warranty" title="Chevrolet extended warranty"  src="img/Chevrolet.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>ferrari-extended-warranty.php"><img class="wd-img" alt="Ferrari extended warranty" title="Ferrari extended warranty"  src="img/ferrari.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>ford-extended-warranty.php"><img class="wd-img" alt="Ford extended warranty" title="Ford extended warranty"  src="img/ford.png"></a>
      </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>hyundai-extended-warranty.php"><img class="wd-img" alt="Hyundai extended warranty" title="Hyundai extended warranty" src="img/hyundai.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>jeep-extended-warranty.php"><img class="wd-img" alt="Jeep extended warranty" title="Jeep extended warranty" src="img/jeep.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>kia-extended-warranty.php"><img class="wd-img" alt="Kia extended warranty" title="Kia extended warranty" src="img/kia.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>infiniti-extended-warranty.php"><img class="wd-img" alt="Infiniti extended warranty" title="Infiniti extended warranty" src="img/infiniti.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>mazda-extended-warranty.php"><img class="wd-img" alt="Mazda extended warranty" title="mazda extended warranty" src="img/mazda.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>maserati-extended-warranty.php"><img class="wd-img" alt="Maserati extended warranty" title="Maserati extended warranty" src="img/maserati.png"></a>
      </div> 
  	</div>
  	<div class="row justify-content-center">
      
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>lincoln-extended-warranty.php"><img class="wd-img" alt="Lincoln extended warranty" title="Lincoln extended warranty" src="img/lincoln.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>mercedes-benz-extended-warranty.php"><img class="wd-img" alt="Mercedes Benz extended warranty" title="Mercedes Benz extended warranty" src="img/mercedes-benz.png"></a>
      </div>
  	<div class="col-sm-2 ">
      <a class="cr-lt" href="<?php echo SITEURL ?>lexus-extended-warranty.php"><img class="wd-img" alt="Lexus extended warranty" title="lexus extended warranty" src="img/lexus.png"></a>
      </div>
  	</div>	
  </div>
  	</div>
  	</section>	

  	<section class="pb-0 pt-5 testi-home">
  <div class="container">
        <!-- <div class="faq-section faq-inner"> -->
        <div class="row">
          <div class="faq-content col-sm-12 py-5 my-1"  itemscope itemtype="https://schema.org/FAQPage">
            <h2 class="mt-3 custom-h3">Frequently Asked Questions</h2>
          <div class="faq-content-inner pb-4">
              <div class="accordion" id="accordionExample">
                <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                  <div class="card-header" id="headingOne">
                    <p class="mb-0" itemprop="name">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"> What Is An Extended Auto Warranty? <i class="fa fa-plus"></i></button>                
                  </p>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div class="card-body" itemprop="text">
                      <p>It is a vehicle service contract that covers the cost of unexpected repairs and replacement of vehicle parts, including the transmission, engine, brake system, etc., after the factory car warranty expires. Call now to get more details <a href="tel:8602229471" alt="link on telephone number">860 222 9471</a></p>
                  </div>
                </div>
              </div>
              <!-- <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"> What is the Difference between Extended car warranty and insurance? <i class="fa fa-plus"></i></button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>Initially, when considering who offers the policy for the said alternatives lies that mechanical breakdown insurance policy is issued by the car insurance company that's similar to your auto insurance policy whereas on the other hand, the extended warranty is offered by the automaker or by an independent third party.</p>
                  </div>
                </div>
              </div> -->
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                  <div class="card-header" id="headingThree">
                    <p class="mb-0" itemprop="name">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">Can I Buy An Extended Warranty After Purchase? <i class="fa fa-plus"></i></button>                     
                  </p>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div class="card-body" itemprop="text">
                      <p>Yes, you can purchase an extended warranty at any time.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                  <div class="card-header" id="headingFour">
                    <p class="mb-0" itemprop="name">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"> What Is Included In Extended Auto Warranty? <i class="fa fa-plus"></i></button>                     
                  </p>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div class="card-body"  itemprop="text">
                      <p>The basic plan includes engine, transmission, cooling system, brake system, electrical system, drive axle, trip interruption, and roadside assistance. At Select Auto Protect we have several coverage plans to suit your vehicle's needs. You can learn more on the plans page.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                  <div class="card-header" id="headingFive">
                    <p class="mb-0" itemprop="name">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"> Is A Car Warranty The Same As Car Insurance? <i class="fa fa-plus"></i></button>                     
                  </p>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div class="card-body" itemprop="text">
                      <p>No. Car insurance typically protects you after an accident, whereas a car warranty helps cover repairs and replacement of vehicle parts due to breakdowns or failure.
  </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                  <div class="card-header" id="headingSix">
                    <p class="mb-0" itemprop="name">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix">Can You Buy A Warranty For An Old Car? <i class="fa fa-plus"></i></button>                     
                  </p>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <div class="card-body" itemprop="text">
                      <p>Yes, the age of a vehicle doesn't matter. We cover vehicles that are in good working condition at the time of your plan’s purchase.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div style="display:none">
 <?php
//echo "Printed <pre>";
//print_r(json_decode($_SESSION['ipqualityscore']));

?>
</div>

  <?php include 'inc/footer.php'; ?>
