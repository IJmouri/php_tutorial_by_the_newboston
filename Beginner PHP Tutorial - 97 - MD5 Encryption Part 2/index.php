<?php

if(isset($_POST['pass']) && !empty($_POST['pass'])){
    $pass = md5($_POST['pass']);

    $filename = 'hash.txt';
    $handle = fopen($filename, 'r');
    $file_pass = fread($handle, filesize($filename));
    fclose($handle);

    if($pass == $file_pass){
        echo 'Password Ok';
    }else{
        echo 'Wrong password';
    }

}else{
    echo 'enter a pass';
}
?>
<form accept="index.php" method="post">
    Password: <input type="password" name = "pass">
    <input type="submit" name="submit" value="submit">
</form>