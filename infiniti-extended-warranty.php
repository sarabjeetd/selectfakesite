<?php 

require_once('config.php');

define ('SITEURL', $cfg->siteurl);

$title = "Infiniti Extended Warranty | Select Auto Protect";

$description = "Cover the repair of your Infiniti with an extended warranty plan from Select Auto Protect. Get a free quote for your Infiniti warranty coverage.";

include 'inc/header.php';

// include('db.php'); 

include('car_make/car_make.php'); ?>

	

<div class="container">



      <div class="blog-header hide">

        

      </div>



      <div class="row">



        <div class="col-sm-12 blog-main">



          <div class="blog-post landing">

			<div class="blog-header blg-header" style="background-image:url(../img/infiniti_page-min.jpg);">

				

			</div>

            <h1 class="blog-post-title text-center">Infiniti Extended Warranty</h1>

			

			<div class="landing"><?php $updatedon = updated_on('infiniti-extended-warranty'); if($updatedon){ ?><p class="text-right updatedon">Updated on <?php echo $updatedon; ?></p><?php } ?></div>

			

            <p class="mb-2 text-left">Driving an Infiniti is an experience that could only be described as luxurious and sporty. As a purveyor of quality vehicles, you must take care of your investments. You already drive one of the best vehicles on the market; make sure it stays that way with an Infiniti extended warranty. An Infiniti warranty will keep your vehicle pristine so you can be free to take it to the open road. The luxurious lineup deserves to be protected with an extended warranty so you can enjoy your Infiniti for as long as possible. Take care of your Infiniti with an extended auto warranty. When you drive the best, you have to protect it with the best coverage. An Infiniti extended warranty is the only way to guarantee that your luxury vehicle is covered on the open road. </p>

			

			<h2 id="audi_link1" class="mb-2 mt-3">What does an Infiniti Warranty Cover?</h2>  

			

			<p class="mb-2">Our Infiniti Extended warranty comes in three different coverage alternatives. Depending on the level of coverage, your warranty will cover everything from your engine to your suspension. All packages cover roadside assistance and coverage on the basic systems in your car. The more coverage you choose to take, the more of your Infiniti is protected. Our second tier of coverage includes repairs to your steering system, while the Platinum tier adds features such as your AC and heat, fuel system, and suspension.</p> 



			<p class="mb-2">If you are looking to cover your entire car in floor-to-ceiling protection, your best option is the Platinum package. While the other two tiers of coverage protect the majority of your vehicle on the road, you shouldn't leave anything to chance.</p>			

			

			<h2 id="audi_link2" class="mb-2 mt-3">Why is an Infiniti Warranty Policy a Must?</h2>

			

			<p class="mb-2">You have invested in a high-quality car that you expect to take care of you in any situation. Whether taking a trip across town or the country, you want your Infiniti to be a reliable vehicle, but if you do not take care of your vehicle, it cannot take care of you. An Infiniti Warranty will cover normal wear and tear as well as any unordinary issues that come with extended travel. Take care of your vehicle with an Infiniti Warranty.</p> 

			

			<p class="mb-2">Your Infiniti is a luxury vehicle. It is important that you treat it as such with an extended auto warranty that is sure to keep your car on the road no matter where you wish to go. Keep your elegant vehicle on the road with an Infiniti extended warranty.</p>

			

			<p class="mb-2">An extended Infiniti warranty will keep your car running like new long after your factory warranty runs out. Maintain the quality of your Infiniti with an extended warranty that covers both the expected and the unexpected. Regular servicing will keep your Infiniti running like new, and access to repairs when needed will make sure that you have your vehicle whenever you need it.</p>

			

			<p class="mb-2">Repairs and replacement parts for your Infiniti can quickly reach the thousands. Without proper coverage, you could be financially responsible for these services. If you are not able to pay costly repair costs, you could risk being stuck with a vehicle that is impossible to drive. Take care of your Infiniti the same way that it takes care of you. Do not allow large repair costs to keep you and your luxury vehicle off of the road. An Infiniti car warranty will give you peace of mind that you are covered no matter what happens.</p>

			

			<h2 id="audi_link3" class="mb-2 mt-3">Extended Warranty for New Infinitis</h2>

			

			<p class="mb-2">If you have recently purchased a new Infiniti, an extended auto warranty is a must. Protect your large investment with an extended warranty that will cover any major repairs. You may think that a new car does not need an extended warranty. However, an Infiniti extended warranty covers everything that a factory warranty does not. Don't get stuck paying for costly repairs on your new Infiniti. Check out our Infiniti extended warranties for your new car.</p>

			

			<h2 id="audi_link3" class="mb-2 mt-3">Extended Warranty for Pre-owned Infinitis</h2>

			

			<p class="mb-2">Although you may not think it is necessary, an Infiniti extended warranty is just as important for a pre-owned Infiniti as it is for a brand-new Infiniti. If you acquire your Infiniti after a different owner, your vehicle may be at a slightly higher risk for a major repair. An Infiniti extended warranty can help you cover major costs on older cars. Your warranty will help you retain the value of your pre-owned Infiniti so that you can still sell your car when you are finished with it.</p>

			

			<h2 id="audi_link3" class="mb-2 mt-3">Is an Infiniti Extended Warranty Policy worth it?</h2>

			

			<p class="mb-2">Regular service to your Infiniti can add up the longer you own your car. A luxury vehicle is often expensive to repair. An average Infiniti repair can run you thousands of dollars. Without an extended Infiniti warranty, you could be stuck paying the costs of service and repairs once your factory warranty expires. An Infiniti extended warranty can give you peace of mind that you will be able to afford the service your vehicle needs.</p>

			

			<p class="mb-2">An Infiniti extended warranty is also valuable when you consider that a well-maintained vehicle will hold more value when it comes time to sell. The services and repairs covered in the extended warranty coverage will keep your car running like new. An extended warranty will ensure that you can maintain the quality of your luxury vehicle. When it comes time to sell, you can bet that a vehicle with coverage will sell for more.</p>

			

			<p class="mb-2">One of the biggest considerations that arise when choosing an extended warranty is the price. When you consider the possible costs of unexpected damages, you cannot afford not to have coverage. An extended warranty pays for itself when you use regular services to keep your car like new. </p>

			

			<p class="mb-2">An Infiniti extended warranty covers everything from the most basic service to complete part replacements. The right warranty can keep your car on the road for longer while keeping you safe and sound. Without an extended car warranty for your Infiniti, you never know when an accident could leave you without a vehicle. The peace of mind that a warranty affords is worth every penny.</p>

						

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

		 	$car_type = 'Infiniti';

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

			$selected_car = other_cars('infiniti-extended-warranty');

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