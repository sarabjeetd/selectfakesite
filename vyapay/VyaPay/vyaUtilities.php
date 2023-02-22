<?php

require_once('VyaPay.php');

class vyaUtilities extends VyaPay {

	public $data = array();

	private $sumTable = array(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9), array(0, 2, 4, 6, 8, 1, 3, 5, 7, 9));

	function __construct() {
		parent::flushData();
	}

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

	//Sets account number
	public function setAcctNumber($accNumber) {
		$this->data->account_number = $accNumber;
	}

	//Sets customer name
	public function setCName($cName) {
		$this->data->customer_name = $cName;
	}

	//Sets format type
	public function setFormat($format) {
		//Format types 'img' or 'data'
		$formatD = 'img';
		if(isset($format)) {
			$formatD = $format;
		}
		$this->data->format = $formatD;
	}

	//Sets info type
	public function setType($type) {
		//EXP or OTU
		$this->data->type = $type;
	}

//getToken, getQRCode, getVCN, verifyCC, validateCC, BINchk


	public function getToken() {
		return parent::postRequest(gw_card_get_token);
	}

	public function getQRCode() {
		return parent::postRequest(gw_card_get_qrcode);
	}

	public function getVCN() {
		return parent::postRequest(gw_card_get_vcn);
	}

	public function verifyCC() {
		$status = array(
			'status' => 'error',
			'message' => 'verifyCC() feature not implemented yet.',
			'code' => 'GW03'
		);
		echo json_encode($status);
		//$this->postRequest(gw_verify_card);
	}

	public function validateCC() {
		$digit = substr($this->data->account_number,-1);
		$calculated = $this->calculateCC(substr($this->data->account_number,0,strlen($this->data->account_number)-1));
		if($digit == $calculated) {
			$status = array(
				'status' => 'ok',
				'message' => 'Credit card - valid',
				'code' => 'GW00'
			);
			echo json_encode($status);
		} else {
			$status = array(
				'status' => 'error',
				'message' => 'Credit card - not valid',
				'code' => 'GW03'
			);
			echo json_encode($status);
		}
	}

	private function calculateCC($number) {
		$length = strlen($number);
		$sum = 0;
		$flip = 1;
		// Sum digits (last one is check digit, which is not in parameter)
		for($i = $length-1; $i >= 0; --$i) $sum += $this->sumTable[$flip++ & 0x1][$number[$i]];
		// Multiply by 9
		$sum *= 9;
		// Last digit of sum is check digit
		return (int)substr($sum, -1, 1);
	}

	public function BINchk() {
		return parent::postRequest(gw_card_bin_chk);
	}
}
 ?>