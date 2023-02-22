<?php 

require_once('config.php');

define ('SITEURL', $cfg->siteurl);

$title = "Chrysler Extended Warranty | Select Auto Protect";

$description = "Cover the repair of your Chrysler with an extended warranty plan from Select Auto Protect. Get a free quote for your Chrysler warranty coverage.";

include 'inc/header.php';

// include('db.php'); 

include('car_make/car_make.php'); ?>

	

<div class="container">



      <div class="blog-header hide">

        

      </div>



      <div class="row">



        <div class="col-sm-12 col-md-12 col-lg-12 blog-main">



          <div class="blog-post landing">

			<div class="blog-header blg-header" style="background-image:url(../img/chrysler-extended-warranty.jpg);">

				

			</div>

            <h1 class="blog-post-title text-center">Chrysler Extended Warranty</h1>

			

			<div class="landing"><?php $updatedon = updated_on('chrysler-extended-warranty'); if($updatedon){ ?><p class="text-right updatedon">Updated on <?php echo $updatedon; ?></p><?php } ?></div>

			

			<p class="mb-2">As someone who drives a Chrysler, you understand that quality matters. Whether you own or lease your Chrysler, it is essential to protect your investment with an extended warranty that will protect your vehicle when you need it most. The right extended warranty can cover your Chrysler in a blanket of protection that could save you from paying thousands of dollars for repairs or replacements. Protect your Chrysler with an extended warranty that will give you peace of mind when you are on the road. Chances are, you love your Chrysler. So, protect it with a Chrysler extended warranty.</p>

			<h2 class="mb-2 mt-3">Why is a Chrysler Warranty Policy a Must?</h2>

			<p class="mb-2">Whether you lease or own your Chrysler, you know how important it is to invest in quality. If your car is essential to you, why would you not do everything you could to protect it? You never know what could happen on the open road. Make sure you’re covered with a Chrysler extended warranty.</p>

			<p class="mb-2">Whether taking a trip across town or across the country, you want your Chrysler to be a reliable vehicle, but if you do not take care of your vehicle, it cannot take care of you. You have invested in a high-quality vehicle that you expect to take care of you in any situation. Protect it with either a Chrysler new vehicle warranty or a Chrysler used vehicle warranty. A Chrysler aftermarket Warranty will cover normal wear and tear as well as any unordinary issues that come with extended travel. Take care of your vehicle with Chrysler's extended warranty coverage.</p>

			<p class="mb-2">A Chrysler warranty will ensure that you will not be responsible for covering the entire bill for extensive repairs. Our warranty packages make sure that big surprise repairs are covered. </p>

			<p class="mb-2">Without our warranty, some repairs can cost thousands of dollars, and if you are not prepared to cover it yourself, you may be without your vehicle until you can cover it. Don’t let major issues keep you from driving your Chrysler.</p> 

			<p class="mb-2">An extended Chrysler warranty will make a vehicle of any age feel like a new car. With a warranty, you can afford regular service that will keep your car feeling like new. A warranty will ensure that you can get the most out of your vehicle for the entire time you own or lease your vehicle. Our warranties cover far more than Chrysler’s Standard Warranty, so you can be sure that your vehicle is always protected.</p>



			<h2 class="mb-2 mt-3">What does a Chrysler Warranty Cover?</h2>

			<p class="mb-2">Our Chrysler Extended warranty comes in three different options of coverage. Depending on the level of coverage you choose, your warranty will cover everything from your engine to your suspension. All packages cover roadside assistance and coverage on the basic systems in your car. The more coverage you choose to take, the more of your Chrysler is protected. Our second tier of coverage includes repairs to your steering system, while the Platinum tier adds features such as your AC and heat, fuel system, and suspension. </p>

			<p class="mb-2">If you are looking to cover your entire car in floor-to-ceiling protection, your best option is the Platinum package. While the other two tiers of coverage protect most of your vehicle, you shouldn’t leave anything to chance on the road.</p>

			<h2 class="mb-2 mt-3">Is a Chrysler Extended Warranty Policy worth it?</h2>

			<p class="mb-2">The biggest decision when deciding whether to get an extended warranty on your Chrysler is the price. You may be asking yourself if it is necessary to spend the extra money on a warranty in addition to your regular car payments. Is the coverage necessary or can you sneak by and hope for the best?</p>

			<p class="mb-2">On average, a major repair on your Chrysler can cost upwards of ten thousand dollars. If something happens to your vehicle when you do not have an extended warranty you are stuck with the cost of repair. Servicing your Chrysler on a regular basis can also add up over time.</p> 

			<p class="mb-2">A Chrysler extended warranty can cover the costs of wear and tear and major repairs. With a warranty, you won’t have to shell out thousands of dollars if your car needs a repair. In the long run, an extended warranty will save you money on all types of services for your Chrysler. In addition to saving you money on repairs, an extended warranty will keep your Chrysler in better shape for a longer period of time. If you ever decide to sell your Chrysler, a warranty-covered car will sell for more. The Chrysler warranty cost is minimal when you consider the possible money you will have to pay without one. You cannot afford not to cover your vehicle with the blanket of protection that comes with an extended warranty.</p>

			<h2 class="mb-2 mt-3">Extended Warranty for New Chryslers</h2>

			<p class="mb-2">An extended warranty is an absolute must for your new car. Protect your large investment with an extended warranty that will cover any major repairs. You just spent a large amount of money on a high-end new Chrysler. Don’t get stuck paying for costly repairs on your new Chrysler. Check out our Chrysler extended warranties for your new car. </p> 

			<h2 class="mb-2 mt-3">Extended Warranty for Pre-owned Chryslers</h2>

			<p class="mb-2">Although you may not think it is necessary, a Chrysler extended warranty is just as crucial for a pre-owned Chrysler as it is for a new Chrysler. If you acquire your Chrysler after a different owner, your vehicle may be at a slightly higher risk for a major repair. A Chrysler extended warranty can help you cover high costs on older cars. Retain the value of your pre-owned Chrysler so that you can still sell your car when you are finished with it.</p>

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

		 	$car_type = 'Chrysler';

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

			$selected_car = other_cars('chrysler-extended-warranty');

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