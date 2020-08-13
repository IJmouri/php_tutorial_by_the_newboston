<?php
header('COntent-type: image/jpeg');

if(isset($_GET['image'])) {
    $image = $_GET['image'];

    $image_size = getimagesize($image);
    $image_width = $image_size[0];
    $image_height = $image_size[1];

}
?>