<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Checkout Vyapay</title>


    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="https://getbootstrap.com/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Checkout form</h2>
    <p class="lead">Complete your order</p>
  </div>

  <div class="row">
    
    <div class="col-md-12 order-md-0">
      <h4 class="mb-3">Billing address</h4>
      <form action="makepayment.php" method="post" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="customerid">Customer ID</label>
            <input type="text" class="form-control" id="customerid" name="customerid" placeholder="" value="" required>
            <div class="invalid-feedback">
              Customer id 
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        
          <div class="mb-3">
            <label for="email">Email <span class="text-muted"></span></label>
            <input type="email" class="form-control" id="email" name="email" value="" placeholder="johndoe@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>
          <!--<div class="mb-3">
            <label for="phone">Phone <span class="text-muted"></span></label>
            <input type="phone" class="form-control" id="phone" name="phone" value="" placeholder="">
            <div class="invalid-feedback">
              
            </div>
          </div> -->
        
        
        <div class="row">
          <div class="col-md-12 mb-12">
            <label for="address">Address <span class="text-muted"></span></label>
            <input type="text" class="form-control" id="cc-address" name="cc-address" value="" placeholder="">
            <div class="invalid-feedback">
              Please enter a valid address for shipping updates.
            </div>
          </div>
          </div>

          <div class="row">
          <div class="col-md-3 mb-3">
            <label for="city">City</label>
            <input type="text" class="form-control" id="cc-city" name="cc-city" value="" placeholder="">
            <div class="invalid-feedback">
              Please enter a valid City for shipping updates.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="state">State</label>
            <input type="text" class="form-control" id="cc-state" name="cc-state" value="" placeholder="">
            <div class="invalid-feedback">
              Please enter a valid State for shipping updates.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-zip">Zip</label>
            <input type="text" class="form-control" id="cc-zip" name="cc-zip" value="" placeholder="" required>
            <div class="invalid-feedback">
              Zip required
            </div>
          </div>

        </div>

        
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" name="cc-name" placeholder="" value="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" name="cc-number" placeholder="" value="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" name="cc-expiration" value="" placeholder="mm/yy" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" name="cc-cvv" value="" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-amount">Amount</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
            <input type="text" class="form-control" id="cc-amount" name="amount" value="1" placeholder="" required>
            </div>
            
            <div class="invalid-feedback">
              Amount required
            </div>
          </div>
         
          <div class="col-md-3 mb-3">
            <label for="cc-orderid">Order ID</label>
            <input type="text" class="form-control" id="cc-orderid" name="cc-orderid" value="" placeholder="" required>
            <div class="invalid-feedback">
              Order ID required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>
