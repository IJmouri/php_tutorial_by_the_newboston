<?php
if (unlink('filetodelete.txt')){
    echo 'File has been deleted';
}else{
    echo 'File cannot be deleted';
}
?>