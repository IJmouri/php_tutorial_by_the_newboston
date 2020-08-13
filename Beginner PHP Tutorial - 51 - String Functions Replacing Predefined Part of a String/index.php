<?php
$find = array('is','string', 'example');
$replace = array('IS', 'STRING', '');
$str = 'This is a string. this part will be replaced';
$new_str = str_replace($find, $replace, $str);

echo $new_str;
?>