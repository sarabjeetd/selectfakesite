<?php

require_once('VyaPay.php');

class vyaPayments extends VyaPay {

	public $data = array();

	function __construct() {
		parent::flushData();
	}

/*	
*RecurAmount
*RecurEvery	
*RecurEnd
*RecurOccur	
*/
//Add hospitality fields

//All available set functions

	//Sets the amount to charge the customer
	public function setAmount($amount) {
		$this->data->amount = $amount;
	}

	//Sets the first name of the customer
	public function setFirstName($firstName) {
		 $this->data->cfirstname = $firstName;
	}

	//Sets the last name of the customer
	public function setLastName($lastName) {
		 $this->data->clastname = $lastName;
	}

	//Sets the email of the cardholder
	public function setEmail($email) {
		 $this->data->cemail = $email;
	}

	//Sets the full name displayed on credit card
	public function setCardFullName($cardFullName) {
		 $this->data->cardfullname = $cardFullName;
	}

	//Sets the credit card number 
	public function setCreditCard($creditCard) {
		$luhnChk = true;
		if(!parent::getTestMode()) {
			$luhnChk = parent::validateLuhn(substr($creditCard,0,strlen($creditCard)-1),substr($creditCard,-1));
		}
		if($luhnChk == false) {
			parent::newException('Card Number is incorrect.');
		} else {
			$this->data->creditcard = $creditCard;
		}
	}

	//Sets CVV value of creditcard
	public function setCVV($cvv) {
		$cvvLen = strlen($cvv);
		if($cvvLen != 3 && $cvvLen != 4) {
			parent::newException("CVV length must be 3 or 4 digits.");
		} else {
			$this->data->cvv = $cvv;
		}
	}

	//Sets the credit card expiration month
	public function setMonth($month) {
		$intMonth = intval($month);
		if($intMonth < 1 || $intMonth > 12) {
			parent::newException('Month must be between 1 and 12.');
		} else {	
			$this->data->month = $month;
		}
	}

	//Sets the credit card expiration year
	public function setYear($year) {
		if($year+2000 < date('Y')) {
			parent::newException('Year must be equal to or greater than the current year ('.date('y').').');
		} else {
			$this->data->year = $year;
		}
	}

	//Sets the ip adress of the customer
	public function setIpAddress($ipAddress) {
		$this->data->ipaddress = $ipAddress;
	}

	//Sets order ID
	public function setOrderID($orderID) {
		$this->data->orderid = $orderID;
	}

	//Sets billing address
	public function setBilling_Address($bAddress) {
		$this->data->baddress = $bAddress;
	}

	//Sets billing address 2
	public function setBilling_Address2($bAddress2) {
		$this->data->bAddress2 = $bAddress2;
	}

	//Sets billing city
	public function setBilling_City($bCity) {
		$this->data->bcity = $bCity;
	}

	//Sets billing state
	public function setBilling_State($bState) {
		$this->data->bstate = $bState;
	}

	//Sets billing zip code
	public function setBilling_Zip($bZip) {
		$this->data->bzip = $bZip;
	}

	//Sets billing country
	public function setBilling_Country($bCountry) {
		$this->data->bcountry = $bCountry;
	}

	//Sets costumer phone number
	public function setCPhone($cPhone) {
		$this->data->cphone = $cPhone;
	}

	//Sets costumer currency type
	public function setCurrency($currency) {
		$this->data->currency = $currency;
	}

	//Sets costumer web address
	public function setCWebAddress($cWebAddress) {
		$this->data->cwebaddress = $cWebAddress;
	}

	//Sets the ksn for the card track data 
	public function setKSNTrack($ksnTrack) {
		$this->data->ksnTrack = $ksnTrack;
	}

	//Sets customer card track data
	public function setTrackData($trackData) {
		//If ksnTrack is present then this is encrypted
		$this->data->trackdata = $trackData;
	}

	//Sets the ksn for the card pin
	public function setKSNPin($ksnPin) {
		$this->data->ksnPIN = $ksnPin;
	}

	//Sets the customer card pin
	public function setPin($pin) {
		//If ksnPin is present then this is encrypted
		$this->data->PIN = $pin;
	}

	//Sets the CAVV
	public function setCAVV($cavv) {
		$this->data->CAVV = $cavv;
	}

	//Sets the XID
	public function setXID($xID) {
		$this->data->XID = $xID;
	}

	//Sets the ECIFlag
	public function setECIFlag($eciFlag) {
		$this->data->ECIFlag = $eciFlag;
	}

	//Sets invoice ID
	public function setInvoiceID($invoiceID) {
		$this->data->invoiceid = $invoiceID;
	}

	//Sets gift card status
	public function setGiftCard($giftCard) {
		$this->data->giftcard = $giftCard;
	}

	//Sets service charge amount
	public function setServiceCharge($serviceCharge) {
		$this->data->service_charge = $serviceCharge;
	}

	//Sets AVS address
	public function setAVSAddress($avsAddress) {
		$this->data->avsAddress = $avsAddress;
	}

	//Sets AVS zip code
	public function setAVSZip($avsZip) {
		$this->data->avsZip = $avsZip;
	}

	//Sets the transaction ID
	public function setTransactionID($transactionID) {
		$this->data->transaction_id = $transactionID;
	}

	//Sets start date
	public function setStartDate($start) {
		$this->data->from = $start;
	}

	//Sets end date
	public function setEndDate($end) {
		$this->data->to = $end;
	}

	//Sets shipping fist name
	public function setShipping_FirstName($sFirstName) {
		$this->data->sfirstname = $sFirstName;
	}


	//Sets shipping last name
	public function setShipping_LastName($sLastName) {
		$this->data->slastname = $sLastName;
	}

	//Sets shipping address
	public function setShipping_Address($sAddress) {
		$this->data->saddress = $sAddress;
	}

	//Sets shipping address 2
	public function setShipping_Address2($sAddress2) {
		$this->data->saddress2 = $sAddress2;
	}

	//Sets shipping city
	public function setShipping_City($sCity) {
		$this->data->scity = $sCity;
	}

	//Sets shipping state
	public function setShipping_State($sState) {
		$this->data->szip = $sZip;
	}

	//Sets shipping country
	public function setShipping_Country($sCountry) {
		$this->data->scountry = $sCountry;
	}

	//Sets shipping phone number
	public function setShipping_Phone($sPhone) {
		$this->data->sphone = $sPhone;
	}

	//Sets shipping email
	public function setShipping_Email($sEmail) {
		$this->data->semail = $sEmail;
	}

	//Sets shipping method
	public function setShipping_Method($sMethod) {
		$this->data->smethod = $sMethod;
	}

	//Sets shipping tracking number
	public function setShipping_TrackingNumber($sTrackingNumber) {
		$this->data->strackingnumber = $sTrackingNumber;
	}

	//Sets shipping date
	public function setShipping_Date($sDate) {
		$this->data->sdate = $sDate;
	}

//All other functions

	public function processSale() {
		return parent::postRequest(gw_card_sale);
	}

	public function processSalePos() {
		return parent::postRequest(gw_card_sale_pos);
	}

	public function processSaleRecurring() { 
		$status = array(
			'status' => 'error',
			'message' => 'processSaleRecurring() feature not implemented yet.',
			'code' => 'GW03'
		);
		echo json_encode($status);
		// return $this->postRequest(gw_card_sale_recurring);
	}

	public function verifyCard() {
		$status = array(
			'status' => 'error',
			'message' => 'verifyCard() feature not implemented yet.',
			'code' => 'GW03'
		);
		echo json_encode($status);
		//$this->postRequest(gw_verify_card);
	}

	public function getToken() {
		return parent::postRequest(gw_card_get_token);
	}

	public function processAuthorize() {
		return parent::postRequest(gw_card_authorize);
	}

	public function processCapture() {
		return parent::postRequest(gw_card_capture);	
	}

	public function processVoid() {
		return parent::postRequest(gw_card_void);
	}

	public function processRefund() {
		return parent::postRequest(gw_card_refund);	
	}

	public function processRecurring() {
		$status = array(
			'status' => 'error',
			'message' => 'processRecurring() feature not implemented yet.',
			'code' => 'GW03'
		);
		echo json_encode($status);
		//return $this->postRequest(gw_card_recurring);	
	}

	public function processChargeBacks() { 
		return parent::postRequest(gw_card_chargebacks);
	}
} 
 ?>