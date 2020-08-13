<?php
include 'connect.inc.php';
$query = "SELECT `food`,`calories` FROM `food` ORDER BY `id`";
if($qry_run = mysqli_query($connection, $query)){
    while ($query_row = mysqli_fetch_assoc($qry_run)){
        $food = $query_row['food'];
        $calories = $query_row['calories'];
        echo $food.' '.$calories."\n";
    }
}else{
    echo mysqli_error($connection);
}
?>