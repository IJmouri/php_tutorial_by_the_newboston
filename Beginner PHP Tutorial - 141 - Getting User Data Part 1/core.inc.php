<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_refer = $_SERVER['HTTP_REFERER'];

function getfield($field){
    global $connection;
    if($query = mysqli_query($connection, "SELECT `$field` FROM `user` WHERE `id` = '".$_SESSION['user_id']."'")){
        return mysqli_fetch_assoc($query);
    }

}
?>
