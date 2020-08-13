<?php

$find = array('alex', 'billy', 'dale');
$replace = array('a**x', 'b***y', 'd**e');

if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
    echo $user_input = $_POST['user_input'];
    
    echo $user_input_new = str_replace($find, $replace, $user_input);

}

?>
<form action="index.php" method="post">
    <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea>
    <input type="submit" value="Submit">
</form>