<?php
include 'connect.inc.php';
$user_ip = $_SERVER['REMOTE_ADDR'];
function ip_exists($ip){
    global $connection;
    $query = mysqli_query($connection, "SELECT `ip` FROM `hit_ip` WHERE `ip`='$ip'");
    
}

function ip_add($ip){
    global $connection;
    $query = mysqli_query($connection,"INSERT INTO `hit_ip` VALUES('$ip')");

}

function update_count(){
    global $connection;
    $query ="SELECT `count` FROM `hit_count`";
    if($query_run = mysqli_query($connection, $query)){
        $count = mysqli_fetch_assoc ($query_run);
        $count['count'];
        $count_inc = $count['count'] + 1;

        $query_update = mysqli_query($connection, "UPDATE `hit_count` SET `count` = '$count_inc'");

    }
}

ip_add($user_ip);
ip_exists($user_ip);
update_count();
?>
