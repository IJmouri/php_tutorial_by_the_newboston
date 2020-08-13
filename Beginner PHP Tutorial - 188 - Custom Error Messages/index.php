<?php

$link = mysqli_connect('localhost', 'root', '');

class ServerException extends Exception {
    public function showSpecific () {
        return 'Error on line '.$this->getLine().' in '.$this->getFile();
    }
}
class DatabaseException extends Exception {
    public function showSpecific () {
        return 'Error on line '.$this->getLine().' in '.$this->getFile();
    }
}

try {
    if(!$link) {
        throw new ServerException();
    } else if( !mysqli_select_db($link, 'a_database1')){
        throw new DatabaseException();
    } else {
        echo 'connected';
    }
} catch (ServerException $ex) {
    echo $ex->showSpecific();
} catch ( DatabaseException $ex) {
    echo $ex->showSpecific();
 
}
?>