<?php
$string = 'This is a string';
function has_space($str){
    if(preg_match('/ /',$str)){
        return true;    
    }else{
        return false;
    }
    
}
if(has_space($string)){
    echo 'Has at least one space';
}
else{
    echo 'Has no space';
}
?>