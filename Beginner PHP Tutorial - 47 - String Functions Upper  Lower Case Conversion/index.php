<?php
// $string = 'I could be any case';
// $string_lower = strtolower($string);
// echo '<br>'.$string_lower;
// echo '<br>'.$string_upper = strtoupper($string);
if(isset($_GET['user_name']) && !empty($_GET['user_name'])){
    echo $user_name = $_GET['user_name'];
    if(strtolower($user_name) == 'alex') {
        echo 'You are the best';
    }
}
?>
<form action='index.php' method='GET'>
    Name: <input type="text" name="user_name">
    <input type="submit" name="btn" value="Submit">
</form>
