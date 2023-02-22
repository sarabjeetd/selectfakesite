<?php

$cfg = new stdClass();

$cfg->environment = 'production';// can be production or development 
$cfg->siteurl = 'http://localhost:81/';

if($cfg->environment == 'production'){
    ini_set('display_error','0');
}
else{
    ini_set('display_error','1');
}



?>