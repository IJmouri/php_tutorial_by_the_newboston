<?php
    $browser = get_browser(null, true);
//    echo $browser['browser'];
 // print_r($browser);
    if( $browser != 'Firefox') {
        echo 'You\'re not using Firefox. Please do.';
    }
?>