<?php
session_start();
include "db.php";
if (isset($_POST)) {
	$error = '';
    $_SESSION['fraud_chance']   =  $_POST['result']['fraud_chance'];
    $_SESSION['dv_request_id']   =  $_POST['result']['request_id'];
    $service_url = "https://dev.crm.selectautoprotect.com/admin/Apicron/lead_device_info";
    $_POST['result']['created_at'] = date('Y-m-d H:i:s');	
    $_POST['result']['cur_url'] = $_POST['cur_url'];
    //$auth = "demo@sap.com:password";
    $curl = curl_init($service_url);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $_POST['result']);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
    $curl_response = curl_exec($curl);
    $response = json_decode($curl_response);
    curl_close($curl);
    $finalResult = array('msg' => $response->status, 'response'=> $response->status);
    
    exit;        

}
