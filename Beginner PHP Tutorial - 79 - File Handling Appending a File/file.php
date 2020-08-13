<?php
    if ( isset($_POST['name']) ) {
        $name = $_POST['name'] ;

        if ( !empty( $name) ) {
            $handle = fopen('name.txt', 'a');
            fwrite($handle, $name."\n");
            fclose($handle);
           $handle = fopen('name.txt', 'r');

           echo $readin = fread($handle, filesize(('name.txt')));
        
        }else{
            echo 'Please type a name.';
        }
    }

?>
<form action="file.php" method="POST">
    <input type="text" name='name'>
    <input type="submit" name="submit" value="submit">
</form>
