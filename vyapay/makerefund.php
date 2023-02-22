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

$vyaP->setAmount($_POST['amount']);
$vyaP->setTransactionID($_POST['transaction_id']);

$response = $vyaP->processRefund();

print_r($response);

// if($vyaP->getStatus($response) == 'approved')
// 	// process approved trxn
// 	// echo "AuthCode: " . $vyaP->getAuthCode($response) 
// 	// . "<br/>" . $vyaP->getMessage($response)
// 	// . "<br/>" . $vyaP->getTransactionID($response)
// 	// ;
// else
// 	// process decline or handle error
// 	print_r( $vyaP->getMessage($response) );

?>