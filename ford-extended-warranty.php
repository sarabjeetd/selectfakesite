<?php 

require_once('config.php');

define ('SITEURL', $cfg->siteurl);

$title = "Ford Extended Warranty | Select Auto Protect";

$description = "Cover the repair of your Ford with an extended warranty plan from Select Auto Protect. Get a free quote for your Ford warranty coverage.";

include 'inc/header.php';

// include('db.php'); 

include('car_make/car_make.php'); ?>

	

<div class="container">



      <div class="blog-header hide">

        

      </div>



      <div class="row">



        <div class="col-sm-12 blog-main">



          <div class="blog-post landing">

			<div class="blog-header blg-header" style="background-image:url(../img/ford_page-min.jpg);">

				

			</div>

            <h1 class="blog-post-title text-center" >Ford Extended Warranty</h1>

			

			<div class="landing"><?php $updatedon = updated_on('ford-extended-warranty'); if($updatedon){ ?><p class="text-right updatedon">Updated on <?php echo $updatedon; ?></p><?php } ?></div>

			

            <p class="mb-2 text-left">Ford's are built tough, but even tough cars need protection from all types of damage! A Ford extended warranty will give you the confidence knowing that you can still drive your vehicle off-road and have full coverage. With prices of Fords rising over the years, the cost of spare parts has skyrocketed, too. Your Ford may have been built "tough" to withstand any conditions, but even tough can break down.</p> 

			<p class="mb-2 text-left">Whether you have a new car or pre-owned, a Ford extended warranty ensures coverage for all types of repairs and total car replacement. Don't get left stranded next to the side of the road and get an extended warranty for your Ford!</p>

			

			<h2 id="audi_link1" class="mb-2 mt-3">Why do I need a Ford Extended Warranty?</h2>  

			

			<p class="mb-2">Fords have been built to sustain rugged terrain where anything can happen to your vehicle. When a breakdown occurs, you can rely on our service agents to be available to your calls 24/7 to help you. With unlimited claims, we will be there for you to get you and your car to safety. The Ford extended warranty costs are affordable, so you don't need to dig deep into your pocket for your coverage expenses. </p> 



			<p class="mb-2">A Ford extended warranty offers protection for your car for costly repairs and regular service expenses. A Ford that's been well maintained and serviced will be worth more should you ever decide to sell or trade-in your vehicle. </p>

			<p class="mb-2">A Ford standard warranty might not give your car enough coverage, but with our extended warranty, Ford car owners can enjoy complete protection from all types of damage, no matter the high prices. So get the most value out of your car with a Ford extended warranty.</p>

			

			

			<h2 id="audi_link2" class="mb-2 mt-3">What does a Ford Extended Warranty cover?</h2>

			

			<p class="mb-2">We have three different levels of coverage at different prices, namely Select Silver, Select Gold, and Select Platinum. The Select Silver package offers basic protection that includes your Ford's transmission, engine, electrical, and brake system. Although this is the entry-level package, you still have peace of mind knowing that your new or pre-owned Ford is covered for big repairs. We have also included a rental car and 24/7 roadside assistance if you ever need these services. </p> 

			<p class="mb-2">You might prefer a higher-level cover than the Silver package. In that case, the Select Gold package will cover everything in the Select Silver package and includes steering system coverage and lock-out assurance.</p>

			<p class="mb-2">Because a Ford is built for all types of terrain, you may want comprehensive Ford extensive warranty coverage. The Select Platinum includes both the Select Silver and Select Gold packages, with nine additional systems covered. Your Ford's AWD 4x4 is protected under the Platinum plan, as well as heating and fuel system, ABS brakes, and suspension. While out on a 4x4 adventure, your AC system might stop working. Don’t worry - we’ve got your AC system covered as well! </p>

			<p class="mb-2">With an extended warranty, Fords are protected from every type of damage. Don't be left on the side of the road or in the bush with your broken-down Ford. Get a Ford extended warranty for confidence that your Ford has complete protection against anything that can come your way while on the road.</p>



			

			<h2 id="audi_link3" class="mb-2 mt-3">Ford new car warranty</h2> 

			<p class="mb-2">A Ford new car warranty is essential for your new car. When you buy a new car, your Ford standard warranty comes directly from the manufacturer and might not be enough coverage for your vehicle. We offer a Ford new car warranty to give you complete protection from all types of costly repairs and include services and maintenance. You can save money on your vehicle's major repairs by extending your vehicle protection, which will also extend the life of your car. </p>

			

			<h2 id="audi_link3" class="mb-2 mt-3">Ford pre-owned vehicle warranty</h2>

			<p class="mb-2">You don't need to be a new car owner to enjoy our Ford extended warranty plans. Pre-owned cars qualify for full coverage if your vehicle is in good working condition when you purchase a Ford used car extended warranty.</p> 

			<p class="mb-2">If you purchase a pre-owned Ford from a third party, your vehicle can be at a higher risk for significant repairs. A Ford pre-owned vehicle warranty ensures your car is covered for major costs that may arise later. With your extended warranty coverage, you can retain your Ford's value and sell your pre-owned vehicle at a later stage.</p>

			<h2 id="audi_link3" class="mb-2 mt-3">Is a Ford Extended Warranty worth it?</h2>

			

			<p class="mb-2">You can be left with a bill worth thousands of dollars if you don't have a Ford extended warranty in place to cover major repairs. Be financially prepared for any damage to your car. You also want to ensure you never skip your regular services. By maintaining your Ford, you prolong the life of your vehicle and add value to it for when you want to sell or trade it in.</p>

			<p class="mb-2">Your Ford extended warranty cost is far less than any emergency surprise costs that may come your way. Prices for spare parts can get expensive, so have peace of mind knowing that you don't need to pay extra for any repairs with the proper coverage.</p>

			<p class="mb-2">Claims are quick and easy, free of any paperwork. First, you will need to bring your pre-owned or new car to a repair facility of your choice. You will then need to provide your Ford extended warranty details to the repair company, and we will pay for your covered repairs with our company credit card telephonically. All you will have to pay is your deductible. Don't be concerned about transport while your car is getting repaired. We will arrange a car rental for you while you wait for your vehicle to get back to new!</p>

			<p class="mb-2">We know how much of a financial investment your car is and how much you want to protect it. There's no reason to drive another mile without a Ford extended warranty when monthly payment plans are affordable and there are no hidden fees. Give us a call today or reach us online to see how you can save thousands of dollars and get back to driving without hassle.</p>






<!-- 
			    <div class="bg-quote-brands" style="width: 100%">



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

		 	$car_type = 'Ford';

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

			$selected_car = other_cars('ford-extended-warranty');

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