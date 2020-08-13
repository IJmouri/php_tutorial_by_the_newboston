<?php
$string = 'asdgfjhlrkjelru0123456789';
$string_shuffle = str_shuffle($string);
$half = substr($string_shuffle,0,5);
$reverse = strrev($string);
echo $reverse;
?>