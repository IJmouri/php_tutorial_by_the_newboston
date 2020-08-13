<?php

if(mysqli_connect('localhost', 'root', '', 'a_database1')){
    
}

if(isset($_GET['search_text'])){
    echo $_GET['search_text'];
}

?>