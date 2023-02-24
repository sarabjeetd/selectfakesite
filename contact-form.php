<?php

if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@completecarehomewarranty.com";
    $email_subject = "Free Quote For Your Home Warranty!";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
	!isset($_POST['address']) ||
        !isset($_POST['zip_code'])) {
        echo '<script type="text/javascript">alert("We are sorry, but there appears to be a problem with the form you submitted.");window.location=\'index.html\';</script>'; 
        //died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $address = $_POST['address']; // not required
    $zip_code = $_POST['zip_code']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    
    $email_message = "Free Quote For Your Home Warranty Contact Form Details Below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telephone: ".clean_string($phone)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "Zip-Code: ".clean_string($zip_code)."\n";
    
    
    $new_name = explode(" ",clean_string($name));
    $first_name = '';
    $last_name = '';
    if(isset($new_name[0])){
    $first_name = $new_name[0];
    }
    
    if(isset($new_name[1])){
    $last_name = $new_name[1];
    }
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

?>
 
<!-- include your own success html here -->

<?php 
if ($response == "Success"){
echo '<script type="text/javascript">alert("Mail Send Successfully.\n\nThank you!\n Our Representative will reach out to you shortly for your free quote.");window.location=\'index.html\';</script>';
}else{
echo '<script type="text/javascript">alert("Something went wrong. Please try again");window.location=\'index.html\';</script>';
}
 ?>
<?php
  
}
?>