   <script>
							
                	document.validCaptcha = false;
               	function enableBtn() {
                		document.validCaptcha = true;
                		document.mayBeEnableSubmitBtn();
                		// document.getElementById("next3").disabled = false;
                		stage_3();
                	}
                </script>
				                  <div class="col-lg-7 col-md-6 col-sm-12 banner-form-wrap my-3" id="ready-3">

                    <div class="screen banner-form">

                     <div class=top-part>
                     	<div class="top-heading">
                     		<h2 sytle="">Protect <span>your</span><br><span class="form-car-today">car today!</span></h2>
                     	</div>
                     	<div>
                     		<ul class="banner-ul">
                     			<li><img src="../img/award-solid.png">Free Quote</li>
                     			<li><img src="../img/sack-xmark-solid.png">No Hidden Fees</li>
                     			<li><img src="../img/ban-solid.png">Cancel Anytime</li>
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
					      	
  								<input type="text" data-hj-allow autocomplete="off" class="form-control quote_user" placeholder="Enter your area’s zipcode" aria-label="" aria-describedby="basic-addon1" name="zip_code" required id="quote_zip">
								    <div class="input-group-prepend">
								    <button type="button" name="password" class="btn btn-primary next action-btn" value="Get Your Free Quote" id="next1" style='margin-left:15px; border-radius: 5px; width:100%;' disabled >Get Your Free Quote</button>
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

                     <p class="banner-form-agreement">By clicking “Get Your Free Quote” button you agree to our <span><a href="https://lpdev.selectautoprotect.com/serviceagreement.php">Terms & Conditions.</a></span></p>

	            </div>

            </fieldset>

            

            <fieldset id="personal">

             <div class="panel-body">



				<div class="form-group text-left form-check p-0">



	                    <label>Year <span>*</span></label>
<?php $years = array_combine(range(date('Y', strtotime('+1 year')), 1999), range(date('Y', strtotime('+1 year')), 1999));
 ?>
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

                <button type="button" name="next" class="btn btn-primary next m-0 action-btn" value="Next" id="next2" style='margin-left:30%' disabled >Next</button>

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
			        <input type="text" data-hj-allow class="form-control stage_4" name="home_phone" id="home_phone" placeholder="xxxxxxxxxx">
			         <span id="qa_valid" class="valid_c"></span>
					    <span class="valid_c VPN_message"></span>
			    </div>
         
          <input type="hidden"  name="home_phone" value=0> 

				

			      <input type="hidden" id="affid" value="<?php echo isset($_GET['affid'])?$_GET['affid']:''; ?>">

				  <input type="hidden" id="ref" name="ref" value="<?php echo isset($_GET['ref'])?$_GET['ref']:''; ?>">

			      <input type="hidden" id="sid" name="sid" value="<?php echo isset($_GET['sid'])?$_GET['sid']:''; ?>">
<input type="hidden" id="zr_track_id" name="zr_track_id" value="">
			      <input type="hidden" id="uid" name="uid" value="<?php echo isset($_GET['uid'])?$_GET['uid']:''; ?>">
  <input type="hidden" id="gclid" name="gclid" value="<?php echo isset($_GET['gclid'])?$_GET['gclid']:''; ?>">
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
<div class="g-recaptcha stage_3" name="google_validate_captcha" data-sitekey="6LfG70chAAAAAApopnppMrUAx4yZNxgKVLv_6qdb" data-callback="enableBtn" ></div>
 <span id="captcha_valid" class="valid_c"></span>
	
				<button type="button" name="submit" id="next3" class="btn btn-primary m-0 multistep_submit submit-form s_form next action-btn"  value="Get Your Free Quote" style='margin-left:30%' disabled >Get Your Free Quote</button><!--  id="quote_btn" -->

                

            </div>

            </fieldset>
			<div id="form-loader" style="display:none;">
                <lottie-player src="img/lf30_editor_narsfrhd.json" background="transparent"  speed="1"  style="width: 50%; height: 200px; margin:auto;" loop autoplay></lottie-player>
                </div>
            

        </form>

                      </div>

                    </div>

                  </div>