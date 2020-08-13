

<?php

if(isset($_POST['pass']) && !empty($_POST['pass'])){
    $pass = $_POST['pass'];
}else{
    echo 'enter a pass';
}
?>
<form accept="index.php" method="post">
    Password: <input type="password" name = "pass">
    <input type="submit" name="submit" value="submit">
</form>