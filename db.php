<?php

if(!isset($_SESSION['token'])){
		$_SESSION['token'] = md5(time());
}

foreach($_GET as $key => $val){
	$_GET[strtolower($key)] = $val;
}

/*ref session set*/
if(isset($_GET['ref']) && !empty($_GET['ref'])){
        // echo '<p style="display:none">1111</p>';
    	unset($_SESSION['ref']);
		$_SESSION['ref'] = isset($_GET['ref']) && !empty($_GET['ref'])?$_GET['ref']:'';
}
if(isset($_SESSION['ref'])){
    // echo '<p style="display:none">2222</p>';
		$_GET['ref'] = $_SESSION['ref'];
}else{
    // echo '<p style="display:none">3333</p>';
	$_GET['ref'] = '';
}

/*sid session set*/
if(isset($_GET['sid']) && !empty($_GET['sid'])){
		unset($_SESSION['sid']);
		$_SESSION['sid'] = isset($_GET['sid']) && !empty($_GET['sid'])?$_GET['sid']:'';
}
if(isset($_SESSION['sid'])){
		$_GET['sid'] = $_SESSION['sid'];
}
/*uid session set*/
if(isset($_GET['uid']) && !empty($_GET['uid'])){
		unset($_SESSION['uid']);
		$_SESSION['uid'] = isset($_GET['uid']) && !empty($_GET['uid'])?$_GET['uid']:'';
}
if(isset($_SESSION['uid'])){
		$_GET['uid'] = $_SESSION['uid'];
}

/*tier session set*/
if(isset($_GET['tier']) && !empty($_GET['tier'])){
		unset($_SESSION['tier']);
		$_SESSION['tier'] = isset($_GET['tier']) && !empty($_GET['tier'])?$_GET['tier']:'';
}
if(isset($_SESSION['tier'])){
		$_GET['tier'] = $_SESSION['tier'];
}

/*utm_source session set*/
if(isset($_GET['utm_source']) && !empty($_GET['utm_source'])){
		unset($_SESSION['utm_source']);
		$_SESSION['utm_source'] = isset($_GET['utm_source']) && !empty($_GET['utm_source'])?$_GET['utm_source']:'';
}
if(isset($_SESSION['utm_source'])){
		$_GET['utm_source'] = $_SESSION['utm_source'];
}

/*utm_medium session set*/
if(isset($_GET['utm_medium']) && !empty($_GET['utm_medium'])){
		unset($_SESSION['utm_medium']);
		$_SESSION['utm_medium'] = isset($_GET['utm_medium']) && !empty($_GET['utm_medium'])?$_GET['utm_medium']:'';
}
if(isset($_SESSION['utm_medium'])){
		$_GET['utm_medium'] = $_SESSION['utm_medium'];
}

/*utm_campaign session set*/
if(isset($_GET['utm_campaign']) && !empty($_GET['utm_campaign'])){
		unset($_SESSION['utm_campaign']);
		$_SESSION['utm_campaign'] = isset($_GET['utm_campaign']) && !empty($_GET['utm_campaign'])?$_GET['utm_campaign']:'';
}
if(isset($_SESSION['utm_campaign'])){
		$_GET['utm_campaign'] = $_SESSION['utm_campaign'];
}

/*utm_content session set*/
if(isset($_GET['utm_content']) && !empty($_GET['utm_content'])){
		unset($_SESSION['utm_content']);
		$_SESSION['utm_content'] = isset($_GET['utm_content']) && !empty($_GET['utm_content'])?$_GET['utm_content']:'';
}
if(isset($_SESSION['utm_content'])){
		$_GET['utm_content'] = $_SESSION['utm_content'];
}
/*utm_term session set*/
if(isset($_GET['utm_term']) && !empty($_GET['utm_term'])){
		unset($_SESSION['utm_term']);
		$_SESSION['utm_term'] = isset($_GET['utm_term']) && !empty($_GET['utm_term'])?$_GET['utm_term']:'';
}
if(isset($_SESSION['utm_term'])){
		$_GET['utm_term'] = $_SESSION['utm_term'];
}

function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
}
function insert_data($data){
	
	
	$service_url = "https://dev.crm.selectautoprotect.com/admin/api/getToken";
	$curl_post_dataa= [	
		'token'	=> $data['sys_id'],
		'crm_token'=> ')HiQ@xS8/!RY/lY',
	];	
    
	date_default_timezone_set('UTC');
	//$auth = "demo@sap.com:password";
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	//curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-Forwarded-For: ".$_SERVER['SERVER_ADDR']));
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_dataa);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
	$curl_response = curl_exec($curl);
	$token_result = json_decode($curl_response);
	curl_close($curl);
	
	$to_time = time();
	$from_time = strtotime($token_result->data->created_at);
	$time_diff = $to_time - $from_time;
	$difference_minute =  $time_diff/60;

	if ($token_result->status == 'success' && $difference_minute <= $token_result->data->lifetime ) {

	$service_url = "https://dev.crm.selectautoprotect.com/track_webpage";
	$curl_post_data = [
						'ip' => isset($data['ip'])?$data['ip']:'',
					'referrer_site' => isset($data['referrer_site'])?$data['referrer_site']:'',
					'server_dump' => isset($data['server_dump'])?$data['server_dump']:'',
					'request_dump' => isset($data['request_dump'])?$data['request_dump']:'',
					'request_data' => isset($data['request_data'])?$data['request_data']:'',
					'token' => isset($data['token'])?$data['token']:'',
					'current' => isset($data['current'])?$data['current']:'',
					'previous' => isset($data['previous'])?$data['previous']:'' ,
					'browser' => isset($data['browser'])?$data['browser']:'',
					'version' => isset($data['version'])?$data['version']:'',
					'is_desktop' => isset($data['is_desktop'])?$data['is_desktop']:'',
					'is_phone' => isset($data['is_phone'])?$data['is_phone']:'',
					'device' => isset($data['device'])?$data['device']:'',
					'device' => isset($data['device'])?$data['device']:'',
					'formdata' => isset($data['formdata'])?$data['formdata']:'',
					'landing_page' => isset($data['landing_page'])?$data['landing_page']:'',
					'created_at' => isset($data['created_at'])?$data['created_at']:'',
					'updated_at'  => isset($data['updated_at'])?$data['updated_at']:'',
					'ref_id' => isset($data['ref_id'])?$data['ref_id']:'',
					'vpn_status' => $_SESSION['external_request']  ,
					'fraud_score' =>	$_SESSION['fraud_score']       ,
					'proxy' => $_SESSION['proxy']             ,
					'bot_status' =>$_SESSION['bot_status']        ,
					'request_id' =>$data['request_id']        ,
					'crm_token' => ')HiQ@xS8/!RY/lY'       ,
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
}
function getBrowserInfo(){
    $browserInfo = array('user_agent'=>'','browser'=>'','browser_version'=>'','os_platform'=>'','pattern'=>'', 'device'=>'');

    $u_agent = $_SERVER['HTTP_USER_AGENT']; 
    $bname = 'Unknown';
    $ub = 'Unknown';
    $version = "";
    $platform = 'Unknown';

    $deviceType='Desktop';

    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$u_agent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($u_agent,0,4))){

        $deviceType='Mobile';

    }

    if($_SERVER['HTTP_USER_AGENT'] == 'Mozilla/5.0(iPad; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B314 Safari/531.21.10') {
        $deviceType='Tablet';
    }

    if(stristr($_SERVER['HTTP_USER_AGENT'], 'Mozilla/5.0(iPad;')) {
        $deviceType='Tablet';
    }

    //$detect = new Mobile_Detect();
    
    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';

    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';

    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the user agent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'IE'; 
        $ub = "MSIE";

    } else if(preg_match('/Firefox/i',$u_agent))
    { 
        $bname = 'Mozilla Firefox'; 
        $ub = "Firefox"; 

    } else if(preg_match('/Chrome/i',$u_agent) && (!preg_match('/Opera/i',$u_agent) && !preg_match('/OPR/i',$u_agent))) 
    { 
        $bname = 'Chrome'; 
        $ub = "Chrome"; 

    } else if(preg_match('/Safari/i',$u_agent) && (!preg_match('/Opera/i',$u_agent) && !preg_match('/OPR/i',$u_agent))) 
    { 
        $bname = 'Safari'; 
        $ub = "Safari"; 

    } else if(preg_match('/Opera/i',$u_agent) || preg_match('/OPR/i',$u_agent)) 
    { 
        $bname = 'Opera'; 
        $ub = "Opera"; 

    } else if(preg_match('/Netscape/i',$u_agent)) 
    { 
        $bname = 'Netscape'; 
        $ub = "Netscape"; 

    } else if((isset($u_agent) && (strpos($u_agent, 'Trident') !== false || strpos($u_agent, 'MSIE') !== false)))
    {
        $bname = 'Internet Explorer'; 
        $ub = 'Internet Explorer'; 
    } 
    

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];

        } else {
            $version= isset($matches['version'][1])?$matches['version'][1]:'';
        }

    } else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'user_agent' => $u_agent,
        'browser'      => $bname,
        'browser_version'   => $version,
        'os_platform'  => $platform,
        'pattern'   => $pattern,
        'device'    => $deviceType
    );
}

function save_leads($data){
	$service_url = "https://dev.crm.selectautoprotect.com/admin/api/getToken";
	$curl_post_daa= [	
		'token'	=> $data['sys_id'],
		'crm_token'=> ')HiQ@xS8/!RY/lY'       ,
	];		
	date_default_timezone_set('UTC');
	//$auth = "demo@sap.com:password";
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	//curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-Forwarded-For: ".$_SERVER['SERVER_ADDR']));
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_daa);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
	$curl_response = curl_exec($curl);
	$token_result = json_decode($curl_response);
	curl_close($curl);
	
	$to_time = time();
	$from_time = strtotime($token_result->data->created_at);
	$time_diff = $to_time - $from_time;
	$difference_minute =  $time_diff/60;
 
	if ($token_result->status == 'success' && $difference_minute <= $token_result->data->lifetime ) {
	$service_url = "https://dev.crm.selectautoprotect.com/admin/api/savesapleads";
	$curl_post_data = [
						'first_name' => @$data['first_name'],
						'last_name' => @$data['last_name'],
						'email' => @$data['email'],
						'home_phone' => @$data['home_phone'],
						'cell_phone' => @$data['cell_phone'],
						'address' => @$data['address'],
						'city' => @$data['city'], 
						'state' => @$data['state'],
						'zipcode' => @$data['zipcode'],
						'referrer' => @$data['referrer'],
						'sid' => @$data['sid'],
						'uid' => @$data['uid'],
						'gclid' => @$data['gclid'],
						'year' => @$data['year'],
						'make' => @$data['make'],
						'model' => @$data['model'],
						'mileage'  => @$data['mileage'],
						'referrer_site'  => @$data['referrer_site'],
						'leadcode'  => @$data['leadcode'],
						'vsoft_status'  => @$data['vsoft_status'],
						'vsoft_type_of_plan'  => @$data['vsoft_type_of_plan'],
						'vsoft_amount_paid_today'  => @$data['vsoft_amount_paid_today'],
						'vsoft_plan_total'  => @$data['vsoft_plan_total'],
						'affid'  => @$data['affid'],
						'tier' => @$data['tier'],
						'utm_source' => @$data['utm_source'],
						'utm_medium' => @$data['utm_medium'],
						'utm_campaign' => @$data['utm_campaign'],
						'utm_content' => @$data['utm_content'],
						'utm_term' => @$data['utm_term'],
						'token'=> @$data['token'],
						'ip'=> @$data['ip'],
						'vpn_status' => @$_SESSION['external_request']  ,
						'ip_state' => @$_SESSION['ip_state']  ,
						'fraud_score' =>	@$_SESSION['fraud_score']       ,
						'proxy' => @$_SESSION['proxy']             ,
						'bot_status' => @$_SESSION['bot_status']        ,
						'valid_email' => @$data['valid_email'],
						'email_disposable'			=> @$data['email_disposable'],
						'email_smtp_score'			=> @$data['email_smtp_score'],
						'email_overall_score'		=> @$data['email_overall_score'],
						'email_dns_valid'			=> @$data['email_dns_valid'],
						'email_honeypot'			=> @$data['email_honeypot'],
						'email_deliverability'		=> @$data['email_deliverability'],
						'email_spam_trap_score'		=> @$data['email_spam_trap_score'],
						'email_fraud_score'			=> @$data['email_fraud_score'],
						'posted_to_vs'				=> @$data['posted_to_vs'],
						'device_request_id'			=> @$data['device_request_id'],
						'ip_quality'				=> @$data['ip_quality'],
						'device_id'			        => @$data['device_id'],
						'email_quality'				=> @$data['email_quality'],
						'ip_quality'				=> @$data['ip_quality'],
						'grecaptcha'				=> @$data['grecaptcha'],
						'crm_token' => @')HiQ@xS8/!RY/lY'       ,
					];		

			

	//$auth = "demo@sap.com:password";
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	//curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-Forwarded-For: ".$_SERVER['SERVER_ADDR']));
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
	$curl_response = curl_exec($curl);
	$response = json_decode($curl_response);
	curl_close($curl);
    // print_r($response);
	return $response;
}
}

function update_lead_status($data){
	
	$service_url = "https://dev.crm.selectautoprotect.com/admin/api/update_lead_status";
	$curl_post_data = [
						
			'posted_to_vs'	=> $data['posted_to_vs'],
			'id'			=> $data['lead_id'],
			
		];		

			

	//$auth = "demo@sap.com:password";
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	//curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("X-Forwarded-For: ".$_SERVER['SERVER_ADDR']));
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
	$curl_response = curl_exec($curl);
	$response = json_decode($curl_response);
	curl_close($curl);
	return $response;
}


function getLeadsourceData(){
	date_default_timezone_set('US/Eastern');
	
    // if(isset($_SESSION['ref']) && !empty($_SESSION['ref'] && $_SESSION['ref']!=$_GET['ref'])){
    //     $id = $_GET['ref'];    
    // }else{
    //     $id = $_SESSION['ref'];
    // }
        

    $id = isset($_GET['ref'])?$_GET['ref']:0;


	$service_url = "https://dev.crm.selectautoprotect.com/admin/api/getSource?lead_source=".$id;
    // echo "<p style='display:none' id='sarab'>";
    //     print_r($_SESSION);
    //     print_r($_GET);
    // echo "</p>";

	//$auth = "demo@sap.com:password";
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	//curl_setopt($curl, CURLOPT_USERPWD, $auth); //Your credentials goes here
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($curl, CURLOPT_POST, true);
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate
	$curl_response = curl_exec($curl);
	$response = json_decode($curl_response);
	
	curl_close($curl);
	
	if(isset($response->status) && $response->status == "success"){
			$result = isset($response->response->sourcedata)?$response->response->sourcedata:null;
			//print_r($result);exit;
			if(isset($result->sales_phone_no)){
				return $result;
			}else{
				return null;
			}
			
	}
}

function unsetMethod(){
	if(isset($_GET)){
	foreach($_GET as $key => $val){
		unset($_GET[$key]);
	if(isset($_SESSION[$key])){
		unset($_SESSION[$key]);
		session_destroy();
		session_unset();
		}
	}
	}
	if(isset($_SESSION)){
		session_destroy();
		session_unset();
	}
}
?>