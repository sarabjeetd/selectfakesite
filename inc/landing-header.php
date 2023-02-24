<?php session_destroy();
session_start(); ?>
<!Doctype html>
<?php define('SITEURL', 'http://localhost/'); ?>
<?php include('db.php'); ?>
<html class="no-js" lang="zxx">

<?php 
include('api_validate.php');
header('Access-Control-Allow-Origin: *');
$randomnumber = uniqid();
$randomnumber;
?>
<head>
  <meta charset="utf-8">
  <meta name="robots" CONTENT="noindex">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Select Auto Protect</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo SITEURL; ?>img/autofavicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js"></script>
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

</head>

<body>

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