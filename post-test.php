<?php
session_start();
include "db.php";
echo "by main...<br/>";
$get_lead = 0;

		$data1 = [
			'first_name' =>'test',
			'last_name' => 'test123',
			'email' => 'test@test.com',
			'home_phone' => '1234567890',
			'cell_phone' => '',
			'address' => '',
			'city' => '', 
			'state' => '',
			'zipcode' => '12345',
			'year' => '2001',
			'make' => 'make',
			'model' => 'model',
			'mileage'  => '1234',
			'referrer_site'  =>'',
			'vsoft_status'  => '',
			'vsoft_type_of_plan'  => '',
			'vsoft_amount_paid_today'  => '',
			'vsoft_plan_total'  => '',
			'affid' => 'aff',
			'referrer' => 'ref',
			'sid' => 'sid',
			'uid' =>'uid',
			'leadcode' => ''
		];
	$get_id = save_leads($data1);
	print_r($get_id);exit;
	if(isset($get_id[0]->status) && $get_id[0]->status == "success"){
		$get_lead = $get_id[0]->response;
	};
 

exit;
?>

