<?php
$data = [
    'ip' => get_client_ip(),
    'referrer_site' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'server_dump' => json_encode($_SERVER),
    'request_dump' => '',
    'sys_id' => $verify,
    'token' => $_SESSION['token'],
    'current' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'previous' => (isset($_SESSION['previous']) ? $_SESSION['previous'] : ''),
    'request_id' => (isset($_SESSION['dv_request_id']) ? $_SESSION['dv_request_id'] : ''),
    'browser' => getBrowserInfo()['browser'],
    'version' => getBrowserInfo()['browser_version'],
    'is_desktop' => ((getBrowserInfo()['device'] == "Desktop") ? '1' : '0'),
    'is_phone' => ((getBrowserInfo()['device'] == "Desktop") ? '0' : '1'),
    'device' => getBrowserInfo()['device'],
    'platform' => getBrowserInfo()['os_platform'],
    'landing_page' => '',
    'vpn_status' => $_SESSION['external_request'],
    'fraud_score' => $_SESSION['fraud_score'],
    'proxy' => $_SESSION['proxy'],
    'bot_status' => $_SESSION['bot_status'],
    'created_at' => date("Y-m-d h:i:s"),
    'updated_at' => date("Y-m-d h:i:s"),
];
insert_data($data);
$_SESSION['previous'] = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!-- footer_start  -->
<footer class="footer thankyou-custom">
    <div class="copy-right_text">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        &copy; <script>
                        document.write(new Date().getFullYear());
                        </script> Select Auto Protect LLC All rights reserved.
                        <!-- <a href="docx/Select-Auto-Protect-Service-Agreement.pdf" target="_blank"  Title="Terms and Conditions">Service Agreement</a> | <a href="docx/My-Online-Privacy-Policy.pdf" target="_blank" >Privacy Policy</a>
							-->
                        <a href="/serviceagreement.php" target="_blank" Title="Terms and Conditions">Service
                            Agreement</a> | <a href="/privacypolicy.php" target="_blank">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_end  -->
<!-- Modal Form Start -->
<!-- Modal -->
<div class="modal fade popup-form" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content form-bg">
            <div class="modal-header d-flex align-items-center bg-green">
                <div class="modal-title text-white h5" id="exampleModalLongTitle"><strong>User Details</strong></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-msg d-none text-center mt-2 mb-2">
                </div>
                <form id="user_quote_form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="quote_first_name">First Name</label>
                                <input type="text" class="form-control quote_user" name="first_name" required
                                    id="quote_first_name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="quote_last_name">Last Name</label>
                                <input type="text" class="form-control quote_user" name="last_name" required
                                    id="quote_last_name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="quote_phone">Phone Number</label>
                                <input type="text" class="form-control quote_user" name="phoneNumber" required
                                    id="quote_phone" placeholder="xxxxxxxxxx">
                                <span id="ph_valid" class="valid_c"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="quote_email">Email</label>
                                <input type="email" class="form-control quote_user" name="email" required
                                    id="quote_email">
                                <span id="email_valid" class="valid_c"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="quote_zipcode">Zip Code</label>
                                <input type="text" class="form-control quote_user" name="quote_zipcode" required
                                    id="quote_zipcode" placeholder="xxxxx">
                                <span id="zip_valid" class="valid_c"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mt-4 text-center">
                                <input type="button" value="Submit" class="btn btn-primary form-btn m-0"
                                    id="submit_info">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Form End -->
<!-- Modal for call now -->
<?php $popup_contact = '860 294 4961';
if (isset($ref_contact->show_callnow_popup) && $ref_contact->show_callnow_popup == 1) {
    $popup_contact = !empty($ref_contact->sales_phone_no) ? $ref_contact->sales_phone_no : '860 294 4961';
}
$popup_flag = true;
if (isset($ref_contact->show_popup) && $ref_contact->show_popup != 1) {
    $popup_flag = false;
}

?>
<div class="modal fade" id="exitofferpopup" data-pop="0" data-type="0" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-lg">
            <div class="row">
                <div class="col-md-5 col-12 " style="float: left;">
                    <div class="rt-pop">
                        <img class="rt-pop_img" src="images/Group 3.png">
                    </div>
                </div>
                <div class="col-md-7 col-12 dis-n">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="rght-pop">
                        <div class="text-center">
                            <p class="pop-txt_09">CALL NOW FOR </p>
                        </div>
                        <div class="text-center" style="background: #e5fdff;">
                            <span class="prc-txt">$750</span><span class="prc-txt_2"> OFF</span>
                        </div>
                        <div class="text-center">
                            <p class="pop-txt_09 mg-bt">ANY PLAN<span class="prc-txt">!</span> </p>
                        </div>
                        <div class="text-center lw_txt">
                            <a href="tel:<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $popup_contact); ?>"
                                class="cl_bt popup_call_now"><i
                                    class="fa fa-phone-alt"></i><?php echo $popup_contact; ?></a>
                            <p>Call now for extra Benefits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exitofferpopup_2" data-pop="0" data-type="0" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-lg">
            <div class="row">
                <div class="col-md-5 col-12 " style="float: left;">
                    <div class="rt-pop">
                        <img class="rt-pop_img" src="images/Group 3.png">
                    </div>
                </div>
                <div class="col-md-7 col-12 dis-n">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="rght-pop">
                        <div class="text-center">
                            <p class="pop-txt_09">CALL NOW FOR </p>
                        </div>
                        <div class="text-center" style="background: #e5fdff;">
                            <span class="prc-txt">$750</span><span class="prc-txt_2"> OFF</span>
                        </div>
                        <div class="text-center">
                            <p class="pop-txt_09 mg-bt">ANY PLAN<span class="prc-txt">!</span> </p>
                        </div>
                        <div class="text-center lw_txt">
                            <a href="tel:<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $popup_contact); ?>"
                                class="cl_bt popup_call_now"><i
                                    class="fa fa-phone-alt"></i><?php echo $popup_contact; ?></a>
                            <p>Call now for extra Benefits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--          <div class="modal fade" id="exitofferpopup" data-pop="0" data-type="0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	   <div class="modal-content bg-lg">
	   	<div class="ribbon ribbon-top-left"><span>Cyber Week</span></div>
	      <div class="row">
	         <div class="col-md-12 col-12 dis-n bg-po-cyb">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	            </button>
	            <div class="rght-pop">
	               <div class="text-center">
	                  <h2 class="pop-txt_09">CALL NOW FOR </h2>
	               </div>
	               <div class="text-center mg-bt-cst" style="color: #ffffff;">
	                  <span class="prc-txt" style="color: #ffffff !important;" >$750</span><span class="prc-txt_2" style="color: #ffffff !important;"> OFF</span>
	               </div>
	               <div class="text-center">

	               </div>
	               <div class="text-center lw_txt">
	                  <a href="tel:860 294 4961" class="cl_bt"><i class="fa fa-phone-alt"></i>860 294 4961</a>
	                  <p style="color: #ffffff !important;">Call now for extra Benefits</p>
	               </div>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>
	</div> -->
<style>
.action-btn {
    transition: 0.3s;
    cursor: pointer;
    position: relative;
    display: block;
}

.action-btn::after {
    outline: 0.05em dashed #ff6600;
    outline-offset: 0.05em;
    content: '';
    display: block;
    width: 1.2em;
    height: 1.2em;
    position: absolute;
    left: calc(50% - 0.75em);
    top: calc(50% - 0.75em);
    border: 0.15em solid transparent;
    border-right-color: white;
    border-radius: 50%;
    animation: button-anim 0.7s linear infinite;
    opacity: 0;
}

@keyframes button-anim {
    from {
        transform: rotate(0);
    }

    to {
        transform: rotate(360deg);
    }
}

.action-btn.loading {
    color: transparent;
}

.action-btn.loading::after {
    opacity: 1;
}
</style>
<!-- End Modal -->
<!-- JS here -->
<script src="<?php echo SITEURL; ?>js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?php echo SITEURL; ?>js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo SITEURL; ?>js/popper.min.js"></script>
<script src="<?php echo SITEURL; ?>js/bootstrap.min.js"></script>
<script src="<?php echo SITEURL; ?>js/owl.carousel.min.js"></script>
<script src="<?php echo SITEURL; ?>js/isotope.pkgd.min.js"></script>
<script src="<?php echo SITEURL; ?>js/ajax-form.js"></script>
<script src="<?php echo SITEURL; ?>js/waypoints.min.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.counterup.min.js"></script>
<script src="<?php echo SITEURL; ?>js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo SITEURL; ?>js/scrollIt.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.scrollUp.min.js"></script>
<script src="<?php echo SITEURL; ?>js/wow.min.js"></script>
<script src="<?php echo SITEURL; ?>js/nice-select.min.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.slicknav.min.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo SITEURL; ?>js/plugins.js"></script>
<script src="<?php echo SITEURL; ?>js/gijgo.min.js"></script>
<!--contact js-->
<script src="<?php echo SITEURL; ?>js/contact.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.form.js"></script>
<script src="<?php echo SITEURL; ?>js/jquery.validate.min.js"></script>
<script src="<?php echo SITEURL; ?>js/mail-script.js"></script>
<script src="<?php echo SITEURL; ?>js/main.js"></script>
<script src="<?php echo SITEURL; ?>js/sweetalert2@10"></script>
<script src='<?php echo SITEURL; ?>js/slick.min.js'></script>
<!--    <script>
	jQuery( document ).ready(function( $ ) {
	  $(window).scroll(function() {
	    var scroll = $(window).scrollTop();
	  if (scroll >= 60) {
	  $(".skin").addClass("skin_srolld");
	  }
	else {
	  $(".skin").removeClass("skin_srolld");
	  }
	});
	});
	</script> -->
<script>
$(document).ready(function() {
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function() {
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function() {
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function() {
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});
</script>
<script>
$(document).ready(function() {
    $("#ready-1").hide();
});
</script>
<script>
$(document).ready(function() {
    $('#ready-2').show();
});
</script>
<script>
$(document).ready(function() {
    $('#ready-3').show();
});
</script>
<script>
$(document).ready(function() {
    $('.testiSlide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5500,
        responsive: [{
            breakpoint: 850,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        }]
    });
});
</script>
<script>
$(document).ready(function() {
    $('#quote_btn').prop('disabled', true);
    $('#submit_info').prop('disabled', true);
    $(document).on('change input', '.quote_class', function() {
        var count = 0;
        $('.quote_class').each(function() {
            if ($(this).val() != '') {
                count++;
            }
        });
        if (count == 4) {
            $('#quote_btn').prop('disabled', false);
        } else {
            $('#quote_btn').prop('disabled', true);
        }
    });

    document.validQuotePhone = false
    $(document).on('blur', '#quote_phone', function() {
        var siteurl = "<?php echo SITEURL; ?>";
        var phones = $(this).val();
        if (!isValidPhone($(this).val())) {
            document.validQuotePhone = false
            mayBeEnableSubmitBtn();
            $('#ph_valid').html('Please Enter Valid Phone Number');
        } else {
            $.ajax({
                url: siteurl + 'es.php',
                type: 'POST',
                data: {
                    payload: btoa(phones),
                    type: 2,
                },
                success: function(response) {
                    var myObject = JSON.parse(response);
                    if (myObject.response == 'error') {
                        document.validQuotePhone = false
                        $('#ph_valid').html('Please Enter Valid Phone Number');
                    } else {
                        document.validQuotePhone = true
                        $('#ph_valid').html('');
                    }
                    mayBeEnableSubmitBtn();
                }
            });
        }
    });

    document.validHomePhone = true
    $(document).on('blur', '#home_phone', function() {
        var siteurl = "<?php echo SITEURL; ?>";
        var phones = $(this).val();
        if ($(this).val() == "") {
            document.validHomePhone = true;
            $('#qa_valid').html('');
            mayBeEnableSubmitBtn();
            return;
        }

        if ($(this).val() != "" && !isValidPhone($(this).val())) {
            document.validHomePhone = false;
            mayBeEnableSubmitBtn();
            $('#qa_valid').html('Please Enter Valid Phone Number');
        } else {
            if ($(this).val() != "") {
                $.ajax({
                    url: siteurl + 'es.php',
                    type: 'POST',
                    data: {
                        payload: btoa(phones),
                        type: 2,
                    },
                    success: function(response) {
                        var myObject = JSON.parse(response);
                        if (myObject.response == 'error') {
                            document.validHomePhone = false;
                            mayBeEnableSubmitBtn();
                            $('#qa_valid').html('Please Enter Valid Phone Number');
                        } else {
                            
                            document.validHomePhone = true;
                            mayBeEnableSubmitBtn();
                            $('#qa_valid').html('');
                        }
                        mayBeEnableSubmitBtn();
                    }
                });
            } else {
                document.validHomePhone = true;
                mayBeEnableSubmitBtn();
                $('#qa_valid').html('');
                stage_3();
            }

        }

    });
    document.validEmail = false;
    $(document).on('blur', '#quote_email', function() {
        var siteurl = "<?php echo SITEURL; ?>";
        var emails = $(this).val();
        if (!isEmail($(this).val())) {
            document.validEmail = false;
            $('#email_valid').html('Please Enter Valid Email');
            mayBeEnableSubmitBtn();
        } else {
            $.ajax({
                url: siteurl + 'es.php',
                type: 'POST',
                data: {
                    payload: btoa(emails),
                    type: 1,
                },
                success: function(response) {
                    var myObject = JSON.parse(response);
                    if (myObject.response == 'error') {
                        document.validEmail = false;
                        $('#email_valid').html('Please Enter Valid Email');
                    } else {
                        document.validEmail = true;
                        $('#email_valid').html('');
                    }
                    mayBeEnableSubmitBtn();
                }
            });
        }
    });
    $(document).on('input', '#quote_zipcode', function() {
        if (!isValidZipcode($(this).val())) {
            $('#zip_valid').html('Please Enter Valid Zipcode');
        } else {
            $('#zip_valid').html('');
        }
    });
    $(document).on('change input', '.quote_user', function() {
        var count = 0;
        $('.quote_user').each(function() {
            if ($(this).val() != '') {
                count++;
            }
        });
        if (count == 5) {
            if (isEmail($('#quote_email').val()) && isValidZipcode($('#quote_zipcode').val()) &&
                isValidPhone($('#quote_phone').val())) {
                // $('#submit_info').prop('disabled', false);
            } else {
                // $('#submit_info').prop('disabled', true);
            }
        } else {
            // $('#submit_info').prop('disabled', true);
        }
    });

    $('#quote_first_name').on('change keyup', mayBeEnableSubmitBtn);
    $('#quote_last_name').on('change keyup', mayBeEnableSubmitBtn);

    function mayBeEnableSubmitBtn() {
        let validFirst = $('#quote_first_name').val().trim() != '';
        let validLast = $('#quote_last_name').val().trim() != '';
        // console.log({
        //     validHomePhone: document.validHomePhone,
        //     validCaptcha: document.validCaptcha,
        //     validQuotePhone: document.validQuotePhone,
        //     validEmail: document.validEmail
        // }, !(document.validHomePhone &&
        //     document.validCaptcha &&
        //     document.validQuotePhone &&
        //     document.validEmail &&
        //     validFirst &&
        //     validLast))
        setTimeout(() => {
            // console.log("disable", !(document.validHomePhone &&
            //     document.validCaptcha &&
            //     document.validQuotePhone &&
            //     document.validEmail &&
            //     validFirst &&
            //     validLast));
            $('#next3').prop('disabled', !(document.validHomePhone &&
                document.validCaptcha &&
                document.validQuotePhone &&
                document.validEmail &&
                validFirst &&
                validLast));
        }, 100);

    }
    document.mayBeEnableSubmitBtn = mayBeEnableSubmitBtn;

    $(document).on('click', '#submit_info', function(e) {
        
        var quote_year = $('#quote_year').val();
        var quote_make = $('#quote_make').val();
        var quote_mileage = $('#quote_mileage').val();
        var quote_model = $('#quote_model').val();
        var quote_phone = $('#quote_phone').val();
        var quote_first_name = $('#quote_first_name').val();
        var quote_last_name = $('#quote_last_name').val();
        var quote_email = $('#quote_email').val();
        var quote_zipcode = $('#quote_zipcode').val();
        $.ajax({
            url: 'quote-form.php',
            type: 'POST',
            data: {
                quote_year: quote_year,
                quote_make: quote_make,
                quote_mileage: quote_mileage,
                quote_model: quote_model,
                quote_phone: quote_phone,
                quote_first_name: quote_first_name,
                quote_last_name: quote_last_name,
                quote_email: quote_email,
                quote_zipcode: quote_zipcode,
                req_dump: "completed",
                cur_url: window.location.href
            },
            success: function(response) {

                $('#submit_info').attr('Value', 'Please Wait...').prop('disabled', true);
                setTimeout(function() {
                    $('#user_quote_form').addClass('d-none');
                    $('#exampleModalLongTitle').html('Success');
                    $('#quote_btn').prop('disabled', true);
                    $('#quote_contact_form').trigger('reset');
                    $('.form-msg').removeClass('d-none');
                    $('.form-msg').html(response);
                }, 1000);
            }
        });
    });

    $(document).on('click', '.close_model', function(e) {
        $("#exampleModalCenter").modal('hide');
        $('#user_quote_form').removeClass('d-none');
        $('#user_quote_form').trigger('reset');
        $('.form-msg').addClass('d-none');
        $('#exampleModalLongTitle').html('<strong>User Details</strong>');
        stage_3();
    });
});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function isValidZipcode(zipcode) {
    var regex = /(^\d{5}$)|(^\d{5}-\d{4}$)/;
    return regex.test(zipcode);
}

function isValidPhone(phone_number) {
    var regex = /^[0-9]{10}$/;
    return regex.test(phone_number);
}

$(function() {
    var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $("#navigation li").each(function() {
        if ($(this).children().attr("href") == pgurl || $(this).children().attr("href") == '#') {
            $(this).addClass("active");
        } else if (pgurl == '') {
            $('#navigation li.home-menu').addClass("active");
        }
    });
});
</script>
<script type="text/javascript">
$(function() {
    $('.owl-carousel.testimonial-carousel').owlCarousel({
        // autoPlay: true,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        nav: true,
        navText: ['<i class="fa fa-angle-double-left"></i>',
            '<i class="fa fa-angle-double-right"></i>'
        ],
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            750: {
                items: 2,
            }
        }
    });
});
</script>
<script>
$(document).ready(function() {
    var form_count = 1,
    form_count_form, next_form, total_forms;
    total_forms = $("fieldset").length;
    $(".next").click(function(event) {
        
        event.preventDefault();
        var spinid = $(this).attr('id');
        let previous = $(this).closest("fieldset").attr('id');
        let next = $('#' + this.id).closest('fieldset').next('fieldset').attr('id');
        let ref = $("#ref").val();

        var siteurl = "<?php echo SITEURL; ?>";
        var formArray = $('#multistep_form').serializeArray();
        var request_id = $('#request_id').val();
        var dev_rand_id = $('#dev_rand_id').val();
        var dev_f_chance = $('#dev_f_chance').val();
        var sys_id = $('#sys_id').val();
        
        $.ajax({
            url: siteurl + 'track.php',
            type: 'POST',
            data: {
                req_dump: next,
                cur_url: window.location.href,
                ref: ref,
                rq_data: request_id,
                sys_id: sys_id,
                formArray: formArray
            },
            beforeSend: function() {
                $('#' + spinid).addClass('loading');
            },
            success: function(response) {
              //  console.log(stage_3());
                $('#' + spinid).removeClass('loading');
                var myObject = JSON.parse(response);
                if (myObject.response == 'error') {
                    $('.VPN_message').html(
                        'Request from VPN connection is not supported at the moment');
                    return false;
                } else {
                    
                    console.log("Reached 1");
                    console.log("stage 2 = " + stage_2() );


                    $('.VPN_message').html('');
                    $('#' + next).show();
                    $('#' + previous).hide();
                    setProgressBar(++form_count);
                    if (stage_2() == false) {
                        console.log("Reached 2");

                        $('#next2').prop('disabled', true);
                    } else if (stage_3() == true) {
                        console.log("Reached 3");

                        var googleResponse = jQuery('#g-recaptcha-response').val();
                        var captchaResponse = window.grecaptcha.getResponse();
                        
                        if (captchaResponse === "") {

                            $("#form-loader").attr("style","display:block");

                            $(location).attr('href',
                                "<?php echo SITEURL . 'thank-you.php?es=2'; ?>")
                            return false;
                        }
                        
                        event.preventDefault();
                        var quote_year = $('#quote_year').val();
                        var quote_make = $('#quote_make').val();
                        var quote_mileage = $('#quote_mileage').val();
                        var quote_model = $('#quote_model').val();
                        var quote_phone = $('#quote_phone').val();
                        var quote_first_name = $('#quote_first_name').val();
                        var quote_last_name = $('#quote_last_name').val();
                        var quote_email = $('#quote_email').val();
                        var home_phone = $('#home_phone').val();
                        var quote_zipcode = $('#quote_zip').val();
                        var affid = $('#affid').val();
                        var ref = $('#ref').val();
                        var sid = $('#sid').val();
                        var uid = $('#uid').val();
                        var gclid = $('#gclid').val();
                        var tier = $('#tier').val();
                        var utm_source = $('#utm_source').val();
                        var utm_medium = $('#utm_medium').val();
                        var utm_campaign = $('#utm_campaign').val();
                        var utm_content = $('#utm_content').val();
                        var utm_term = $('#utm_term').val();
                        var request_id = $('#request_id').val();
                        var dev_rand_id = $('#dev_rand_id').val();
                        var zr_track_id = $('#zr_track_id').val();
                        var grecaptcha = captchaResponse;
                        var sys_id = $('#sys_id').val();
                        var ip = '<?php echo get_client_ip(); ?>';
                        if ($('#qtype').val() && $('#qtype').val() == 'qp') {
                            var qtype = $('#qtype').val();
                        } else {
                            var qtype = null;
                        }
                        $.ajax({
                            url: 'quote-s-form.php',
                            type: 'POST',
                            data: {
                                quote_year: quote_year,
                                quote_make: quote_make,
                                quote_mileage: quote_mileage,
                                quote_model: quote_model,
                                quote_phone: quote_phone,
                                quote_first_name: quote_first_name,
                                quote_last_name: quote_last_name,
                                quote_email: quote_email,
                                home_phone: home_phone,
                                quote_zipcode: quote_zipcode,
                                affid: affid,
                                ref: ref,
                                sid: sid,
                                uid: uid,
                                gclid: gclid,
                                sys_id: sys_id,
                                zr_track_id: zr_track_id,
                                tier: tier,
                                utm_source: utm_source,
                                utm_medium: utm_medium,
                                utm_campaign: utm_campaign,
                                utm_content: utm_content,
                                ip: ip,
                                utm_term: utm_term,
                                request_id: request_id,
                                dev_rand_id: dev_rand_id,
                                req_dump: 'completed',
                                qtype: qtype,
                                grecaptcha: grecaptcha,
                                cur_url: window.location.href
                            },
                            beforeSend: function() {
                                $("#form-loader").attr("style",
                                    "display:block");
                            },
                            success: function(response) {
                                var response = JSON.parse(response);
                                $(location).attr('href',
                                    "<?php echo SITEURL . 'thank-you.php?es='; ?>" +
                                    response.valid_email)
                            }
                        });
                    } else {
                        $('#next2').prop('disabled', false);
                    }
                }
            }
        });
    });


    window.addEventListener("pageshow", () => {
        stage_1();
    });

    stage_1();
    $('#quote_zip').on('input', function() {
        stage_1();
        if (!isValidZipcode($(this).val())) {
            $('#zip_valid').html('Please Enter Valid Zipcode');
        } else {
            $('#zip_valid').html('');
        }
    });
    $(document).on('change input', '.stage_2', function() {
        stage_2();
    });
    $(document).on('change input', '.stage_3', function() {
        stage_3();
        
    });

    $("#next2").click(function() {
        if (stage_3() == false) {
            
            $('.submit-form').prop('disabled', true);
        } else {
            $('.submit-form').prop('disabled', false);
        }
    });

    $(".previous").click(function() {

        let current = $(this).closest("fieldset").attr('id');
        let previous = $('#' + this.id).closest('fieldset').prev('fieldset').attr('id');
        $('#' + previous).show();
        $('#' + current).hide();
        setProgressBar(--form_count);

    });
    setProgressBar(form_count);

    function setProgressBar(curStep) {
        if (curStep <= 3) {
            var percent = parseFloat(100 / total_forms) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
                .html(percent + "%");
        }
    }
});
</script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
<script>
$(document).ready(function() {

    $('.ca_form').on('click', function(event) {
        var quote_year = $('#quote_year').val();
        var quote_make = $('#quote_make').val();
        var quote_mileage = $('#quote_mileage').val();
        var quote_model = $('#quote_model').val();
        var quote_phone = $('#quote_phone').val();
        var quote_first_name = $('#quote_first_name').val();
        var quote_last_name = $('#quote_last_name').val();
        var quote_email = $('#quote_email').val();
        var quote_zipcode = $('#quote_zip').val();
        var affid = $('#affid').val();
        var ref = $('#ref').val();
        var sid = $('#sid').val();
        var uid = $('#uid').val();
        var gclid = $('#gclid').val();
        var tier = $('#tier').val();
        var utm_source = $('#utm_source').val();
        var utm_medium = $('#utm_medium').val();
        var utm_campaign = $('#utm_campaign').val();
        var utm_content = $('#utm_content').val();
        var utm_term = $('#utm_term').val();
        var siteurl = "<?php echo SITEURL; ?>";
        $.ajax({
            url: siteurl + 'quote-ca-form.php',
            type: 'POST',
            data: {
                quote_year: quote_year,
                quote_make: quote_make,
                quote_mileage: quote_mileage,
                quote_model: quote_model,
                quote_phone: quote_phone,
                quote_first_name: quote_first_name,
                quote_last_name: quote_last_name,
                quote_email: quote_email,
                quote_zipcode: quote_zipcode,
                affid: affid,
                ref: ref,
                sid: sid,
                uid: uid,
                gclid: gclid,
                tier: tier,
                utm_source: utm_source,
                utm_medium: utm_medium,
                utm_campaign: utm_campaign,
                utm_content: utm_content,
                utm_term: utm_term,
                req_dump: 'completed',
                cur_url: window.location.href
            },
            beforeSend: function() {
                $("#form-loader").attr("style", "display:block");
            },
            success: function(response) {
                $("#form-loader").attr("style", "display:none");
                /*
	           Swal.fire({
	            icon: 'success',
	          title: "An agent will be contacting your shortly",
	          type: "info",
	          buttonsStyling: true,
	          confirmButtonText: "ok",
	        }).then(function(isConfirm){
	            if(isConfirm){
	              location.reload();
	          }
	        });
	  */
                $(location).attr('href', "<?php echo SITEURL . 'thank-you.php'; ?>");
                // $(location).attr('href',"<?php echo SITEURL . 'thank-you.php?ref='; ?>"+response.ref)
            }
        });

    });
});

function stage_1() {
    if ($('#quote_zip').val() != '' && isValidZipcode($('#quote_zip').val())) {
        $('.next').prop('disabled', false);
        return true;
    } else {
        $('.next').prop('disabled', true);

        return false;
    }
}

function stage_2() {
    var count = 0;
    $('.stage_2').each(function() {
        if ($(this).val() != '') {
            count++;
        }
    });
    if (count == 4 && isMileageLimit($('#quote_mileage').val())) {
        $('#next2').prop('disabled', false);
        return true;
    } else {

        $('#next2').prop('disabled', true);
        return false;
    }
}

function stage_3() {
    var count = 0;
    $('.stage_3').each(function() {
        if ($(this).val() != '') {
            count++;
        }
    });

    if (count == 4) {
        if (isEmail($('#quote_email').val()) && isValidPhone($('#quote_phone').val()) ) {
            $('#captcha_valid').html('');
            return true;
        }  else {

            $('#captcha_valid').html('');
            return false;
        }
        if (isEmail($('#quote_email').val()) && isValidPhone($('#quote_phone').val())) {
            
            return true;
        } else {
            
            return false;
        }
    } else {
        // $('.submit-form').prop('disabled', true);
        return false;
    }
}

function isMileageLimit(limit) {
    if (limit.replace(/,/g, '') <= 120000) {
        $('#q_mileage').html('');

        return true;
    } else {
        if ($.isNumeric(limit.replace(/,/g, ''))) {
            $('#q_mileage').html("We don't cover vehicles over 120,000 miles");
        } else {
            $('#q_mileage').html("Please enter digits only");
        }
        return false;
    }
}
$(document).on('keyup', '#quote_mileage', function(e) {

    if (isMileageLimit($(this).val())) {
        updateTextView($(this));
    }
});
</script>
<?php
date_default_timezone_set('US/Eastern');
$service_url = "https://crm.selectautoprotect.com/getCallSetting";
//$service_url = "http://sap_admin.local/getCallSetting";
//$auth = "demo@sap.com:password";
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($curl, CURLOPT_POST, true);
//curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
$curl_response = curl_exec($curl);
$response = json_decode($curl_response);
curl_close($curl);
/*weekdays*/
$weekarr = [1, 2, 3, 4, 5];

$callnowTime = false;
if (isset($response->response->callnow_time->in_time) && isset($response->response->callnow_time->out_time)) {
    $inTime = strtotime($response->response->callnow_time->in_time);
    $outTime = strtotime($response->response->callnow_time->out_time);
    if ($inTime <= strtotime(date('h:i A')) && $outTime >= strtotime(date('h:i A'))) {
        if (in_array((int) date("w"), $weekarr)) {
            $callnowTime = true;
        }
    } else {

        if ($outTime < $inTime) {
            if ($inTime > strtotime(date('h:i A')) && $outTime < strtotime(date('h:i A'))) {
                $callnowTime = false;
            } else {
                if (in_array((int) date("w"), $weekarr)) {
                    $callnowTime = true;
                }
            }
        }
    }
}
$callnow_toggle = isset($response->response->callnow_toggle) ? (string) $response->response->callnow_toggle : 0;

if ($popup_flag && isset($response) && ($callnow_toggle == 1 || $callnowTime) && trim(basename($_SERVER['PHP_SELF'])) == "quote.php") {
    $data = [
        'ip' => get_client_ip(),
        'referrer_site' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
        'server_dump' => json_encode($_SERVER),
        'request_dump' => 'popup',
        'token' => $_SESSION['token'],
        'current' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
        'previous' => (isset($_SESSION['previous']) ? $_SESSION['previous'] : ''),
        'browser' => getBrowserInfo()['browser'],
        'version' => getBrowserInfo()['browser_version'],
        'is_desktop' => ((getBrowserInfo()['device'] == "Desktop") ? '1' : '0'),
        'is_phone' => ((getBrowserInfo()['device'] == "Desktop") ? '0' : '1'),
        'device' => getBrowserInfo()['device'],
        'platform' => getBrowserInfo()['os_platform'],
        'landing_page' => '',
        'created_at' => date("Y-m-d h:i:s"),
        'updated_at' => date("Y-m-d h:i:s"),
        'ref_id' => isset($_GET['ref']) ? $_GET['ref'] : '',
    ];
    insert_data($data);
?>
<script>
$(document).ready(function() {
    const showTime = 3000; //30 sec
    var popupflag = 0;
    // $(document).mouseleave(function() {
    //     var mouseY = 0;
    //     if (mouseY < 100 && popupflag == 0) {
    //         if ($("#exitofferpopup").attr("data-pop") == 0) {
    //             $('#exitofferpopup').modal('show');
    //             var popupflag = 1;
    //             $("#exitofferpopup").attr("data-pop", "1");
    //         }
    //     }
    // });
    if (popupflag == 0) {
        $("#quote_model").focus(function() {
            if ($("#exitofferpopup").attr("data-type") == 0) {
                $('#exitofferpopup').modal('show');
                var popupflag = 1;
                $("#exitofferpopup").attr("data-type", "1");
            }

        });
    }
    // if (popupflag == 0) {
    //     setTimeout(() => {
    //         $('#exitofferpopup_2').modal('show');
    //         /* $('#exitofferpopup').show();*/
    //     }, showTime);
    //     var popupflag = 1;
    // }
});
$('.popup_call_now').on('click', function() {
    let ref = $("#ref").val();
    let referrer_site = '<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>';
    $.ajax({
        url: 'data_insert_ajax.php',
        type: 'POST',
        data: {

            request_dump: "callnow_popup_clicked",
            ref: ref,
            referrer_site: referrer_site,

        },

    });
});
</script>
<?php } ?>
<?php echo '<div style="display:none;" class="dateTimephp">' . date('h:i A') . '</div>'; ?>
<script type="text/javascript">
(function($) {
    "use strict";
    $.fn.aksCountDown = function(options) {
        const aks = $(this);
        var settings = $.extend({
                endTime: "2025-12-28T00:00:00",
                refresh: 1000,
                onEnd: function() {}
            },
            options
        );
        return this.each(function(i) {
            function endTimeCheck(d1, d2) {
                return (
                    d1.getFullYear() === d2.getFullYear() &&
                    d1.getMonth() === d2.getMonth() &&
                    d1.getDate() === d2.getDate()
                );
            }

            function countTimer() {
                var endTime = new Date(settings.endTime);
                endTime = Date.parse(endTime) / 1000;
                //alert("endtime"+endTime);
                var now = new Date();
                now = Date.parse(now) / 1000;

                var timeLeft = endTime - now;

                var days = Math.floor(timeLeft / 86400);
                var hours = Math.floor((timeLeft - days * 86400) / 3600);
                var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
                var seconds = Math.floor(
                    timeLeft - days * 86400 - hours * 3600 - minutes * 60
                );

                if (hours < "10") {
                    hours = "0" + hours;
                }
                if (minutes < "10") {
                    minutes = "0" + minutes;
                }
                if (seconds < "10") {
                    seconds = "0" + seconds;
                }

                // alert(hours);

                //  $(aks).find("[data-days]").html(days);
                $(aks).find("[data-hours]").html(hours);
                $(aks).find("[data-minutes]").html(minutes);
                $(aks).find("[data-seconds]").html(seconds);
            }
            var now = new Date();
            var endTime = new Date(settings.endTime);

            if (endTimeCheck(now, endTime) === true) {
                settings.onEnd.call(aks);
            } else {
                setInterval(function() {
                    countTimer();
                    //  alert(2);
                }, settings.refresh);
            }
        });
    };
})(jQuery);

$("#timer").aksCountDown({
    endTime: "2025-12-28T00:00:00",
    onEnd: function() {
        $(this).html('');
    }
});

$("#timer-mobile").aksCountDown({
    endTime: "2025-12-28T00:00:00",
    onEnd: function() {
        $(this).html('');
    }
});
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6LeG-xYjAAAAACCqZmiCvvQDuSKgjKYHaUKtQn4H"></script>
<script>
function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function() {
        grecaptcha.execute('6LeG-xYjAAAAACCqZmiCvvQDuSKgjKYHaUKtQn4H', {
            action: 'submit'
        }).then(function(token) {
            // Add your logic to submit to your backend server here.
        });
    });
}

$(".stars").each(function() {
    var starcount = $(this).attr('rating');
    $('.stars').html(getStars(starcount));
});

function getStars(rating) {

    // Round to nearest half
    rating = Math.round(rating * 2) / 2;
    let output = [];

    // Append all the filled whole stars
    for (var i = rating; i >= 1; i--)
        output.push('<i class="fa fa-star" aria-hidden="true" style="color: gold;"></i>&nbsp;');

    // If there is a half a star, append it
    if (i == .5) output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

    // Fill the empty stars
    for (let i = (5 - rating); i >= 1; i--)
        output.push('<i class="fa fa-star-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

    return output.join('');

}

function updateTextView(_obj) {
    var num = getNumber(_obj.val());
    if (num == 0) {
        _obj.val('');
    } else {
        _obj.val(num.toLocaleString());
    }
}

function getNumber(_str) {
    var arr = _str.split('');
    var out = new Array();
    for (var cnt = 0; cnt < arr.length; cnt++) {
        if (isNaN(arr[cnt]) == false) {
            out.push(arr[cnt]);
        }
    }
    return Number(out.join(''));
}
</script>
</body>

</html>