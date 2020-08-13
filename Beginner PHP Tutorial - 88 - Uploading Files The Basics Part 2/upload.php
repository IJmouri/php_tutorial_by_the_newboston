<?php

$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];

if (isset($name)){
    if(!empty($name)){
        if(move_uploaded_file($tmp_name,'uploads/'.$name)){
            echo 'File has been uploaded';
        }
    }
    else{
        echo 'please choose a file';
    }
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit" value="submit">
</form>