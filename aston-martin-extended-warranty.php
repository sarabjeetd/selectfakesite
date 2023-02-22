<?php 

require_once('config.php');

define ('SITEURL', $cfg->siteurl);

$title = "Aston Martin Extended Warranty | Select Auto Protect";

$description = "Cover the repair of your Aston Martin with an extended warranty plan from Select Auto Protect. Get a free quote for your Aston Martin warranty coverage.";

include 'inc/header.php';

// include('db.php'); 

include('car_make/car_make.php'); ?>

	

<div class="container">



      <div class="blog-header hide">

        

      </div>



      <div class="row">



        <div class="col-sm-12 col-md-12 col-lg-12 blog-main">



          <div class="blog-post landing">

			<div class="blog-header blg-header" style="background-image:url(../img/aston-martin-extended-warranty.jpg);">

				

			</div>

            <h1 class="blog-post-title text-center">Aston Martin Extended Warranty</h1>

			

			<div class="landing"><?php $updatedon = updated_on('aston-martin-extended-warranty'); if($updatedon){ ?><p class="text-right updatedon">Updated on <?php echo $updatedon; ?></p><?php } ?></div>

			

			<p class="mb-2 text-left">Contents:</p>

			<ul class="ml-4">

				<li class="ml-4">

					<a href="#why-do-i-need-an-aston-martin-extended-warranty">

						Why do I need an Aston Martin extended warranty

					</a>	

				</li><li class="ml-4">

					<a href="#aston-martin-warranty-coverage">

						Aston Martin warranty coverage

					</a>	

				</li><li class="ml-4">

					<a href="#is-an-aston-martin-extended-warranty-worth-it">

						Is an Aston Martin extended warranty worth it?

					</a>	

				</li>

			</ul>	

            <p class="mb-2 text-left">If you own or lease an Aston Martin, you may want to protect your high-end vehicle with an equally high-end extended warranty. As an Aston Martin owner, you know what it means to invest in quality. Our Aston Martin Extended warranties are a quality investment that will keep your vehicle covered year-round. Be ready for anything with an Aston Martin warranty that will protect your vehicle and give you peace of mind when you need it most.</p>

			<h2 id="why-do-i-need-an-aston-martin-extended-warranty" class="mb-2 mt-3">Why do I need an Aston Martin Extended Warranty?</h2>

		

			<p class="mb-2">Aston Martin repairs can be incredibly expensive. As a foreign brand, parts and services can be highly specialized and costly. With average repair costs in the thousands, it can be financially stressful to cover a surprise repair or pay for general maintenance.</p> 



			<p class="mb-2">An Aston Martin extended warranty takes all the fear out of getting the repairs that your vehicle needs. If you cannot cover expensive repair bills out of pocket, the Aston Martin extended warranty has your back. Don’t get stuck paying for expensive repair bills. Get a coverage plan that will protect you and your vehicle for sure when you’re at your most vulnerable. </p>



			<p class="mb-2">If you want to get the most out of your Aston Martin for years, an extended warranty can help you enjoy your car at its best for longer. An extended warranty can ensure you get the most value for your trade-in when it comes time to exchange or sell your vehicle.</p>

			

			<h2 id="aston-martin-warranty-coverage" class="mb-2 mt-3">What does an Aston Martin Warranty Cover?</h2>

			

			<p class="mb-2">Our extended warranties are available at three different levels of coverage. Our silver level Aston Martin warranty covers all the basic systems that will keep your car running like new. </p> 

			<p class="mb-2">From your engine to your transmission to your brakes. The Select Silver package can give you peace of mind that you can cover a big repair when it pops up. The Select Silver package also gives you access to roadside assistance that gives you added protection when your car breaks down. </p> 

			

			<p class="mb-2">If you want to protect your Aston Martin even further, go with the Select Gold package. This second-tier package will cover all your basic systems and add on Lockout assurance and coverage of your steering system.</p>



			<p class="mb-2">The Select Platinum package is your best option if you want to have full coverage of your Aston Martin. Not only does this package cover everything offered in the Select Gold package, but it adds nine additional systems to your coverage. The Platinum option helps you protect your Aston Martin’s heating and AC, fuel systems, and suspension just to name a few. With the Select platinum package, you can have the confidence that your Aston Martin is completely prepared for whatever the road brings your way.</p>

			

			<h2 id="is-an-aston-martin-extended-warranty-worth-it" class="mb-2 mt-3">Is an Aston Martin Extended Warranty worth it?</h2> 

			<p class="mb-2">One of the biggest questions you probably ask yourself if you own or lease an Aston Martin is if the Aston Martin Warranty cost is worth the coverage that you receive. When you consider the expensive replacement parts needed to repair your car in an emergency, it is easy to see that an extended warranty can save you money in the long run. </p> 

			<p class="mb-2">You never know what is going to happen on the open road. If you begin your journey with your Aston Martin without coverage, you could be looking at repair costs in the thousands if a major incident were to happen. One of our Aston Martin Extended Warranties will give you the confidence that you are covered no matter what. This peace of mind alone justifies the Aston Martin extended warranty cost.</p> 

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

		 	$car_type = 'Aston Martin';

		  if(isset($car[$car_type]['model']) && count($car[$car_type]['model'])){ ?>

		 

         	<div class="col-md-12 col-12">

         		<h2 class="mb-2 mt-3"><?php echo $car_type; ?> Vehicles available for warranty coverage</h2>

         	</div>

			<br>

				<?php foreach($car[$car_type]['model'] as $key){ ?>

					<div class="col-md-3 col-4 vrt-wr"  style="margin-bottom:15px;">

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

			$selected_car = other_cars('aston-martin-extended-warranty');

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