<?php 

require_once('config.php');

define ('SITEURL', $cfg->siteurl);

$title = "Acura Extended Warranty | Select Auto Protect";

$description = "Cover the repair of your Acura with an extended warranty plan from Select Auto Protect. Get a free quote for your Acura warranty coverage.";

include 'inc/header.php';

// include('db.php');

include('car_make/car_make.php'); ?>

	

<div class="container">



      <div class="blog-header hide">

        

      </div>



      <div class="row">



        <div class="col-sm-12 col-md-12 col-lg-12 blog-main">



          <div class="blog-post landing">

			<div class="blog-header blg-header" style="background-image:url(../img/acura-extended-warranty.jpg);">

				

			</div>

            <h1 class="blog-post-title text-center">Acura Warranty</h1>

			

			<div class="landing"><?php $updatedon = updated_on('acura-extended-warranty'); if($updatedon){ ?><p class="text-right updatedon">Updated on <?php echo $updatedon; ?></p><?php } ?></div>

			

			<p class="mb-2 text-left">Contents:</p>

			<ul class="ml-4">

				<li class="ml-4">

					<a href="#why-do-you-need-an-acura-extended-warranty">

							Why do you need an Acura Extended Warranty

					</a>	

				</li><li class="ml-4">

					<a href="#what-does-an-acura-warranty-cover">

							Acura Warranty coverage

					</a>	

				</li><li class="ml-4">

					<a href="#is-an-acura-extended-warranty-worth-it">

							Is an Acura Extended Warranty Worth it

					</a>	

				</li>

			</ul>	

            <p class="mb-2 text-left">Whether you lease or own an Acura, it is vital to cover your car in a blanket of protection. An Acura warranty will ensure that your vehicle is covered in any situation. Your Acura takes care of you by getting you where you need to go in elegance and style. Be sure to return the favor by signing on to a warranty that will protect your car wherever you go.</p>

			<p class="mb-2 text-left">Whether you need coverage for everyday wear and tear or significant expenses on major problems, an Acura warranty will make sure that you are covered. Keep your vehicle in pristine condition with one of our Acura warranties. Keeping your car covered will give you the peace of mind to fully enjoy your Acura on any journey that life throws at you.</p>

			<h2 id="why-do-you-need-an-acura-extended-warranty" class="mb-2 mt-3">Why do you need an Acura Extended Warranty?</h2>

		

			<p class="mb-2">An Acura extended warranty is a must for anyone who leases or owns an Acura. It is important to add an extra layer of coverage that will protect your investment year-round with any high-end vehicle. An extended warranty will wrap your Acura in the full protection it needs to stand up to anything on the road.</p> 



			<p class="mb-2">A warranty covers the costs of expensive repairs and helps with regular service expenses when you need them most. An Acura extended warranty is the best way to extend the life of your vehicle. Warranty coverage will keep you and your Acura on the road longer so you can get the most out of your vehicle. Your Acura will feel like a new car for years with the protection of an extended warranty.</p>



			<p class="mb-2">If you want your Acura to keep its value, both for new and preowned vehicles, a warranty is the best option. A vehicle with an extended warranty is sure to be worth more when it comes time to trade it in or sell. Protect your car and your investment with an extended warranty for your Acura.</p>

			

			<h2 id="what-does-an-acura-warranty-cover" class="mb-2 mt-3">What does an Acura Warranty Cover?</h2>

			

			<p class="mb-2">Our extended warranties are available online at three different levels of coverage. Our silver level Acura plan covers all the essential systems that will keep your car running like new. From your engine to your transmission to your brakes. The Select Silver package can give you peace of mind that you can cover a big repair when it pops up. This package also includes roadside assistance and a rental car if you may need one. </p> 

			<p class="mb-2">If you want to add additional coverage, the Select Gold package will cover all your basic systems as well as adding on Lockout assurance and coverage of your steering system. The Select Platinum package is your best option if you want to have full coverage of your Acura. Not only does this package cover everything offered in the Select Gold package, but it adds nine additional systems to your coverage.</p> 

			<p class="mb-2">The Platinum option helps you protect your Acura’s heating and AC, fuel systems, and suspension, to name a few. With the Select platinum package, you can have the confidence that your Acura is completely prepared for whatever the road brings your way. </p>

			

			<h2 id="is-an-acura-extended-warranty-worth-it" class="mb-2 mt-3">Is an Acura Extended Warranty Worth it?</h2> 

			<p class="mb-2">Major repairs on your vehicle can run anywhere from a few hundred dollars to a few thousand dollars. If you are not financially prepared to pay for your car repairs out of pocket, you can risk losing your car for good. Are you prepared to cover a five-thousand-dollar repair fee?</p> 



			<p class="mb-2">An Acura extended warranty can ensure that you won't have to pay out of pocket if the worst happens. Your Acura extended warranty cost is far more affordable than surprise costs that can come at any time. An extended warranty gives you the peace of mind that a single-car repair won't break the bank.</p> 



			<p class="mb-2">An extended warranty on Acura can add value as long as you use it. Cars with extended warranties require you to pay less to keep your vehicle in perfect shape. When it comes time to trade in your Acura for a newer model, you can be sure that your car will have a higher value than a car without an extended warranty. Owners who do not utilize an extended warranty are more likely to avoid basic repairs that can extend the life of their car. With an Acura extended warranty, you can be sure that you are getting the most out of your vehicle by taking care of it when it needs it most.</p> 



			<p class="mb-2">At the end of the day, you cannot afford not to have an extended warranty on your high-end vehicle. With repair costs always on the rise, a warranty will ensure that you can afford to keep your car going no matter the average price of a repair. With an Acura extended warranty policy, you can be sure that you take care of your vehicle as it takes you on life’s journeys.</p> 

		<!-- <div class="bg-quote-brands" style="width: 100%">



			<div class="msg-qtu">

			<span class="gt-brnd-qut">Protect your car from un-wanted Damages<br> Get your Quote Now!</span>

			</div>

			<div  class="msg-qtu-btn">

			<a href="#get_quote" id="myBtn" style="text-decoration: none;" class="cst-qut">Get Quote</a>

			</div>



		</div>  -->

		<div class="row">

		 <br>

		 <?php 

		 	$car_type = 'Acura';

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

			$selected_car = other_cars('acura-extended-warranty');

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



<?php include 'inc/footer.php'; ?>