<?php
include("inc/header-signin.php");


?>


<div id="page-inner">
    <div class="row row-bm">
        <?php 
        if(isset($_SESSION["errorMessage"])) {
            ?>
            <div class="error-message alert alert-danger"><?php  echo $_SESSION["errorMessage"]; ?></div>
            <?php 
            unset($_SESSION["errorMessage"]);
        } 
        ?>
        <div class="col-md-12">

            <form action="login.php" method="post" id="frmLogin" onSubmit="return validate();">
                <div class="form-group">
                      <label for="username">Email</label><span id="user_info" class="error-info"></span>
                    <input type="email" class="form-control"  name="user_name" id="user_name">
                </div>
                <div class="form-group">
                      <label for="username">Password</label><span id="password_info" class="error-info"></span>
                    <input type="password" class="form-control"  name="password" id="password">

                </div>
                <div>
                    <input type="submit" name="login" value="Login"
                    class="btn btn-primary"></span>
                </div>
            </form>
        </div>
    </div>

</div>
    
<?php

include("inc/footer.php");
?>

