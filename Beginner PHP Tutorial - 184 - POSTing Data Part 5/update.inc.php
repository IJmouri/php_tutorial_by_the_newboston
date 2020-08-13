<?php
    $link = mysqli_connect('localhost', 'root', '', 'a_database1');
    if(isset($_POST['text'])) {
        $text = $_POST['text'];
        if(!empty($text)){
            $query = "INSERT INTO `data` VALUES ('', '".mysqli_real_escape_string($link,$text)."')";
            if ($query_run = mysqli_query($link, $query)){
                echo 'Data inserted';
            }else{
                echo 'Failed';
            }
        } else {
            echo 'please write something';
        }
    }
?>