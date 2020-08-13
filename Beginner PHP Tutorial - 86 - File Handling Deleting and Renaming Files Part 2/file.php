<?php
$filename = 'filetorename.txt';
$rand = rand(1000,9999);

if(rename($filename,$rand.'.txt')){
    echo 'File has been renamed';
}else{
    echo 'Error renaming';
}
?>