<?php
$string = 'This is a string';
if(preg_match('/as/',$string)){
    echo 'Match Found';
}else{
    echo 'Match Not Found';
}
?>