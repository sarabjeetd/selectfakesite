<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

include_once('VyaPay/vyaPayments.php');
//include_once('VyaPay/vyaCustomerVault.php');
//include_once('VyaPay/vyaUtilities.php');
// use vyaPayments;
//use vyaCustomerVault;
//use vyaUtilities;

//print_r(get_class_methods('vyaCustomerVault'));
//die();
$expiry = explode('/',$_POST['cc-expiration']);



$vyaP = new vyaPayments();
//$vyaCV = new vyaCustomerVault();
//$vyaU = new vyaUtilities();

$vyaP->setTransactionID($_POST['transaction_id']);

$response = $vyaP->processVoid();

print_r($response);
?>