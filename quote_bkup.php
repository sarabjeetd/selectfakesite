<?php include 'inc/landing-header.php'; ?>
<style type="text/css">
	.slider_area .single_slider {
    min-height: 550px;
    height: auto;
}
</style>
<div class="slider_area">

        <div class="single_slider slider_bg_1 d-flex align-items-center">

            <div class="container">

        <!-- <div class="col-lg-12 col-md-12" id="ready-1">
            <div class="slider_text home-slide">
                <h1>SELECT <span>AUTO PROTECT</span></h1>
            </div>
        </div> -->

                <div class="row justify-content-end align-items-center">
                	<!-- id="ready-2" -->
                    <div class="col-lg-7 col-md-6 float-left" >
                        <div class="slider_text">
                            <h1 class="mb-5">BE <span>READY </span>FOR LIFE'S <span>SURPRISES</span></h1>
                            <ul class="home-list">
				            	<li><i class="fa fa-check"></i>Any ASE Certified Facility</li>
				               	<li><i class="fa fa-check"></i>24/7 Claims</li>
				               	<li><i class="fa fa-check"></i>30 Day Money Back Guarantee</li>
				            </ul>
                        </div>
                    </div>
<!-- id="ready-3" -->
          <div class="col-lg-5 banner-form-wrap" >
            <div class="screen banner-form">
              <h3>Get an <span>instant</span> FREE QUOTE for your Car!</h3>
              <div class="contact-form text-center landing-page-form">





      	<form class="form-horizontal needs-validation show-offer-api" action="" id="multistep_form" data-modal="show" novalidate>
            <fieldset id="account">
	            <div class="panel-body">
	                 
                      <div class="form-group text-left">
				        <label>Zip Code</label>
				        <input type="text" autocomplete="off" class="form-control quote_user" name="zip_code" required id="quote_zip" placeholder="xxxxx">
				         <span id="zip_valid" class="valid_c"></span>
				        <div class="invalid-feedback">
					        Please provide a valid city.
					      </div>
				      </div>

                      
                     <input type="button" name="password" class="btn btn-primary next m-0 " value="Next" id="next1" style='margin-left:30%' disabled />
	            </div>
            </fieldset>
            
            <fieldset id="personal">
             <div class="panel-body">

				<div class="form-group text-left form-check p-0">

	                    <label>Year <span>*</span></label>
	                    <select class="form-control quote_class stage_2" required id="quote_year">

	                      <option hidden="" value="">*Please select*</option>
	                      <option value="2019">2019</option>
	                      <option value="2018">2018</option>
	                      <option value="2017">2017</option>
	                      <option value="2016">2016</option>
	                      <option value="2015">2015</option>
	                      <option value="2014">2014</option>
	                      <option value="2013">2013</option>
	                      <option value="2012">2012</option>
	                      <option value="2011">2011</option>
	                      <option value="2010">2010</option>
	                      <option value="2009">2009</option>
	                      <option value="2008">2008</option>
	                      <option value="2007">2007</option>
	                      <option value="2006">2006</option>
	                      <option value="2005">2005</option>
	                      <option value="2004">2004</option>
	                      <option value="2003">2003</option>
	                      <option value="2002">2002</option>
	                      <option value="2001">2001</option>
	                      <option value="2000">2000</option>
	                      <option value="1999">1999</option>
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
	                    <input type="text" autocomplete="off" class="form-control quote_user stage_2" name="phoneNumber" required id="quote_model">

	                </div>
            		<div class="form-group text-left form-check p-0">

	                    <label>Mileage <span>*</span></label>
	                    <input type="text" autocomplete="off" name="quote_mileage" class="form-control quote_class stage_2" required id="quote_mileage">
						<!--<select class="form-control quote_class stage_2" required id="quote_mileage">
	                      <option hidden="" value="">*Please select*</option>
	                      <option value="0 - 25,000 miles">0 - 25,000 miles</option>
	                      <option value="25,000 - 50,000 miles">25,000 - 50,000 miles</option>
	                      <option value="50,000 - 100,000 miles">50,000 - 100,000 miles</option>
	                      <option value="100,000+ miles">100,000+ miles</option>
	                    </select> -->

	                </div>

                
                <!-- <input type="button" name="previous" class="previous btn btn-prev" value="Previous" id="previous1" style='margin-left:30%'/> -->
                <input type="button" name="next" class="btn btn-primary next m-0 " value="Next" id="next2" style='margin-left:30%' disabled />
            </div>
            </fieldset>
            
            <fieldset id="contact">
             <div class="panel-body">




             	<div class="form-group text-left">
			        <label>First Name</label>
			        <input type="text" class="form-control quote_user stage_3" name="first_name" required id="quote_first_name">
			      </div>
				<div class="form-group text-left">

			        <label>Last Name</label>
			        <input type="text" class="form-control quote_user stage_3" name="last_name" required id="quote_last_name">
			      </div>
				<div class="form-group text-left">
			        <label>Email</label>
			        <input type="email" class="form-control quote_user stage_3" name="email" required id="quote_email">
			          <span id="email_valid" class="valid_c"></span>
			      </div>
				<div class="form-group text-left">
			        <label>Phone Number</label>
			        <input type="text" class="form-control quote_user stage_3" name="phoneNumber" required id="quote_phone" placeholder="xxxxxxxxxx">
			         <span id="ph_valid" class="valid_c"></span>
			      </div>
			      <input type="hidden" id="affid" value="<?php echo $_GET['affid']; ?>">


         			


                 <!-- <input type="button" name="previous" class="previous btn btn-prev" value="Previous" id="previous2" style='margin-left:30%'/> -->
                <input type="button" name="submit" class="btn btn-primary m-0 multistep_submit submit-form s_form" value="Get Quote" style='margin-left:30%' disabled /><!--  id="quote_btn" -->
                
            </div>
            </fieldset>
            
        </form>
        <div class="progress">
	    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	  </div>

	  <ul class="list-unstyled list-inline">
	  	<li>
	  		<span class="text-white "><i class="fa fa-check color-green" aria-hidden="true"></i>  Free Quote </span>
	  	</li>
	  	<li>
	  		<span class="text-white "><i class="fa fa-check color-green" aria-hidden="true"></i>  No Hidden Fees </span>
	  	</li>
	  	<li>
	  		<span class="text-white "><i class="fa fa-check color-green" aria-hidden="true"></i>  Cancel Anytime </span>
	  	</li>
	  </ul>


              </div>
            </div>
          </div>

         
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

 <?php
$data = [
		'ip'=>get_client_ip(), 
		'referrer_site'=>isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'', 
		'server_dump'=>json_encode($_SERVER), 
		'request_dump'=>'', 
		'token'=>$_SESSION['token'], 
		'current'=>isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'', 
		'previous'=>(isset($_SESSION['previous'])?$_SESSION['previous']:''),
		'browser'=>getBrowserInfo()['browser'],
		'version'=>getBrowserInfo()['browser_version'], 
		'is_desktop'=>((getBrowserInfo()['device']=="Desktop")?'1':'0'), 
		'is_phone'=>((getBrowserInfo()['device']=="Desktop")?'0':'1'), 
		'device'=>getBrowserInfo()['device'], 
		'platform'=>getBrowserInfo()['os_platform'], 
		'landing_page'=>'', 
		'created_at'=>date("Y-m-d h:i:s"), 
		'updated_at'=>date("Y-m-d h:i:s")
];



 insert_data($data);
$_SESSION['previous'] = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>	       

  </section>
  <!---------------------------
End Quote
----------------------------->


<?php include 'inc/footer.php'; ?>

