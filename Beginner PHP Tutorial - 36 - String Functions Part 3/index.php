<?php
$string = 'This is my essay. I\'m going to be talking about php.';
$string_2 = 'This is my essay. I will be talking about the subject php.';

similar_text($string, $string_2, $result);

echo 'The similarity between is '.$result;

echo '<br>';
echo $string_length = strlen($string);
?>