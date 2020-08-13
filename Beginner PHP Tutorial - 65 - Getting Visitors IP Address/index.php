<?php
    require 'conf.inc.php';
    foreach($ip_blocked as $ip){
      if($ip == $ip_address)
      {
        die();
      }
    }
?>
<h1>My Page</h1>