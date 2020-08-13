<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
function echo_ip(){
    global $user_ip;
    echo $user_ip;
}
echo_ip();
?>