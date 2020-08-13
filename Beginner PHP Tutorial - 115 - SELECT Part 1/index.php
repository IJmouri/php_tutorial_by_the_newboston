<?php
include 'connect.inc.php';
$query = "SELECT `food`,`calories` FROM `food` ORDER BY `id`";
if($qry_run = mysqli_query($connection, $query)){
    echo 'success';
}else{
    echo 'Failed';
}
?>