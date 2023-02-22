<?php 

require_once('config.php');

define ('SITEURL', $cfg->siteurl);

$title = "Ferrari Extended Warranty | Select Auto Protect";

$description = "Cover the repair of your Ferrari with an extended warranty plan from Select Auto Protect. Get a free quote for your Ferrari warranty coverage.";

include 'inc/header.php';

// include('db.php'); 

include('car_make/car_make.php'); ?>

	

<div class="container">



      <div class="blog-header hide">

        

      </div>



      <div class="row">



        <div class="col-sm-12 blog-main">



          <div class="blog-post landing">

			<div class="blog-header blg-header" style="background-image:url(../img/ferrari_page-min.jpg);">

				

			</div>

            <h1 class="blog-post-title text-center" >Ferrari Extended Warranty</h1>

			

			<div class="landing"><?php $updatedon = updated_on('ferrari-extended-warranty'); if($updatedon){ ?><p class="text-right updatedon">Updated on <?php echo $updatedon; ?></p><?php } ?></div>

			

            <p class="mb-2 text-left">Ferrari's are high-end, exclusive vehicles, and if you're one of the lucky owners, most probably, you want to be confident you are covered for costly repairs or maintenance. Because the car and spare parts are imported, you may want to have a Ferrari extended warranty in place to avoid paying out-of-pocket.</p>

			<p class="mb-2">

			Whether you have a new or used car, we have priced our Ferrari Warranty plans affordable. Don't get stranded next to the side of the road! Choose an extended warranty plan that covers your Ferrari from every possible situation.

			</p>

			

			<h2 id="audi_link1" class="mb-2 mt-3">Why do I need a Ferrari Extended Warranty?</h2>  

			

			<p class="mb-2">Ferraris are exclusive and imported into the US, so you can expect to pay high prices for parts and services. Don't put yourself in a position of receiving costly bills when you need your expensive Ferrari repaired or serviced. An exotic car warranty will protect your pocket from an expensive surprise!</p> 



			<p class="mb-2">As a vehicle owner, you know that anything can happen while you're on the open road. With the right Ferrari warranty, you can expect affordable pricing and peace of mind knowing your vehicle is covered for every situation life throws at you. Don't leave repair costs to fate and get a Ferrari extended warranty. Extended coverage will provide cover for minor repairs or total car replacement. We have your back! </p>

			

			<h2 id="audi_link2" class="mb-2 mt-3">What does a Ferrari Extended Warranty cover?</h2>

			

			<p class="mb-2">There are three coverage plans to suit every budget. To keep your Ferrari protected, you can choose between Select Silver, Select Gold, and Select Platinum. If you're on a tight budget and looking for a Ferrari extended warranty costing less, then the Silver package is perfect for you. It covers the basic systems, such as the engine, transmission, cooling system, and brakes. Even with a standard warranty plan, your car will be like brand new! Our Silver package will also have you covered with a rental car if you're concerned about how you will get from A to B while your car gets repaired.  </p> 

			<p class="mb-2">Our next Ferrari warranty plan is the Select Gold package, which covers everything in the Silver package, but with two additional extras. This package is priced a little more, but you'll have additional extended coverage that includes coverage for your steering system and comes with Lockout assurance.</p>

			<p class="mb-2">The Select Platinum is the best option if you're looking for full extended coverage for your Ferrari. This coverage plan covers everything in the Silver and Gold packages, as well as nine additional coverages, such as your Ferrari's suspension, fuel system, AC and heating system, and turbo/supercharger. The Select Platinum gives you the confidence to know that your Ferrari is fully prepared for any repair or service you may encounter.</p>

			<p class="mb-2">Included in all three Ferrari extended warranty plans is roadside assistance, where you have someone to call on when your car breaks down next to the side of the road. Our exotic car warranty plans are not only for new car owners - we have a warranty for used Ferraris, too! </p>



			

			<h2 id="audi_link3" class="mb-2 mt-3">Is a Ferrari Extended Warranty worth it?</h2> 

			<p class="mb-2">Leasing or buying a new or used Ferrari is costly, and the last thing you want to do is pay for a Ferrari extended warranty for little coverage. You can rest assured our extended warranty plans have pricing for every type of budget, with enough coverage to sleep well at night. </p>

			<p class="mb-2">Extended warranties are an absolute necessity to ensure you have the protection in place for emergencies that can cost a fortune. Ferraris are imported cars, and so are their spare parts. You don't want to get stuck paying a bill that costs tens of thousands of dollars to get something replaced on your vehicle. Our extended warranties also cover services, so your Ferrari will always be running as if it were brand new.

			</p> 

			<h2 id="audi_link3" class="mb-2 mt-3">How much does a Ferrari Extended Warranty cost?</h2>

			<p class="mb-2">If you want to know the pricing for each Ferrari warranty plan, contact us to get a free quote. We know how time-consuming it can be searching for the perfect warranty package for your car, so we've taken the burden from you to give you three plans to choose from.</p> 

			<p class="mb-2">Our extended warranty coverage plans were designed to suit your vehicle's needs. We have also created our packages to provide different levels of cover for different prices. Whatever your needs are, call us today to get your free quote and get your car protected with a Ferrari extended warranty!</p>







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

		 	$car_type = 'Ferrari';

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

			$selected_car = other_cars('ferrari-extended-warranty');

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