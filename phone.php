<?php
session_start();
include "db.php";
if(isset($_POST)){
	$service_url = "https://dev.crm.selectautoprotect.com/admin/Apicron/phonevalidate";
	$curl_post_data = [
						'phones' => $_POST['phones'],
					];			
	//$auth = "demo@sap.com:password";
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	//curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
	$curl_response = curl_exec($curl);
	$response = json_decode($curl_response);
	curl_close($curl);
	$finalResult = array('msg' => $response->status, 'response'=> $response->status);
		echo json_encode($finalResult);
		exit;
}
?>