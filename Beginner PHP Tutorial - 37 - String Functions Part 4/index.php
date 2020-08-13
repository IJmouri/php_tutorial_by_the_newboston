<?php
$string = 'This is my <img src="img.jpg"> essay.';

$string_trimmed = trim($string);
$string_slashes = htmlentities(addslashes($string));

echo $string_slashes;

?>