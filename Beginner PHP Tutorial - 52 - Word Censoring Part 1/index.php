<?php

if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
    echo $user_input = $_POST['user_input'];
}

?>
<form action="index.php" method="post">
    <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea>
    <input type="submit" value="Submit">
</form>