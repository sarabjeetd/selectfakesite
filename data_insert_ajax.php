<?php  
include('db.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $service_url = "https://dev.crm.selectautoprotect.com/track_webpage";
    $curl_post_data = [
                        'ip' => get_client_ip(),
                        'referrer_site' => $_POST['referrer_site'],
                        'server_dump' => json_encode($_SERVER),
                        'request_dump' => $_POST['request_dump'],
                        'request_data' => $_POST['request_data'],
                        'token' => $_SESSION['token'],
                        'current' => $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
                        'previous' =>(isset($_SESSION['previous']) ? $_SESSION['previous'] : ''),
                        'browser' =>getBrowserInfo()['browser'],
                        'version' => getBrowserInfo()['browser_version'],
                        'is_desktop' =>((getBrowserInfo()['device']=="Desktop") ? '1' : '0'),
                        'is_phone' => ((getBrowserInfo()['device']=="Desktop") ? '0' : '1'),
                        'device' => getBrowserInfo()['device'],
                        'platform' =>getBrowserInfo()['os_platform'],
                        'landing_page' =>'',
                        'created_at' =>date("Y-m-d h:i:s"),
                        'updated_at'  => date("Y-m-d h:i:s"),
                        'ref_id' => isset($_POST['ref']) ? $_POST['ref'] : '',
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
    return $response;
}