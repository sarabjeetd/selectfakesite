<?php
session_start();
include 'db.php';
 include 'inc/header-thankupage.php'; ?>

<div style="height: 100%;padding:90px 0px;">
<div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error" style="display: none;"></div><div class="swal2-icon swal2-question" style="display: none;"></div><div class="swal2-icon swal2-warning" style="display: none;"></div><div class="swal2-icon swal2-info" style="display: none;"></div><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
      <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
      <div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
      <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
    </div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: flex;">An agent will be contacting you shortly</h2><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button></div><div class="swal2-content"><div id="swal2-content" class="swal2-html-container" style="display: none;"></div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div><div class="swal2-actions"><div class="swal2-loader"></div><a href="/" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block;color:#fff;">Home Page</a><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none;">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none;">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div>

</div>
<br/><br/><br/><br/>

<?php

$pixel_url = '';
$ref = isset($_GET['ref'])?$_GET['ref']:'';
$sid = isset($_GET['sid'])?$_GET['sid']:'';
$uid = isset($_GET['uid'])?$_GET['uid']:'';
$es = isset($_GET['es'])?$_GET['es']:'';
if ($es == 3 || $es == 4) {
    //set up pixel for 8598
    if ($ref=='8598') {
        $pixel_url = "https://cvrdomain.com/l/con?oid=80001&clickid=".$sid;
    } elseif ($ref=='8599') { //set up pixel for 8599
        $pixel_url = "https://cvrdomain.com/l/con?oid=79972&clickid=".$sid;
    }

    if (!empty($pixel_url)) {?>
    <iframe src="<?php echo  $pixel_url?>" scrolling="no" frameborder="0" width="1" height="1"></iframe>
<?php }
    }
?>



<?php
// $data = [
// 		'ip'=>get_client_ip(), 
// 		'referrer_site'=>$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], 
// 		'server_dump'=>json_encode($_SERVER), 
// 		'request_dump'=>'', 
// 		'token'=>$_SESSION['token'], 
// 		'current'=>$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], 
// 		'previous'=>(isset($_SESSION['previous'])?$_SESSION['previous']:''),
// 		'browser'=>getBrowserInfo()['browser'],
// 		'version'=>getBrowserInfo()['browser_version'], 
// 		'is_desktop'=>((getBrowserInfo()['device']=="Desktop")?'1':'0'), 
// 		'is_phone'=>((getBrowserInfo()['device']=="Desktop")?'0':'1'), 
// 		'device'=>getBrowserInfo()['device'], 
// 		'platform'=>getBrowserInfo()['os_platform'], 
// 		'landing_page'=>'', 
// 		'created_at'=>date("Y-m-d h:i:s"), 
// 		'updated_at'=>date("Y-m-d h:i:s")
// ];
// insert_data($data);
$_SESSION['previous'] = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>	

<?php include 'inc/footer.php'; ?>

