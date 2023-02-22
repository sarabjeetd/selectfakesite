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
$vyaP->setFirstName($_POST['firstName']);
$vyaP->setLastName($_POST['lastName']);
$vyaP->setEmail($_POST['email']);
$vyaP->setCardFullName($_POST['cc-name']);
$vyaP->setCreditCard($_POST['cc-number']);
$vyaP->setCVV($_POST['cc-cvv']);
$vyaP->setMonth($expiry[0]);
$vyaP->setYear($expiry[1]);
$vyaP->setCurrency('USD');
$vyaP->setAVSZip($_POST['cc-zip']);
// $vyaP->setOrderID($_POST['cc-orderid']);
$vyaP->setBilling_Country('US');
$vyaP->setAVSAddress($_POST['cc-address']);
// $vyaP->setOrderID("28249299");
// $vyaP->setInvoiceID('zn969');
$vyaP->setBilling_Address($_POST['cc-address']);
// $vyaP->setBilling_Address2();
$vyaP->setBilling_City($_POST['cc-city']);
$vyaP->setBilling_State($_POST['cc-state']);
$vyaP->setBilling_Zip($_POST['cc-zip']);
$vyaP->setCPhone($_POST['cc-phone']);
// $vyaP->setCWebAddress('www.web.com');
//$vyaP->setTrackData('0');
//$vyaP->setKSNTrack('0');
//$vyaP->setPin('0');
//$vyaP->setKSNPin('0');
//$vyaP->setCAVV('0');
//$vyaP->setXID('0');
//$vyaP->setECIFlag('0');
//$vyaP->setGiftCard('0');
//$vyaP->setServiceCharge('0');
// $vyaP->setAVSAddress('29727');
//$vyaP->setTransactionID('0');
// $vyaP->setIpAddress('0.0.0.0');
//$vyaP->setStartDate('07/01/2015');
//$vyaP->setEndDate('07/31/2015');

//$vyaCV->setCID('2');

//$vyaU->setAcctNumber('5544044490909090');
//$vyaU->setCName('John Doe');
//$vyaU->setFormat('img');
//$vyaU->setType('OTU');

$response = $vyaP->processSale();

if($vyaP->getStatus($response) == 'approved')
	// process approved trxn
	//echo "AuthCode: " . $vyaP->getAuthCode($response) . "<br/>" . $vyaP->getMessage($response);
	echo "AuthCode: " . $vyaP->getAuthCode($response) 
	. "<br/>" . $vyaP->getMessage($response)
	. "<br/>" . $vyaP->getTransactionID($response)
	;
else
	// process decline or handle error
	print_r( $vyaP->getMessage($response) );

?>