<?php session_start(); ?>
<!Doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo isset($title)?$title:'Select Auto Protect'; ?></title>
    <meta name="description" content="<?php echo isset($description)?$description:''; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<!-- Global site tag (gtag.js) - Google Ads: 370456452 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-370456452"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-370456452');
</script>
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-53924KT"></script>
<meta name="google-site-verification" content="KZp7cFEhIXc_gjFJnfx3d9hpF5rL4nHPUSlRjJmsFoY" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RNTEFS9MDK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RNTEFS9MDK');
</script>
<?php 
	$contact = '860 393 0962'; 
	if(isset($_GET['ref']) && $_GET['ref'] == '8936'){
		$contact = '(860) 294-4996'; 
		echo "<script> (function(i,n,v,o,c,a) { i.InvocaTagId = o; var s = n.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = ('https:' === n.location.protocol ? 'https://' : 'http://' ) + v; var fs = n.getElementsByTagName('script')[0]; fs.parentNode.insertBefore(s, fs); })(window, document, 'solutions.invocacdn.com/js/invoca-latest.min.js', '1666/0840003532'); </script>";
	}											
?>
</head>
<body>
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
                                           <i class="fa fa-volume-control-phone"></i>860 393 0962<br>
                                           <p> CALL FOR YOUR FREE QUOTE NOW!
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
                                        <li><a href="tel:<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $contact); ?>" alt="link on telephone number"><i class="fa fa-phone"></i><?php echo $contact; ?></a></li>
                                        <li><a><span>Call For Your Free Quote Now!</span></a></li>
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