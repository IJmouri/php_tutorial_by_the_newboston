<?php

$handle = fopen('name.txt', 'a');
fwrite($handle, 'ss'. "\n");
fclose($handle);
$handle = fopen('name.txt', 'r');

$readin = fread($handle, filesize(('name.txt')));

$names = explode( ',',$readin );
print_r($names);
?>