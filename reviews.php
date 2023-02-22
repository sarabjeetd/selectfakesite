<?php
require_once('config.php');
define ('SITEURL', $cfg->siteurl);$title = 'Reviews | Select Auto Protect';$description = "Select Auto Protect extended auto warranty company reviews. ✔ Any ASE Certified Facility ✔ 24/7 Claims.";

include 'inc/header.php'; ?>
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
  </style>
  <section class="home-plan ">
    <div class="bg_rev d-flex align-items-center py-5 ">
      <div class="container">
      <h1>Our Reviews & <br>Testimonials</h1>
   
    </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 plan-heading mb-95">
            
          <p>Find out why thousands of customers all over the United States choose <br><span class="brand_nm">Select Auto Protect</span> for auto protection.</p>
        </div>

      </div>
    </div>
	
  </section>
  
	
	<section class="review">
      <div class="container">
          <div class="reviewSlide-old">
		  <?php
	
		$resp = file_get_contents('reviewsjson.json');
		$arr = json_decode($resp);
		foreach($arr as $data){?>
	
		
    <div class="col-md-4 mb-5 ">
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
 <?php	}
		
	?>
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

<?php include 'inc/footer.php'; ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<script>

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
</script>

