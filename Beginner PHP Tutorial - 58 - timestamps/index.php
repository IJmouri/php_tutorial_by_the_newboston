<?php

    $time = time();
    $actual_time = date('H:i:s',$time);
    $actual_time = date('D M Y H:i:s',$time);
    echo 'the current time is '.$actual_time;

?>