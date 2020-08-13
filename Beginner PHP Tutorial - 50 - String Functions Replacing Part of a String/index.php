<?php
$str = 'This is a string. this part will be replaced';
$new_str = substr_replace($str, 'already replaced',17 ,27);

echo $new_str;
?>