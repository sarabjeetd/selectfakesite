<?php
$key = 'qvBkqsDYubNz6hiZiEIvJwkTrojQbmro';
$ip = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT']; 
$user_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$strictness = 1;
$allow_public_access_points = 'true';
$lighter_penalties = 'false';
// Create parameters array.
$parameters = array(
    'user_agent' => $user_agent,
    'user_language' => $user_language,
    'strictness' => $strictness,
    'allow_public_access_points' => $allow_public_access_points,
    'lighter_penalties' => $lighter_penalties
);
$formatted_parameters = http_build_query($parameters);

// Create API URL
$url = sprintf(
    'https://www.ipqualityscore.com/api/json/ip/%s/%s?%s', 
    $key,
    $ip, 
    $formatted_parameters
);

// Fetch The Result
$timeout = 5;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);

$json = curl_exec($curl);
curl_close($curl);
$ipqualityscore = json_decode($json, true);
$_SESSION['ipqualityscore']  = $json;
$service_url = 'https://vpnapi.io/api/'.get_client_ip().'?key=c160a53a7c604d828aa1e27bd9050f24';
$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, $service_url);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cURLConnection);
curl_close($cURLConnection);
$result = json_decode($response);
$vpncheck = $result->security;
if($ipqualityscore['vpn'] == 1 || $vpncheck->vpn == 1){
    $vpn = 1;
}
$_SESSION['external_request']   = $vpn;
$_SESSION['fraud_score']        = $ipqualityscore['fraud_score'];
$_SESSION['ip_state']           = $ipqualityscore['region'];
$_SESSION['proxy']              =  $ipqualityscore['proxy'];
$_SESSION['bot_status']         =  $ipqualityscore['bot_status'];
$_SESSION['tor']                =  $ipqualityscore['tor'];
$_SESSION['es']                 =  0;

if($ipqualityscore['vpn'] == 1 || $vpncheck->vpn == 1){
    $vpn = 1;
}
$verify = uniqid();
$service_url = "https://crm.selectautoprotect.com/admin/api/saveToken";
$posttoken = array(
	'crm_token' => ')HiQ@xS8/!RY/lY' ,
	'token' => $verify,
)	;
//$auth = "demo@sap.com:password";
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $posttoken);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
$curl_response = curl_exec($curl);
$response = json_decode($curl_response);
curl_close($curl);
?>
<input type="hidden" name="request_id" id="request_id" value="">
<input type="hidden" name="dev_rand_id" id="dev_rand_id" value="">
<input type="hidden" name="dev_f_chance" id="dev_f_chance" value="">
<input type="hidden" name="sys_id" id="sys_id" value="<?php echo $verify; ?>">