<?php

require_once('VyaPay.php');

class vyaCustomerVault extends VyaPay {

	public $data = array();

	function __construct() {
		parent::flushData();
	}

//All available set functions

	//Sets the full name displayed on credit card
	public function setCardFullName($cardFullName) {
		 $this->data->cardfullname = $cardFullName;
	}

	//Sets customer ID
	public function setCID($cID) {
		$this->data->cid = $cID;
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

	//Sets the ksn for the card track data 
	public function setKSNTrack($ksnTrack) {
		$this->data->ksnTrack = $ksnTrack;
	}

	//Sets customer card track data
	public function setTrackData($trackData) {
		//If ksnTrack is present then this is encrypted
		$this->data->trackdata = $trackData;
	}

	//Sets AVS address
	public function setAVSAddress($avsAddress) {
		$this->data->avsAddress = $avsAddress;
	}

	//Sets AVS zip code
	public function setAVSZip($avsZip) {
		$this->data->avsZip = $avsZip;
	}

//All other functions

	public function customers() { 
		return $this->getRequest(gw_customer);
	}

	public function customerGet() { 
		return $this->getRequest(gw_customer.'/'.$this->data->cid);
	}

	public function customerGetAddresses() { // { ["status"]=> string(5) "error" ["message"]=> string(59) "Customer not found. No customer with ID of address exists." ["code"]=> string(5) "GW011" }
		//return 'customerGetAllAddress(). Feature not implemented yet.  ';
		return $this->getRequest(gw_customer.'/'.$this->data->cid.'/address');
	}

	public function getToken() {
		return parent::postRequest(gw_card_get_token);
	}
}
 ?>