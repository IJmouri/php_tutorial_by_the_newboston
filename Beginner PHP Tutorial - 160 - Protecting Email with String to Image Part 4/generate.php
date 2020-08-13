<?php
header('Content-type: image/jpeg');

$connection = mysqli_connect('localhost', 'root', '');
$my_sql_db = "a_database1";
mysqli_select_db($connection, "a_database1");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($connection,"SELECT `email` FROM `user` WHERE `id`='$id'");
    if (mysqli_num_rows($query) >= 1) {
        $query_res = mysqli_fetch_assoc($query);
        
        $email = $query_res['email'];
    } else {
        $email = 'id not found';
    }
} else {
    $email = 'No email specified';
}


$email_len = strlen($email);

$font_size = 4;

$image_height = imagefontheight($font_size);
$image_width = imagefontwidth($font_size) * $email_len;

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255, 255, 255);
$font_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, $font_size, 0, 0, $email, $font_color);

imagejpeg($image);
