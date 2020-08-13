<?php

if(isset($_POST['pass']) ){

    if(!empty($_POST['pass'])){
        if( $_POST['pass'] == '1234'){
            echo 'That is correct';
        }    
        else{
            echo 'That is incorrect';
        }
    }
}

?>

<form action="index.php" method = "POST">
    Password:<br><input type="password" name="pass"><br>
   <!-- Date:<br><input type="text" name="date"><br>
    Year:<br><input type="text" name="year"><br>
    -->
    <input type="submit" name="submit"> 
</form>