<?php

require 'connect.inc.php';
if(isset($_POST['search_name']) && !empty($_POST['search_name'])){
    global $connection;
    $query = mysqli_query($connection, "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysqli_real_escape_string( $connection, $_POST['search_name'])."%'");
    if(mysqli_num_rows($query) >= 1){
        echo 'found';
    }else{
        echo 'not found';
    }
}
?>

<form action="index.php" method="POST">
    Name: <input type="text" name="search_name" >
    <input type="submit" name="submit" value="search">
</form>