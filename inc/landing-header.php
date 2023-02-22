<?php session_destroy();
session_start(); ?>
<!Doctype html>
<?php define('SITEURL', 'http://localhost:81/'); ?>
<?php include('db.php'); ?>
<html class="no-js" lang="zxx">

<?php include('api_validate.php');

header('Access-Control-Allow-Origin: *');
$randomnumber = uniqid();
$randomnumber;
$email = "sarab".$randomnumber."@sarabjeetdhillon.com";
?>
<head>

<script src="https://www.ipqscdn.com/api/selectautoprotect.com/GqsywR6r6oZty0Ivd5WN7HCwWm0yURdyNTnfwFjQ8i3PF3uDBbu3qE5jCj92kuARFTPThK4EBfCNi06YUIrBqBDBx8rQ41Na0LNGSzFsypwQQ26MAXZRQ5TSa5O29nGAFCvUdsn8AP4WESLVOj3GDGD7LNCiCuOhCkrMw8wvj5tXIEKULQIRVQKeS4FVOlXYPjLka5e0z8Sg1AqnTGr1q6ie0wUXk5j5ApA7qMUoWtZ0t9azEUYYPdOn8V0ONifx/learn.js" crossorigin="anonymous"></script>
    <?php  if( $ipqualityscore['proxy'] != 1 || $ipqualityscore['bot_status'] !=1 || $ipqualityscore['fraud_score'] <= 25 ){ ?>
  <!-- Global site tag (gtag.js) - Google Ads: 370456452 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-370456452"></script>
  <script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
      c[a] = c[a] || function() {
        (c[a].q = c[a].q || []).push(arguments)
      };
      t = l.createElement(r);
      t.async = 1;
      t.src = "https://www.clarity.ms/tag/" + i;
      y = l.getElementsByTagName(r)[0];
      y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "dbl0pmca0k");
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
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
<?php } ?>
<?php if(get_client_ip() == '148.74.24.247' || get_client_ip() == '132.154.152.185' ) {
include('404.php'); // provide your own HTML for the error page
die();
}
  ?>
  <script src="https://www.googleoptimize.com/optimize.js?id=OPT-53924KT"></script>
  <meta charset="utf-8">
  <meta name="robots" CONTENT="noindex">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <title>Select Auto Protect</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo SITEURL; ?>img/autofavicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js"></script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NR8LLRW');
  </script>
  <!-- End Google Tag Manager -->
  <!-- CSS here -->
  <link rel="stylesheet" href="<?php echo SITEURL; ?>css/homepage.css">
  <link rel="stylesheet" href="<?php echo SITEURL; ?>css/fontawesome.min.css" />
  <link rel="stylesheet" href="<?php echo SITEURL; ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo SITEURL; ?>css/style.css?ver=<?php echo rand(); ?>">
  <link rel="stylesheet" href="<?php echo SITEURL; ?>css/slicknav.css">
  <link rel="stylesheet" href="<?php echo SITEURL; ?>css/googleapis.min.css">
  <link rel="stylesheet" href="<?php echo SITEURL; ?>css/bootstrapcdn.min.css">
  <link rel="stylesheet" href="<?php echo SITEURL; ?>css/owlcarousel.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/reviews.css">

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <style type="text/css">
    .blink {
      animation: blinker 1.5s cubic-bezier(0.32, -1.26, 1, 1) infinite;
      color: #1c87c9;
      font-size: 30px;
      font-weight: bold;
      font-family: sans-serif;
    }

    @keyframes blinker {
      50% {
        opacity: 0;
      }
    }

    .blink-one {
      animation: blinker-one 1s linear infinite;
    }

    @keyframes blinker-one {
      0% {
        opacity: 0;
      }
    }

    .blink-two {
      animation: blinker-two 1.4s linear infinite;
    }

    @keyframes blinker-two {
      100% {
        opacity: 0;
      }
    }

    #timer {
      display: flex;
      flex-direction: column;
      /*  align-items: center;
         justify-content: center;
         height: 100vh;
         width: 100%;*/
    }

    #timer-mobile {
      display: flex;
      flex-direction: column;
      color: white;
      /*  align-items: center;
         justify-content: center;
         height: 100vh;
         width: 100%;*/
    }

    .number-list {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 84%;
    }

    .number-list .itemo {
      width: 60px;
      height: 60px;
      background: #0b949f;
      margin-right: 15px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: #fffff;
      font-weight: 700;
      font-family: sans-serif;
    }

    .unit-list {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 10px;
      width: 84%;
    }

    .unit-list .itemo {
      width: 60px;
      margin-right: 15px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      color: #000000;
      font-weight: 500;
      font-family: sans-serif;
    }

    .timer-end {
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: #006741;
      font-weight: 700;
      font-family: sans-serif;
    }

    .edt-tp-sl {
      width: 100%;
    }

    .cst-log-op {
      text-align: left;
    }

    @media (max-width: 767px) {
      .cst-log-op {
        width: 100% !important;
        text-align: center !important;
      }

      .edt-tp-sl {
        width: 45%;
        margin-bottom: 4%;
      }

      .unit-list {
        width: 100%;
      }

      .number-list {
        width: 100%;
      }
    }

    .cst-log-op {
      width: 100%;
    }
    .widget-wrap .countdown-title {
    font-family: Righteous, cursive;
    color: rgb(11, 148, 159);
    font-size: 22px;
}
.widget-wrap .countdown {
    display: flex;
    justify-content: center;
}
.countdown .countdown-number {
    margin-right: 15px;
    display: flex;
    flex-direction: column;
}
.countdown .countdown-number .countdown-time {
    font-size: 35px;
    background-color: rgb(51, 51, 51);
    color: rgb(255, 255, 255);
    font-family: Righteous, cursive;
    width: 60px;
    height: 60px;
    line-height: 60px;
    border-radius: 10px;
    display:inline-block;
}
.countdown .countdown-number .countdown-text {
    text-transform: capitalize;
    margin-top: 5px;
}
.countdown .seconds.countdown-time {
    background-color: rgb(233, 96, 87) !important;
}
  </style>
  <?php
  $contact = '860 506 0565';
 if(isset($_GET['ref']) && $_GET['ref'] == '8936' && $ipqualityscore['fraud_score'] <= 50 && $_SESSION['fraud_chance'] < 85){
 
    echo "<script> (function(i,n,v,o,c,a) { i.InvocaTagId = o; var s = n.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = ('https:' === n.location.protocol ? 'https://' : 'http://' ) + v; var fs = n.getElementsByTagName('script')[0]; fs.parentNode.insertBefore(s, fs); })(window, document, 'solutions.invocacdn.com/js/invoca-latest.min.js', '1666/0840003532'); </script>";

    $contact = '(860) 294-4996';
  }
  if (isset($_GET['ref']) && $_GET['ref'] == '5281') {
    $contact = '860 294 4996';
  }
  $ref_contact = getLeadsourceData();
  if (isset($ref_contact->show_portal) && $ref_contact->show_portal == 1) {
    $contact = (isset($ref_contact->sales_phone_no) && !empty($ref_contact->sales_phone_no)) ? $ref_contact->sales_phone_no : '860 506 0565';
  }
  ?>
</head>

<body>
<noscript><img src="https://www.ipqscdn.com/api/selectautoprotect.com/GqsywR6r6oZty0Ivd5WN7HCwWm0yURdyNTnfwFjQ8i3PF3uDBbu3qE5jCj92kuARFTPThK4EBfCNi06YUIrBqBDBx8rQ41Na0LNGSzFsypwQQ26MAXZRQ5TSa5O29nGAFCvUdsn8AP4WESLVOj3GDGD7LNCiCuOhCkrMw8wvj5tXIEKULQIRVQKeS4FVOlXYPjLka5e0z8Sg1AqnTGr1q6ie0wUXk5j5ApA7qMUoWtZ0t9azEUYYPdOn8V0ONifx/pixel.png?userID=<?php echo $randomnumber;?>&email=<?php echo $email; ?>" /></noscript>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NR8LLRW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="header-area">
      <div class="header-top_area skin p-0" id="skin_h">
        <div class="container">
          <div class="row align-items-center py-3">
            <div class="col-lg-9 col-md-8">
              <div class="social_media_links cst-log-op">
                <div class="logo ">
                  <a href="/" class="m-0">
                    <img src="<?php echo SITEURL; ?>img/auto-logo.png" alt="Logo">
                    <!-- <img src="<?php echo SITEURL; ?>img/logo.png" alt="Logo"> -->
                  </a>
                </div>
                <div class="contact">
                                    <a href="tel:<?php echo $contact;?>" alt="link on telephone number">
                  <i class="fa fa-volume-control-phone"></i><?php echo $contact; ?><br>
                                           <p>Don't want to wait? Call Now</p></a>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-6 col-md-6 text-center">
                              <div class="widget-wrap">
                                <h1 class="countdown-title">Cyber Monday Sale</h1>
                                  <div id="countdown" class="countdown">
                                    <div class="countdown-number">
                                      <span class="days countdown-time"></span>
                                      <span class="countdown-text">Days</span>
                                    </div>
                                    <div class="countdown-number">
                                      <span class="hours countdown-time"></span>
                                      <span class="countdown-text">Hours</span>
                                    </div>
                                    <div class="countdown-number">
                                      <span class="minutes countdown-time"></span>
                                      <span class="countdown-text">Minutes</span>
                                    </div>
                                    <div class="countdown-number">
                                      <span class="seconds countdown-time"></span>
                                      <span class="countdown-text">Seconds</span>
                                    </div>
                                  </div>

                                
                              </div>
                            </div> -->
            <?php /*
                            <div class="col-md-2 col-12 text-center">
                  <img class="edt-tp-sl blink" src="<?php echo SITEURL;?>img/cyb_tp.png" alt="Logo">
               </div>
               <div class="col-md-4 col-12 text-center">
                  <!-- <img class="blink st-im" src="assets/images/tp_br.png"> -->
                  <div id="timer">
                     <div class="number-list">
                        <!--     <div class="itemo" data-days="">00</div> -->
                        <div class="itemo" data-hours="" style="color:#ffffff">00</div>
                        <div class="itemo" data-minutes="" style="color:#ffffff">00</div>
                        <div class="itemo" data-seconds="" style="color:#ffffff">00</div>
                     </div>
                     <div class="unit-list">
                        <!--     <div class="itemo">Day</div> -->
                        <div class="itemo">Hour</div>
                        <div class="itemo">Min</div>
                        <div class="itemo">Sec</div>
                     </div>
                  </div>
               </div>
              
            <!-- <div class="col-lg-6 col-md-4 d-none d-lg-block"> -->
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
            <!-- </div> --> */ ?>
            <div class="col-lg-3 col-md-4 d-none d-lg-block">
              <div class="short_contact_list d-none d-lg-flex justify-content-end text-left p-0">
                <ul>
                  <li class="header-call"><a href="tel:<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $contact); ?>"><i class="fa fa-phone"></i><?php echo $contact; ?></a></li>
                  <li><a href="tel:<?php echo preg_replace('/[^A-Za-z0-9\-]/', '', $contact); ?>"><span>Don't want to wait? Call Now</span></a></li>
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