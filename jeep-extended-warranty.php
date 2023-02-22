<?php 

require_once('config.php');

define ('SITEURL', $cfg->siteurl);

$title = "Jeep Extended Warranty | Select Auto Protect";

$description = "Cover the repair of your Jeep with an extended warranty plan from Select Auto Protect. Get a free quote for your Jeep warranty coverage.";

include 'inc/header.php';

// include('db.php'); 

include('car_make/car_make.php'); ?>

	

<div class="container">



      <div class="blog-header hide">

        

      </div>



      <div class="row">



        <div class="col-sm-12 blog-main">



          <div class="blog-post landing">

			<div class="blog-header blg-header" style="background-image:url(../img/jeep_page-min.jpg);">

				

			</div>

            <h1 class="blog-post-title text-center" >Jeep Extended Warranty</h1>

			

			<div class="landing"><?php $updatedon = updated_on('jeep-extended-warranty'); if($updatedon){ ?><p class="text-right updatedon">Updated on <?php echo $updatedon; ?></p><?php } ?></div>

			

            <p class="mb-2 text-left">If you own or lease a Jeep, you know how important it is to find adventure. Whether you take your Jeep off-road to explore the path less traveled or take to the open road to explore scenic highways, it is important to protect your Jeep with a Jeep extended warranty. Your Jeep is not only a vehicle but also an investment into a specific lifestyle that urges you to explore. Protect your investment with a Jeep extended warranty plan. Protecting your Jeep is a must so that you can keep exploring with your vehicle.</p>

			

			<h2 id="audi_link1" class="mb-2 mt-3">Why is a Jeep Warranty Policy a Must?</h2>  

			

			<p class="mb-2">Protect your vehicle with the right coverage for your needs. Make sure you’re covered with a Jeep extended warranty. If your vehicle is important to you, why would you not do everything you could to protect it? You never know what could happen on your next adventure.</p> 



			<p class="mb-2">You never know when an emergency repair will pop up. Large repairs on your Jeep can cost thousands of dollars. Without a warranty, surprise emergency repairs could leave you without a car if you are unable to pay. Keep your Jeep ready for an adventure with an extended car warranty.</p>

			

			<p class="mb-2">Whether taking a trip across town or the country, you want your Jeep to be a reliable vehicle, but if you do not take care of your vehicle, it cannot take care of you. A Jeep standard Warranty will cover normal wear and tear, but it will not cover all your vehicle’s needs. A Jeep aftermarket extended warranty will cover all the expected issues that your vehicle may face as well as any unordinary issues that come with extended travel. Your Jeep is specifically equipped to take care of you on adventures. Make sure you take care of your Jeep with an extended warranty that wraps your Jeep in a blanket of coverage.</p>

			

			<p class="mb-2">The right aftermarket warranty will have your Jeep feeling like new years after you buy it. An extended warranty can help you cover the regular service cost that will keep your car looking great and running smoothly. Not only will it keep your Jeep on the road, but an extended warranty will make sure that you can get the service that will help your vehicle retain its value.</p>

			

			

			<h2 id="audi_link2" class="mb-2 mt-3">What does a Jeep Warranty Cover?</h2>

			

			<p class="mb-2">Our Jeep Extended warranty comes in three different options of coverage. Depending on the level of coverage you select, your warranty will cover everything from your engine to your suspension. All packages cover roadside assistance and coverage on the basic systems in your car. The more coverage you choose to take, the more of your Jeep is protected. Our second tier of coverage includes repairs to your steering system, while the Platinum tier adds features such as your AC and heat, fuel system, and suspension.</p> 

			

			<p class="mb-2">If you want to cover your entire car in floor-to-ceiling protection, your best option is the Platinum package. While the other two tiers of coverage protect the majority of your vehicle on the road, you shouldn't leave anything to chance.</p>

			

			<h2 id="audi_link3" class="mb-2 mt-3">Extended Warranty for New Jeeps</h2>

			

			<p class="mb-2">An extended warranty is an absolute must for your new car. Protect your large investment with an extended warranty that will cover any major repairs. You just spent a large amount of money on a high-end new Jeep. Although adding an extended warranty to a brand-new Jeep may seem unimportant, additional warranties can cover the things not covered by a standard factory warranty. Don’t get stuck paying for costly repairs on your new Jeep. Check out our Jeep extended warranties for your new car. An extended warranty on your new Jeep will ensure that your car retains its value the longer you own it. Keep the value of your new Jeep high with an extended warranty for your Jeep.</p>

			

			<h2 id="audi_link3" class="mb-2 mt-3">Extended Warranty for Pre-owned Jeeps</h2>

			

			<p class="mb-2">Although you may not think it is necessary, a Jeep extended warranty is just as important for a pre-owned Jeep as it is for a new Jeep. If you acquire your Jeep after a different owner, your vehicle may be at a slightly higher risk for a major repair. A Jeep extended warranty can cover any surprise major issues that come with your pre-owned Jeep. A Jeep extended warranty can help you cover major costs on older cars. Your warranty will help you retain the value of your pre-owned Jeep so that you can still sell your car when you are finished with it. You may never know the true quality of your pre-owned Jeep. That is why it is important to protect your new purchase.</p>

			

			<h2 id="audi_link3" class="mb-2 mt-3">Is a Jeep Extended Warranty Policy worth it?</h2>

			

			<p class="mb-2">It is important to weigh the cost of an extended warranty policy against the value of the extra coverage. However, a Jeep extended warranty may seem like a large investment to cover things that may not happen; leaving something as important as your vehicle unprotected is unwise. If the worst were to happen tomorrow, would you be able to cover the costs for a new vehicle? For most people, the answer is no. With a Jeep extended auto warranty, you can have the peace of mind that you will be covered in any scenario.</p>

			

			<p class="mb-2">A Jeep extended warranty can cover the costs of wear and tear and major repairs. On average, a major repair to your Jeep can reach upwards of thousands of dollars. With a warranty, you won’t have to shell out thousands of dollars if your car needs a repair. An extended warranty will save you money on all types of services for your Jeep in the long run. A warranty-covered Jeep is far more likely to hold its value. Especially in a secondary market that puts a high value on Jeeps, you cannot afford not to protect your investment. The Jeep warranty cost is minimal when considering the possible money you will have to pay without one. Protect yourself and your vehicle with a Jeep extended warranty.</p>

			



			    <!-- <div class="bg-quote-brands" style="width: 100%">



               <div class="msg-qtu">

                     <span class="gt-brnd-qut">Protect your car from un-wanted Damages<br> Get your Quote Now!</span>

                     

               </div>

               <div  class="msg-qtu-btn">

                  <a href="#get_quote" id="myBtn" style="text-decoration: none;" class="cst-qut">Get Quote</a>

               </div>



         </div> -->



         <div class="row">

		 <br>

		 <?php 

		 	$car_type = 'Jeep';

		  if(isset($car[$car_type]['model']) && count($car[$car_type]['model'])){ ?>

		 

         	<div class="col-md-12 col-12">

         		<h2 class="mb-2 mt-3"><?php echo $car_type; ?> Vehicles available for warranty coverage</h2>

         	</div>

			<br>

				<?php foreach($car[$car_type]['model'] as $key){ ?>

					<div class="col-md-3 col-4 vrt-wr" style="margin-bottom:15px;">

						<p><?php echo $key; ?></p>

					</div>

		<?php } } ?>

				

         </div>

			

		<?php if(isset($car[$car_type]['year']) && count($car[$car_type]['year'])){ ?>	

			<br/>

			<p class="mb-2"><?php echo "Eligible years: $car_type ". implode(', ',$car[$car_type]['year']); ?></p><br/>

		<?php } ?>	

			

          </div><!-- /.blog-post -->

		  <?php 

			$selected_car = other_cars('jeep-extended-warranty');

			if($selected_car){		

		?>

		<div class="bg-grey pb-4">

			<div class="blog-post-title font-bold h3 ">Other car makes extended warranties you might like:</div>

			<a class="p-2 border m-1 cstm-brnd-nm" href="/<?php echo $other_option[$selected_car[0]].".php"; ?>"><?php echo strtoupper(str_replace("-"," ",$other_option[$selected_car[0]])); ?></a>

			<a class="p-2 border m-1 cstm-brnd-nm" href="/<?php echo $other_option[$selected_car[1]].".php"; ?>"><?php echo strtoupper(str_replace("-"," ",$other_option[$selected_car[1]])); ?></a>

			<a class="p-2 border m-1 cstm-brnd-nm" href="/<?php echo $other_option[$selected_car[2]].".php"; ?>"><?php echo strtoupper(str_replace("-"," ",$other_option[$selected_car[2]])); ?></a>

			<a class="p-2 border m-1 cstm-brnd-nm" href="/<?php echo $other_option[$selected_car[3]].".php"; ?>"><?php echo strtoupper(str_replace("-"," ",$other_option[$selected_car[3]])); ?></a>

		  </div>

		 <?php } ?> 

        </div><!-- /.blog-main -->



      </div><!-- /.row -->



    </div><!-- /.container -->







<?php

	

$data = [

		'ip'=>get_client_ip(), 

		'referrer_site'=>$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], 

		'server_dump'=>json_encode($_SERVER), 

		'request_dump'=>'', 

		'token'=>$_SESSION['token'], 

		'current'=>$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], 

		'previous'=>(isset($_SESSION['previous'])?$_SESSION['previous']:''),

		'browser'=>getBrowserInfo()['browser'],

		'version'=>getBrowserInfo()['browser_version'], 

		'is_desktop'=>((getBrowserInfo()['device']=="Desktop")?'1':'0'), 

		'is_phone'=>((getBrowserInfo()['device']=="Desktop")?'0':'1'), 

		'device'=>getBrowserInfo()['device'], 

		'platform'=>getBrowserInfo()['os_platform'], 

		'landing_page'=>'', 

		'created_at'=>date("Y-m-d h:i:s"), 

		'updated_at'=>date("Y-m-d h:i:s")

];

	insert_data($data);

$_SESSION['previous'] = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

?>

<?php include 'inc/footer.php'; ?>