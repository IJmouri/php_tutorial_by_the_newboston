<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
function hit_count() {
    $ip_file = file('ip.txt');
    foreach($ip_file as $ip){
        global $ip_address;
        $ip_single =  trim($ip);
        if($ip_single == $ip_address) {
            $found = true;
        break;
        }else{
            $found = false;
        }
        
    }
    if($found == true){
        echo 'ip found';
    }
}
?>