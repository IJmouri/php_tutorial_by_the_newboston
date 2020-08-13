<?php

function hit_count() {
    $filename = 'count.txt';
    $handle = fopen('count.txt', 'r');
    $current = fread($handle, filesize($filename) );
    fclose($handle);
    $current_inc = $current + 1;

    $handle = fopen('count.txt', 'w');
    fwrite($handle, $current_inc);
    fclose($handle);
}
?>