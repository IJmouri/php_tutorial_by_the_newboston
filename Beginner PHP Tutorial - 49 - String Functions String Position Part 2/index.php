<?php
$str = 'this is a string';
$find = 'is';
$offset = 0;
//echo $string_position = strpos($str, $find, $offset);
while($string_position = strpos($str, $find, $offset)){
    echo $offset;
    echo $find.' found at'.$string_position.'<br>';
    $offset= $string_position+2;
}
?>