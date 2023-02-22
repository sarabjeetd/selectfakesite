<?php
require_once('config.php');
define ('SITEURL', $cfg->siteurl);
$title = 'Reviews | Select Auto Protect';
$description = "Select Auto Protect extended auto warranty company reviews. ✔ Any ASE Certified Facility ✔ 24/7 Claims."; ?>
    <!-- header_start  -->
  <!-- Plan_start  -->
  <style>
  ::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
background-color: #F5F5F5;
}



::-webkit-scrollbar {
width: 3px;
background-color: #F5F5F5;
}



::-webkit-scrollbar-thumb {
background-color: #0b949f;
}
.all-cmn-cstm{

      padding-bottom: 15px;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.4);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.4);
    border-radius:15px;
    box-shadow: 0px 0px 1px 0px rgb(200 200 200 / 2%);
    background: #ffffff;

}
.owl-carousel .owl-item img {
    display: block;
    width: 15%;
}
/*.owl-item{
width: 320px !important;
}*/



.cstm-btn-rev{
color: #ffffff;
    background-color: #0b949f;
    padding: 15px 30px;
    border-radius: 5px;
    text-decoration: none !important;
    transition: all 0.5s ease-out;
}

.cstm-btn-rev:hover{
color: #ffffff !important;
    background-color: #9e1e15 !important;

}


.cstm-btn-mrg{
  margin-top: 5%;
}




  </style>


<section class="testimonial-lower">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="page-title">Car Owners across the nation are satisfied with the quality of our service!</h2>
        <p class="fs-18">Hear from many of our satisfied customers how Select Auto Protect has saved them money and given them peace of mind!</p>
      </div>

      <div class="col-sm-12 col-12 mt-4 pt-5">
        

        <div class="owl-carousel testimonial-carousel">
          <!--   Start Testimonials -->
<?php
  
    $resp = file_get_contents('reviewsjson.json');
    $arr = json_decode($resp);
    foreach($arr as $data){?>
          









          <div class="single-testimonial ">
            <div class="testimonials-wrapper">


<div class="review all-cmn-cstm">
        <div class="review-inner">
    <p class="text-left review-p"><?php echo $data->review_text; ?>
        </p>
    </div>
        <div class="review-info d-flex align-items-center">
      <img src="<?php echo $data->author_image; ?>" alt="" />
        <div class="head-review text-left">
          <h3><?php echo $data->author_title; ?></h3>
          <p class="indentity"><?php echo get_timeago($data->review_timestamp); ?> </p>
      
      <span class="stars" rating="<?php echo $data->review_rating; ?>"></span>
          
        </div>
    </div>
      </div>







              
            </div>
          </div>
           <?php  }
    
  ?>

        
         
         
          
        </div>


      </div>
      <div class="col-12 text-center">
        <div class="cstm-btn-mrg">
          <a href="http://localhost:81/reviews.php" class="cstm-btn-rev">View All</a>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Plan_end  -->
<?php 
function get_timeago( $ptime )
    {
        $estimate_time =  time() - $ptime;


        if( $estimate_time < 1 )
        {
            return 'less than 1 second ago';
        }

        $condition = array(
            12*30*24*60*60  =>  'year',
            30*24*60*60     =>  'month',
            24*60*60            =>  'day',
            60 * 60                 =>  'hour',
            60                      =>  'minute',
            1                       =>  'second'
        );

        foreach( $condition as $secs => $str )
        {
            $d = $estimate_time / $secs;

            if( $d >= 1 )
            {
                $r = round( $d );
                return ''. $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
            }
        }
    }
?>

