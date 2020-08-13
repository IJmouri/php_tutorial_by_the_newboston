<?php
include 'connect.inc.php';
$query = "SELECT `food`,`calories` FROM `food` WHERE `healthy_unhealthy` = 'u' AND `calories`= '100' ORDER BY `id`";
if($qry_run = mysqli_query($connection, $query)){
    if(mysqli_num_rows($qry_run) == NULL){
        echo 'No result found';
    }else{
        while ($query_row = mysqli_fetch_assoc($qry_run)){
            $food = $query_row['food'];
            $calories = $query_row['calories'];
            echo $food.' '.$calories."\n";
        }
    
    }
}else{
    echo mysqli_error($connection);
}
?>