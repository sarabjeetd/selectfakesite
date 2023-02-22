<?php
session_start();
include "db.php";
if(isset($_POST)){
	
		$data = [
			'ip'=>get_client_ip(), 
			'referrer_site'=>$_POST['cur_url'], 
			'server_dump'=>json_encode($_SERVER), 
			'request_dump'=>$_POST['req_dump'], 
			'token'=>$_SESSION['token'], 
			'current'=>$_POST['cur_url'], 
			'previous'=>'',
			'browser'=>getBrowserInfo()['browser'],
			'request_id'=>$_POST['rq_data'],
			'version'=>getBrowserInfo()['browser_version'], 
			'is_desktop'=>((getBrowserInfo()['device']=="Desktop")?'1':'0'), 
			'is_phone'=>((getBrowserInfo()['device']=="Desktop")?'0':'1'), 
			'device'=>getBrowserInfo()['device'], 
			'platform'=>getBrowserInfo()['os_platform'], 
			'landing_page'=>'', 
			'created_at'=>date("Y-m-d h:i:s"), 
			'updated_at'=>date("Y-m-d h:i:s"),
			'formdata'=> json_encode($_POST['formArray']), 
			'sys_id'=> $_POST['sys_id'],
		];
		
		$value =  insert_data($data);
		$finalResult = array('msg' => $value, 'response'=>'success');
		echo json_encode($finalResult);
		exit;
	
}
?>