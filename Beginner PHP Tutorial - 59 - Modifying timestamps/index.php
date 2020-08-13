
<?php

$time = time();

$actual_time = date('D M Y H:i:s',$time);
echo $modified_time = date('D M Y H:i:s',$time-(230*30));

echo 'the current time is '.$actual_time;

?>