<?php

include 'connect.inc.php';
include 'core.inc.php';

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    echo 'you are logged in';
}else{
    echo 'you are not logged in';
}

include 'loginform.inc.php';
//echo $current_file;
?>
