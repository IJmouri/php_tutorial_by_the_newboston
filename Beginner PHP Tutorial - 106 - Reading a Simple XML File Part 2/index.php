<?php
$xml = simplexml_load_file('example.xml');
//echo $xml->producer[2]->name.' '.$xml->producer[2]->age;
foreach( $xml->producer as $producer){
    echo $producer->name.' is '.$producer->age."\n";
    foreach ( $producer->show as $show){
        echo $show->showname.' '.$show->showdate."\n";
    }
}
?>