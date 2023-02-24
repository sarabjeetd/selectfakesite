<?php
session_start();
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $zr_track_id = $_POST['zr_track_id'];
	unset($_POST['zr_track_id']);
    $quote_year = $_POST["quote_year"];
    $quote_make = $_POST["quote_make"];
    $quote_mileage = $_POST["quote_mileage"];
    $quote_model = $_POST["quote_model"];
    $quote_phone = $_POST["quote_phone"];
    $home_phone = $_POST["home_phone"];
    $quote_first_name = $_POST["quote_first_name"];
    $quote_last_name = $_POST["quote_last_name"];
    $quote_email = $_POST["quote_email"];
    $quote_zipcode = $_POST["quote_zipcode"];
	$ref = $_POST["ref"]; 
    $sid = $_POST["sid"];
    $ip = $_POST["ip"];
    $uid = $_POST["uid"];
    $gclid = $_POST["gclid"];
    $post_back_url = '';
    $data = [
        'ip'=>get_client_ip(), 
        'referrer_site'=>$_POST['cur_url'], 
        'server_dump'=>json_encode($_SERVER), 
        'request_dump'=>'completed', 
        'request_data'=>json_encode($_POST), 
        'token'=>$_SESSION['token'], 
        'current'=>$_POST['cur_url'], 
		'sys_id'=>$_POST['sys_id'], 
        'previous'=>'',
        'browser'=>getBrowserInfo()['browser'],
        'version'=>getBrowserInfo()['browser_version'], 
        'is_desktop'=>((getBrowserInfo()['device']=="Desktop")?'1':'0'), 
        'is_phone'=>((getBrowserInfo()['device']=="Desktop")?'0':'1'), 
        'device'=>getBrowserInfo()['device'], 
        'platform'=>getBrowserInfo()['os_platform'], 
        'landing_page'=>'', 
        'created_at'=>date("Y-m-d h:i:s"), 
        'updated_at'=>date("Y-m-d h:i:s"),
        'ref_id'=> isset($_POST["ref"])?$_POST["ref"]:'',
    ];
    $data1 = [
        'ip' => $ip, 
        'first_name' => $quote_first_name,
        'last_name' => $quote_last_name,
        'email' => $quote_email,
        'home_phone' => $quote_phone,
        'cell_phone' => $home_phone,
        'address' => '',
        'city' => '', 
        'state' => '',
        'zipcode' => $quote_zipcode,
        'year' => $quote_year,
        'make' => $quote_make,
        'model' => $quote_model,
        'mileage'  => $quote_mileage,
        'referrer_site'  => isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '',
        'vsoft_status'  => '',
        'vsoft_type_of_plan'  => '0',
        'vsoft_amount_paid_today'  => '0',
        'vsoft_plan_total'  => '0',
        'affid' => isset($_POST["affid"])?$_POST["affid"]:'',
        'referrer' => isset($_POST["ref"])?$_POST["ref"]:'',
        'sid' => isset($_POST["sid"])?$_POST["sid"]:'',
        'uid' => isset($_POST["uid"])?$_POST["uid"]:'',
        'gclid' => isset($_POST["gclid"])?$_POST["gclid"]:'',
        'tier'=> isset($_POST['tier'])?$_POST['tier']:'',
        'utm_source'=> isset($_POST['utm_source'])?$_POST['utm_source']:'',
        'utm_medium'=> isset($_POST['utm_medium'])?$_POST['utm_medium']:'',
        'utm_campaign'=> isset($_POST['utm_campaign'])?$_POST['utm_campaign']:'',
        'utm_content'=> isset($_POST['utm_content'])?$_POST['utm_content']:'',
        'utm_term'=> isset($_POST['utm_term'])?$_POST['utm_term']:'',
        'leadcode' => '',
		'sys_id'=>$_POST['sys_id'], 
        'lead_source' => isset($_POST["ref"])?$_POST["ref"]:'',
        'device_request_id' => isset($_POST["request_id"])?$_POST["request_id"]:'',
        'device_id'=> isset($_POST["dev_rand_id"])?$_POST["dev_rand_id"]:'',
		'grecaptcha'=> isset($_POST["grecaptcha"])?$_POST["grecaptcha"]:'',
        'token'=>$_SESSION['token'],
    ];

    // EMAIL VALIDATION CHECK
    $key = 'qvBkqsDYubNz6hiZiEIvJwkTrojQbmro'; // IP SECURITY SCORE KEY
    $email = $quote_email;
    $timeout = 1;
    $fast = 'false';
    $abuse_strictness = 0;
    // Create parameters array.
    $parameters = array(
        'timeout' => $timeout,
        'fast' => $fast,
        'abuse_strictness' => $abuse_strictness
    );
        
    // Format our parameters.
    $formatted_parameters = http_build_query($parameters);
    $url = sprintf(
        'https://www.ipqualityscore.com/api/json/email/%s/%s?%s', 
        $key,
        urlencode($email),
        $formatted_parameters
    );
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);

    $json = curl_exec($curl);
    curl_close($curl);
    $data1['email_quality'] = $json;
    $data1['ip_quality'] = $_SESSION['ipqualityscore'];
    // Decode the result into an array.
    $emailQuality = json_decode($json, true);
    $data1['email_disposable'] = $emailQuality['disposable'];
    $data1['email_smtp_score'] = $emailQuality['smtp_score'];
    $data1['email_overall_score'] = $emailQuality['overall_score'];
    $data1['email_dns_valid'] = $emailQuality['dns_valid'];
    $data1['email_honeypot'] = $emailQuality['honeypot'];
    $data1['email_deliverability'] = $emailQuality['deliverability'];
    $data1['email_spam_trap_score'] = $emailQuality['spam_trap_score'];
    $data1['email_fraud_score'] = $emailQuality['fraud_score'];      
    $data1['valid_email'] = $emailQuality['overall_score'];



    $vanilasoft_post = array(
        'ip_address'=>get_client_ip(),
        'make' => $quote_make,
        'mileage' => $quote_mileage,
        'model' => $quote_model,
        'year' => $quote_year,
        'email' => $quote_email,
        'first_name' => $quote_first_name,
        'last_name' => $quote_last_name,
        'mobile' => $quote_phone,
        'home_phone' => $home_phone,
        'zip' => $quote_zipcode,
        'affid' => isset($_POST["affid"]) ? $_POST["affid"] : '',
        'ref'=>$ref,
        'sid'=>$sid,
        'uid'=>$uid,
        'gclid'=>$gclid,
        'keyword' => $_POST["keyword"],
        'utm_source' => $_POST["utm_source"],
        'utm_campaign' => $_POST["utm_campaign"],
        'gclid' => $_POST["gclid"],
        'lead_id' => isset($get_lead) ? $get_lead : '',
        'tier'=> isset($_POST['tier']) ? $_POST['tier'] : '',
        'utm_source'=> isset($_POST['utm_source']) ? $_POST['utm_source'] : '',
        'utm_medium'=> isset($_POST['utm_medium']) ? $_POST['utm_medium'] : '',
        'utm_campaign'=> isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : '',
        'utm_content'=> isset($_POST['utm_content']) ? $_POST['utm_content'] : '',
        'utm_term'=> isset($_POST['utm_term']) ? $_POST['utm_term'] : '',
    );

    insert_data($data);
    $get_id = save_leads($data1);
    if (isset($get_id[0]->status) && $get_id[0]->status == "success") {
        $get_lead = $get_id[0]->response;
    }
    $vanilasoft_post['lead_id']  = $get_lead;
     


    $update_status['posted_to_vs'] = 1;
    $update_status['lead_id'] = $get_lead;
    update_lead_status($update_status);


    $messages = '<!DOCTYPE html>
    <html>
    <head>
        <title>INSTANT FREE QUOTE FOR YOUR CAR</title>
        <style type="text/css">
            p{
                margin: 0;
            }
        </style>
    </head>
    <body>
        <table border="0" cellpadding="1" cellspacing="1" style="width:600px; margin: 0 auto;">
            <tbody>
                <tr>
                    <td>
                    <strong style="margin: 10px 0 0;"><u>Full Name: </u></strong> '.$quote_first_name.'
                    <br>
                    <br>
                    <strong style="margin: 10px 0 0;"><u>Last Name: </u></strong> '.$quote_last_name.'
                    <br>
                    <br>
                    <strong style="margin: 10px 0 0;"><u>Email: </u></strong> '.$quote_email.'
                    <br>
                    <br>
                    <strong style="margin: 10px 0 0;"><u>Phone: </u></strong> '.$quote_phone.'
                    <br>
                    <br>
                    <strong style="margin: 10px 0 0;"><u>Zip Code: </u></strong> '.$quote_zipcode.'
                    <br>
                    <br>
                    <strong style="margin: 10px 0 0;"><u>Year: </u></strong> '.$quote_year.'
                    <br>
                    <br>
                    <strong style="margin: 10px 0 0;"><u>Make: </u></strong> '.$quote_make.'
                    <br>
                    <br>
                    <strong style="margin: 10px 0 0;"><u>Model: </u></strong> '.$quote_model.'
                    <br>
                    <br>
                    <strong style="margin: 10px 0 0;"><u>Mileage: </u></strong> '.$quote_mileage.'
                    <br>
                    <br>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>';
        $receiver = "leads@selectautoprotect.com";
        $subject = "Quote Email From User";
        $email_headers = "From: SelectAutoProtect <quote@selectautoprotect.com>";
        $email_headers .= 'MIME-Version: 1.0' . "\r\n";
        $email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        if (@mail($receiver, $subject, $messages, $email_headers)) {
            
        } else {
            echo "Oops! Something went wrong and we couldn't send your Message.";
        }
        
    if ($zr_track_id != '') {
        $receiver = "info@selectautoprotect.com";
        $subject = "Lead from Script or postman";
        $email_headers = "From: SelectAutoProtect <quote@selectautoprotect.com>";
        $email_headers .= 'MIME-Version: 1.0' . "\r\n";
        $email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $email_body = '<!DOCTYPE html>
            <html>
            <head>
                <title>INSTANT FREE QUOTE FOR YOUR CAR</title>
                <style type="text/css">
                    p{
                        margin: 0;
                    }
                </style>
            </head>
            <body>
                <table border="0" cellpadding="1" cellspacing="1" style="width:600px; margin: 0 auto;">
                    <tbody>
                        <tr>
                            <td>
                            <strong style="margin: 10px 0 0;"><u>Full Name: </u></strong> '.$quote_first_name.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Last Name: </u></strong> '.$quote_last_name.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Email: </u></strong> '.$quote_email.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Phone: </u></strong> '.$quote_phone.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Zip Code: </u></strong> '.$quote_zipcode.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Year: </u></strong> '.$quote_year.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Make: </u></strong> '.$quote_make.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Model: </u></strong> '.$quote_model.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Mileage: </u></strong> '.$quote_mileage.'
                            <br>
                            <br>
                            <strong style="margin: 10px 0 0;"><u>Lead Id: </u></strong> '.$get_lead.'
                            <br>
                            <br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </body>
            </html>';
        if (@mail($receiver, $subject, $email_body, $email_headers)) {
        } else {
            echo "Oops! Something went wrong and we couldn't send your Message.";
        }
    }
} else {
    echo "There was a problem with your submission, please try again.";
}
    $_SESSION['es']  =  $data1['email_overall_score'];
    echo json_encode([
        'valid_email'  =>  $data1['email_overall_score'] ,
    ]);
    unsetMethod();
?>