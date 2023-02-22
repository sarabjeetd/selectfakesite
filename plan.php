<?php
require_once('config.php');
define ('SITEURL', $cfg->siteurl);$title = 'Coverage Plans | Select Auto Protect';$description = "We have a number of coverage plans to suit your vehicle's needs. Visit this page to find the right repair plan to keep your vehicle protected today.";
include 'inc/header.php'; ?>
    <!-- header_start  -->
  <!-- Plan_start  -->
  <section class="home-plan py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 plan-heading mb-95">
            <h1>SELECT AUTO PROTECT PLANS</h1> 
          <p>Searching for the right plan can be extremely time consuming.At Select Auto Protect we have a number of coverage plans to suit your vehicle's needs. Take a look below to find the right repair plan to keep your vehicle protected today.</p>
        </div>
        <div class="col-sm-12 mt-4">
            <?php include 'inc/plan-table.php'; ?>
        </div>

      </div>
    </div>

  </section>
  <!-- Plan_end  -->

<?php include 'inc/footer.php'; ?>