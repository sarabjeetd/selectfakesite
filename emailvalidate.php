<?php
session_start();
include "db.php";
if (isset($_POST)) {
	$error = '';
	$email =  $_POST['emails'];
    //check if email address format is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid Email';
    }
	
    //if format is good, check domain mx
    $domain = explode('@', $email);
    if (isset($domain[1])) {
        if (!getmxrr($domain[1], $mx)) {
            $error = 'Invalid email';
        }
    }
	if($error !=""){
		$finalResult = array('msg' => $error, 'response'=> 'error');
		echo json_encode($finalResult);
		exit;
	}else{
		$finalResult = array('msg' => 'success', 'response'=> 'success');
		echo json_encode($finalResult);
		exit;
	}
	
	
    // $service_url = "https://dev.dev.crm.selectautoprotect.com/admin/Apicron/phonevalidate";
    // $curl_post_data = [
    //     'phones' => $_POST['phones'],
    // ];
    // //$auth = "demo@sap.com:password";
    // $curl = curl_init($service_url);
    // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // //curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($curl, CURLOPT_POST, true);
    // curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
    // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
    // $curl_response = curl_exec($curl);
    // $response = json_decode($curl_response);
    // curl_close($curl);
    // $finalResult = array('msg' => $response->status, 'response' => $response->status);
    // echo json_encode($finalResult);
    // exit;
}
