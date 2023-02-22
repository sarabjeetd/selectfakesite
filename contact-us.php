<?php 

require_once('config.php');
define ('SITEURL', $cfg->siteurl);

$title = 'Contact Us | Select Auto Protect';
$description = "To contact Select Auto Protect, please send an email to info@selectautoprotect.com or use the contact form on this page and we will contact you shortly.";

include 'inc/header.php'; ?>

 <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- header_start  -->
    <!-- ================ contact section start ================= -->

    <section class="contact-section pb-0">
            <div class="container">
                <div class="col-sm-12 plan-heading mb-95">
                    <h1>Contact Us</h1>     
            </div>
            <div class="row" style="clear: both;">
                <div class="col-lg-8">
                        <div class="contact-form-inner">
                            <h3 class="mt-0">Questions? <span>We</span> have answers!</h3>
                        <div class="contact-form-two">
                                <form name="contact-form" method="POST" action="contactus.php">
                                <div class="form-group form-check">
                                    <label for="name">Name</label>
                                    <input  type="text" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="form-group form-check">
                                    <label for="email">Email</label>
                                    <input  type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group form-check">
                                    <label for="phone">Phone</label>
                                    <input  type="text" name="phone" id="phone" class="form-control"  required>
                                </div>
                                <div class="form-group form-check">
                                    <label for="address">Address</label>
                                    <input  type="text" name="address" id="address" class="form-control"  required>
                                </div>
                                <div class="form-group form-check">
                                    <label for="zip_code">Zip Code</label>
                                    <input  type="text" name="zip_code" id="zip_code" class="form-control"  required>
                                </div>  
                                <div class="form-group form-check">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" cols="50"  required></textarea>
                                </div>  
                                <div class="form-group form-check">                                
                                <div class="g-recaptcha " name="google_validate_captcha" data-sitekey="6LeIzJ8jAAAAAFFcrA1JR2FwuvSXU3wYfkv29Llj" data-callback="enableBtn" ></div>                                
                                </div>
                                <input type="submit" id="button1"  disabled="disabled" value="Submit" class="btn btn-custom">
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 contact-address">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class='fa fa-map-marker'></i></span>
                        <div class="media-body">
                                <h3>1201 N MARKET ST STE 111 WILMINGTON, DE 19801</h3>
                        </div>
                    </div>
                    <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-volume-control-phone"></i></span>
                        <div class="media-body">
                                <h3><a href="tel:8603930962">860 393 0962</a></h3>

                        </div>
                    </div>
                      <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <div class="media-body">
                                <h3><a href="mailto:info@selectautoprotect.com">info@selectautoprotect.com</a></h3>

                        </div>
                    </div>  
                </div>
            </div>
        </div>
    		<!-- <div style="width: 100%" class="mt-5 pt-5">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=43%20West%2033rd%20Street%20New%20York,%20NY%2010001+(SELECT%20AUTO%20PROTECT)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div> -->
                <div style="width: 100%" class="mt-5 pt-5">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1201%20N%20MARKET%20ST%20STE%20111%20WILMINGTON,%20DE%2019801+(Select%20Auto%20Protect)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

            </div>
        </section>
        <!-- ================ contact section end ================= -->
<script>function enableBtn(){
   document.getElementById("button1").disabled = false;
 }</script>


    	<?php include 'inc/footer.php'; ?>
