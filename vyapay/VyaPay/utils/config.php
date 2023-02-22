<?php

 define("GW_API_KEY", 		'10852b2b2f57480696e5a4e918b26cc1');
 define("GW_MID_KEY",		'90655454');
 define("GW_APP_ID",		'APP-T6554252567241061980');
 define("GW_PATH", 		'https://test-api.vyapay.com/v2/');

//define("GW_API_KEY", 		'Cv3Nu5N5KBjr7gWTP8AxUZFmWvqlSvnV');
//define("GW_MID_KEY",		'VYA_08630857');
//define("GW_APP_ID",			'APP-P6554264892431061980');
//define("GW_PATH", 			'https://api.vyapay.com/v2/');

define("GW_CONTENT_TYPE",	'application/json');
define("GW_TEST_MODE",		false);


define("gw_card_sale", 			    'card/sale');
define("gw_card_sale_pos", 		    'card/sale_POS');
define("gw_card_sale_recurring", 	'card/sale_recurring');
define("gw_card_get_token", 		'card/get_token');
define("gw_card_authorize", 		'card/authorize');
define("gw_card_capture", 		    'card/capture');
define("gw_card_void", 			    'card/void');
define("gw_card_refund", 		    'card/refund');
define("gw_card_recurring", 		'card/recurring');
define("gw_customer", 			    'customer');
define("gw_card_chargebacks",		'card/chargebacks');
define("gw_verify_card", 		    'card/verify');
define("gw_card_get_qrcode",	    'card/get_qrcode');
define("gw_card_get_vcn",		    'card/get_vcn');
define("gw_card_bin_chk",		    'card/BIN_chk');