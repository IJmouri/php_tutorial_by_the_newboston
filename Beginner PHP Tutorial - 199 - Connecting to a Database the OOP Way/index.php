<?php

class DatabaseConnect {
    public function __construct($db_host, $db_user, $db_pass)
    {
        if(!$this->Connect($db_host, $db_user, $db_pass)){
            echo 'Not connected';
        }else{
            echo 'connected';
        }
    }

    public function Connect( $db_host, $db_user, $db_pass ){
        if(mysqli_connect()){

        }
    }
}

$connection = new DatabaseConnect('localhost', 'root', '');

?>