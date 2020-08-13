<?php

$link = mysqli_connect('localhost', 'root', '');

class ServerException extends Exception {}
class DatabaseException extends Exception {}

try {
    if(!$link) {
        throw new ServerException('Could not connect to server');
    } else if( !mysqli_select_db($link, 'a_database1')){
        throw new DatabaseException('Could not connect db');
    } else {
        echo 'connected';
    }
} catch (ServerException $ex) {
    echo 'Error '.$ex->getMessage();
} catch ( DatabaseException $ex) {
    echo 'Error '.$ex->getMessage();

}
?>