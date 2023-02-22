<?php 

//namespace VyaPay;

include 'utils/config.php';
include 'utils/Curl.php';
use utils\Curl;

class VyaPay {
	
	private $API_key = GW_API_KEY;
	private	$MID_key = GW_MID_KEY;
	private	$APP_id = GW_APP_ID;
	private $TEST_MODE = GW_TEST_MODE;

	private $path = GW_PATH;
	public $data;

	private $sumTable = array(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9), array(0, 2, 4, 6, 8, 1, 3, 5, 7, 9));

	function __construct(){
		
		$this->flushData();

	}

	protected function getTestMode() {
		return $this->TEST_MODE;
	}

//-----------------------------------------------

	public function customerAdd(){  //{ ["status"]=> string(9) "Not Found" ["message"]=> string(37) "Invalid API path and/or request type." }

		//return 'customerAdd(). Feature not implemented yet.  ';
		return $this->postRequest(gw_customer);

	}

	public function customerAddressAdd(){ //{ ["status"]=> string(9) "Not Found" ["message"]=> string(37) "Invalid API path and/or request type." }

		//return 'customerAdd(). Feature not implemented yet.  ';
		return $this->postRequest(gw_customer.'/'.$this->data->cid.'/address');
		
	}

	public function customerAddressEdit(){ //{ ["status"]=> string(9) "Not Found" ["message"]=> string(37) "Invalid API path and/or request type." }

		return 'customerAdd(). Feature not implemented yet.  ';
		//return $this->postRequest(gw_customer.'/'.$this->data->cid.'/address/'.$this->data->cid);

	}

//-----------------------------------------------

	protected function postRequest($url){

		return $this->sendRequest($url, 'POST');

	}

	protected function getRequest($url){

		return $this->sendRequest($url, 'GET');

	}

	function _isCurl(){
 	   return function_exists('curl_version');
	}

	private function sendRequest($url, $type){

		if ($this->_isCurl()) {  // if plugin is enabled.

		$this->data->mid = $this->MID_key;

		$post = [

			'transaction_data'	=> json_decode(json_encode($this->data), true)

		];

		$jsonData = json_encode($post);
		
		if($type == 'POST'){

			//var_dump($jsonData);

			$curl = new Curl(GW_PATH.$url);
			$curl->setOpt(CURLOPT_CUSTOMREQUEST, $type);
			$curl->setOpt(CURLOPT_POSTFIELDS, $jsonData);
			$curl->setOpt(CURLOPT_RETURNTRANSFER, true);
			$curl->setOpt(CURLOPT_CONNECTTIMEOUT, 30);
			$curl->setOpt(CURLOPT_TIMEOUT, 30);

			$curl->setOpt(CURLOPT_HTTPHEADER, array(
					'VyaLynk-App-ID:' . $this->APP_id,
					'VyaLynk-Client-ID:' . $this->API_key,
			        'Content-Type:' . GW_CONTENT_TYPE,
			        'Content-Length: ' . strlen($jsonData),
			        'GWToken:' . $this->API_key
		    		));

//			$curl->setHeader('GWToken', $this->API_key);

		}
		else{

			$curl = new Curl();
			$curl->setOpt(CURLOPT_HTTPHEADER, array(
					'VyaLynk-App-ID:' . $this->APP_id,
					'VyaLynk-Client-ID:' . $this->API_key,
			        'Content-Type:' . GW_CONTENT_TYPE,
			        'Content-Length: ' . strlen($jsonData),
			        'GWToken:' . $this->API_key
			    	));

//			$curl->setHeader('GWToken', $this->API_key);
			$curl->get(GW_PATH.$url, $jsonData);

		}

		$curl->exec();
		
		if ($curl->error) {
		    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
		} else {
		    
		    $this->flushData(); 
		    $ret = $curl->response;

			return $ret;

		}

		} else {  // if plugin is not enabled

			echo 'cURL is not enabled.  Please install PHP cURL Plugin.';
		}

	}

	protected function flushData() {

		$obj = [];
		$this->data = (object)$obj; 

	}

	protected function newException($msg) {
		$status = array(
			'status' => 'error',
			'message' => $msg,
			'code' => 'GW03'
		);
		echo json_encode($status); die();
	}

	private function calculateLuhn($number) {
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

	protected function validateLuhn($number,$digit) {
		$calculated = $this->calculateLuhn($number);
		if($digit == $calculated) return true;
		else return false;
	}

	public function getStatus($json) {
		$array = json_decode($json, true);
		return $array['status']; 
	}

	public function getMessage($json) {
		$array = json_decode($json, true);
		return $array['message']; 
	}

	public function getTransactionID($json) {
		$array = json_decode($json, true);
		return $array['transaction_id']; 
	}

	public function getAuthCode($json) {
		$array = json_decode($json, true);
		return $array['authcode']; 
	}

	public function getAccntToken($json) {
		$array = json_decode($json, true);
		return $array['token']; 
	}

	public function getAmountApproved($json) {
		$array = json_decode($json, true);
		return $array['amount_approved']; 
	}

	public function getBalance($json) {
		$array = json_decode($json, true);
		return $array['balance']; 
	}

	public function getCode($json) {
		$array = json_decode($json, true);
		return $array['code']; 
	}
}
 ?>