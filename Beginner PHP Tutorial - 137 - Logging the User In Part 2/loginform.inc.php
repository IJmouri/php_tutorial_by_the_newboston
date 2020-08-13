<?php

if(isset($_POST['username']) && isset($_POST['pass'])){
    if(!empty($_POST['username']) && !empty($_POST['pass'])){
        
    }else{
        echo 'enter username and password';   
    }

}

?>
<form action="<?php echo $current_firle; ?>" method="POST">
    Username: <input type="text" name="username" >
    Password: <input type="password" name="pass" >
    <input type="submit" name="submit" value="submit">
</form>

