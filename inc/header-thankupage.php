<!Doctype html>
<?php //define ('SITEURL', 'https://selectautoprotect.com/'); ?>
<?php define ('SITEURL', '/'); ?>
<!-- Global site tag (gtag.js) - Google Ads: 370456452 -->
<?php include('api_validate.php');?>

<?php  if( $ipqualityscore['proxy'] != 1 || $ipqualityscore['bot_status'] !=1 || $ipqualityscore['fraud_score'] <= 25 ){ ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-370456452"></script>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "dbl0pmca0k");
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-370456452');
</script>
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3263501,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Event snippet for Lead Conversion conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-370456452/GC33CNOxuskCEITv0rAB'});
</script>
<?php } ?>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Select Auto Protect</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo SITEURL;?>img/autofavicon.png">
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NR8LLRW');</script>
<!-- End Google Tag Manager -->

    <!-- CSS here -->
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/fontawesome.min.css"  />
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/style.css?ver=<?php echo rand(); ?>">
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/slicknav.css">
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/googleapis.min.css">
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/bootstrapcdn.min.css">
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/owlcarousel.min.css">	
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <style>

        .thankyou-custom {
            position: absolute;
            width: 100%;
            bottom: 0;
        }
        @media only screen and (min-width: 668px) and (max-width: 767px){
            .header-area .header-top_area .short_contact_list {
            display: block!important;
        }
        }
        @media only screen and (min-width: 576px) and (max-width: 667px){
            .header-area .header-top_area .short_contact_list {
            display: block!important;
        }
        .header-area .header-top_area .social_media_links .contact {
        display: none !important;
        }
        .logo img {
            width: 80%;
            max-height: none;
        }
        }   
        @media only screen and (min-width: 480px) and (max-width: 575px){
        .social_media_links .logo {
        width: 50%;
        margin: auto;
            }
        }
        @media only screen and (min-width: 320px) and (max-width: 575px){
            .header-area .header-top_area .short_contact_list {
            display: none!important;
        }
        .social_media_links .logo {
        width: 50%;
        margin: auto;
            }
        .header-area .header-top_area .social_media_links .contact {
            display: block !important;
        }
        }

        @media only screen and (min-width: 320px) and (max-width: 480px){
        .social_media_links .logo {
        width: 80%;
            }
        }
        
    </style>
</head>
<body>
<?php 
	$contact = '860 393 0962'; 

	$ref_contact = getLeadsourceData();
	if(isset($ref_contact->show_portal) && $ref_contact->show_portal == 1){
		$contact = (isset($ref_contact->sales_phone_no) && !empty($ref_contact->sales_phone_no))?$ref_contact->sales_phone_no:'860 393 0962'; 
	}
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR8LLRW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
        <div class="header-area">
            <div class="header-top_area skin p-0" id="skin_h">
                    <div class="container">
                        <div class="row align-items-center py-3 justify-content-between">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-12">
                                <div class="social_media_links text-left">
                                    <div class="logo">
                                      <a href="/" class="m-0">
                                        <img src="<?php echo SITEURL;?>img/auto-logo.png" alt="Logo">
                                        <!-- <img src="<?php echo SITEURL;?>img/logo.png" alt="Logo"> -->
                                      </a>
                                    </div>
                                    <div class="contact">
                                    <a href="tel:<?php echo $contact;?>" alt="link on telephone number">
                                           <i class="fa fa-volume-control-phone"></i><?php echo $contact;?><br>
                                           <p>Don't want to wait? Call Now</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-2 col-12 d-none d-lg-block">
                                <!-- <div id="" class="main-header-area bg-transparent"> 
                                        <div class="row align-items-center">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="main-menu  d-none d-lg-block">
                                                    <nav>
                                                        <ul id="navigation">
                                                            <li class="home-menu"><a  href="index.php">home</a></li>
                                                            <li><a href="plan.php">plan</a></li>
                                                            <li><a href="faq.php">faq</a></li>
                                                            <li><a href="contact-us.php">contact us</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            
                                        </div> 
                                </div> -->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-lg-block">
                                <div class="short_contact_list d-lg-flex justify-content-end text-left p-0">
                                    <ul>
                                        <li class="header-call"><a href="tel:8605060565"><i class="fa fa-phone"></i>860 506 0565</a></li>
                                        <li><a href="tel:8605060565"><span>Don't want to wait? Call Now</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-8 p-0 mobile-menu">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                        
            </div>
        </div>
    </header>