<?php 
require_once('config.php');
define ('SITEURL', $cfg->siteurl);

$title = 'Frequently Asked Questions | Select Auto Protect';
$description = "Here you can find answers to some frequently asked questions. You can contact us for more detailed information.";

include 'inc/header.php';

?>
    <!-- header_start  -->

  <!-- Faq_start  -->
  <div class="container">
      <!-- <div class="faq-section faq-inner"> -->
      <div class="row">
        <div class="faq-content col-sm-12 py-5 my-5"  itemscope itemtype="https://schema.org/FAQPage">
          <h1 class="mt-3 custom-h3">Frequently Asked Questions</h1>
        <div class="faq-content-inner pb-4">
            <div class="accordion" id="accordionExample">
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0" itemprop="name">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"> What is an Extended Car Warranty? <i class="fa fa-plus"></i></button>                
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>An extended car Warranty is a service contract, which helps protect vehicle owners against the cost of unexpected repairs and replacement of vehicle parts/labor.</p>
                </div>
              </div>
            </div>
            <!-- <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"> What is the Difference between Extended car warranty and insurance? <i class="fa fa-plus"></i></button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>Initially, when considering who offers the policy for the said alternatives lies that mechanical breakdown insurance policy is issued by the car insurance company that's similar to your auto insurance policy whereas on the other hand, the extended warranty is offered by the automaker or by an independent third party.</p>
                </div>
              </div>
            </div> -->
            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0" itemprop="name">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">My Vehicle is old. Does that Matter? <i class="fa fa-plus"></i></button>                     
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>No, the age of a Vehicle does not affect your Select Auto Protect policy. We cover vehicles that are in good working condition at the time of your plan’s purchase. We cover all makes and models.</p>
                </div>
              </div>
            </div>
            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0" itemprop="name">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"> Do you need to send someone out to inspect my vehicle? <i class="fa fa-plus"></i></button>                     
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body"  itemprop="text">
                    <p>No, all we require is the vehicle Vin number and your current reading on the odometer.</p>
                </div>
              </div>
            </div>
            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0" itemprop="name">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"> Is there a limit to how many Claims I can place? <i class="fa fa-plus"></i></button>                     
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>No. With Select Auto Protect Policy, there is no limit to the amount of claims you can place with us!</p>
                </div>
              </div>
            </div>
            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="headingSix">
                  <h2 class="mb-0" itemprop="name">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"> How are claim repairs Paid? <i class="fa fa-plus"></i></button>                     
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Claims are made simple. Bring the vehicle to the repair facility of your choice, present your Select Auto Protect information to the service professional and we’ll pay for any covered repairs with our company credit card over the phone. All you pay is your deductible . There is no paperwork, and no need to pay first and then be reimbursed.</p>
                </div>
              </div>
            </div>
            <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="headingSeven">
                  <h2 class="mb-0" itemprop="name">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"> Can I Transfer my Policy to a new owner? <i class="fa fa-plus"></i></button>                     
                </h2>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>If your covered vehicle is sold during the term of your contract, you can easily transfer the policy over to the new vehicle owner. There is no fee for transferring your policy. Simply give us a call at <a class="site-link" href="tel:860-393-0962">860-393-0962</a> and submit the name of the new owner.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Faq_send  -->
<?php include 'inc/footer.php'; ?>