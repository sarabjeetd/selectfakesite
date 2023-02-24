<?php 
session_destroy();
session_start(); 
include('db.php');?>
<!Doctype html>
<?php //define ('SITEURL', 'http://localhost/'); ?>
<html class="no-js" lang="en">

<?php 
include('api_validate.php');
header('Access-Control-Allow-Origin: *');
$randomnumber = uniqid();
$randomnumber;
?>
<head>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo isset($title)?$title:'Select Auto Protect'; ?></title>
    <meta name="description" content="<?php echo isset($description)?$description:''; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="KZp7cFEhIXc_gjFJnfx3d9hpF5rL4nHPUSlRjJmsFoY" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo SITEURL;?>img/autofavicon.png">
    <!-- CSS here -->
      <link rel="stylesheet" href="<?php echo SITEURL;?>css/fontawesome.min.css"  />
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/style.css?ver=<?php echo rand(); ?>">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/slicknav.css">
  <link rel="stylesheet" href="<?php echo SITEURL;?>css/googleapis.min.css">

  <link rel="stylesheet" href="<?php echo SITEURL;?>css/bootstrapcdn.min.css">
  <link rel="stylesheet" href="<?php echo SITEURL;?>css/owlcarousel.min.css">
   <link rel='stylesheet' href='<?php echo SITEURL;?>css/sweetalert2.min.css'>
   <!-- Review CSS -->
  
	<link rel="stylesheet" type="text/css" href="css/reviews.css">
    
</head>
<body>

<?php 
	$contact = '860 393 0962'; 

	$ref_contact = getLeadsourceData();
	if(isset($ref_contact->show_portal) && $ref_contact->show_portal == 1){
		$contact = (isset($ref_contact->sales_phone_no) && !empty($ref_contact->sales_phone_no))?$ref_contact->sales_phone_no:'860 393 0962'; 
	}
?>
<header id="top">
        <div class="header-area">
            <div class="header-top_area skin p-0" id="skin_h">
                    <div class="container">
                        <div class="row align-items-center py-3">
                            <div class="col-lg-3 col-md-4 col-xs-12">
                                <div class="social_media_links text-left">
                                    <div class="logo">
                                      <a href="/" class="m-0">
                                        <img src="img/auto-logo.png" alt="Logo image for selectautoprotect.com">
                                      </a>
                                    </div>
                                    <div class="contact">
                                    <a href="tel:<?php echo $contact;?>" alt="link on telephone number">
                                           <i class="fa fa-volume-control-phone"></i><?php echo $contact;?><br>
                                           <p>Don't want to wait? Call Now</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 d-none d-xl-block d-lg-block">
                                <div id="" class="main-header-area bg-transparent"> 
                                        <div class="row align-items-center">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="main-menu  d-none d-xl-block d-lg-block">
                                                    <nav role="navigation">
                                                        <ul id="navigation" class="menu">
                                                            <li class="home-menu"><a  href="/">home</a></li>
                                                            <li><a href="plan.php">plan</a></li>
                                                            <li><a href="faq.php">faq</a></li>
															<li><a href="reviews.php">reviews</a></li>
                                                            <li><a href="contact-us.php">contact us</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>

                                        </div> 
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 d-none d-xl-block d-lg-block">
                                <div class="short_contact_list d-none d-lg-flex justify-content-end text-left p-0">
                                    <ul>
                                        <li class="header-call"><a href="tel:<?php echo $contact;?>" alt="link on telephone number"><i class="fa fa-phone"></i><?php echo $contact;?></a></li>
                                        <li><a><span>Don't want to wait? Call Now</span></a></li>
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