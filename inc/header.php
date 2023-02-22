<?php 
session_destroy();
session_start(); 
include('db.php');?>
<!Doctype html>
<?php //define ('SITEURL', 'https://selectautoprotect.com/'); ?>
<html class="no-js" lang="en">

<?php include('api_validate.php');

header('Access-Control-Allow-Origin: *');
$randomnumber = uniqid();
$randomnumber;
?>
<head>
<script type="text/javascript">
    window.__lo_site_id = '7de7b3ff';
    (function() {
      var wa = document.createElement('script');
      wa.type = 'text/javascript'; wa.async = true;
      wa.src = 'https://d20519brkbo4nz.cloudfront.net/core/lo.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wa, s);
    })();
  </script>
<script src="https://www.ipqscdn.com/api/selectautoprotect.com/GqsywR6r6oZty0Ivd5WN7HCwWm0yURdyNTnfwFjQ8i3PF3uDBbu3qE5jCj92kuARFTPThK4EBfCNi06YUIrBqBDBx8rQ41Na0LNGSzFsypwQQ26MAXZRQ5TSa5O29nGAFCvUdsn8AP4WESLVOj3GDGD7LNCiCuOhCkrMw8wvj5tXIEKULQIRVQKeS4FVOlXYPjLka5e0z8Sg1AqnTGr1q6ie0wUXk5j5ApA7qMUoWtZ0t9azEUYYPdOn8V0ONifx/learn.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <?php  if( $ipqualityscore['proxy'] != 1 || $ipqualityscore['bot_status'] !=1 || $ipqualityscore['fraud_score'] <= 50 ){ ?>
<!-- Global site tag (gtag.js) - Google Ads: 370456452 -->
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
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-53924KT"></script>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR8LLRW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php } ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo isset($title)?$title:'Select Auto Protect'; ?></title>
    <meta name="description" content="<?php echo isset($description)?$description:''; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="KZp7cFEhIXc_gjFJnfx3d9hpF5rL4nHPUSlRjJmsFoY" />
<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NR8LLRW');</script>
<!-- End Google Tag Manager -->
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
    <meta name="facebook-domain-verification" content="31b49cs178wffbhkrmos1w85kxg1va" />
    
</head>
<body>
<noscript><img src="https://www.ipqscdn.com/api/selectautoprotect.com/GqsywR6r6oZty0Ivd5WN7HCwWm0yURdyNTnfwFjQ8i3PF3uDBbu3qE5jCj92kuARFTPThK4EBfCNi06YUIrBqBDBx8rQ41Na0LNGSzFsypwQQ26MAXZRQ5TSa5O29nGAFCvUdsn8AP4WESLVOj3GDGD7LNCiCuOhCkrMw8wvj5tXIEKULQIRVQKeS4FVOlXYPjLka5e0z8Sg1AqnTGr1q6ie0wUXk5j5ApA7qMUoWtZ0t9azEUYYPdOn8V0ONifx/pixel.png?userID=<?php echo $randomnumber;?>" /></noscript>


<?php if(get_client_ip() == '148.74.24.247' || get_client_ip() == '132.154.152.185') {
include('404.php'); // provide your own HTML for the error page
die();
}
  ?>
<!-- End Google Tag Manager (noscript) -->
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