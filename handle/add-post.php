<?php
include_once "../include/config.php"; //
if ($_SERVER['REQUEST_METHOD'] ===  "POST"){

    $desc = $_POST['desc'];

    if (isset($_FILES['image'])){
        $image = $_FILES['image'];
    }else{
        header("location: http://localhost/instagram/add-post.php");
    }


    $image_name = $image['name'];
    $image_size = $image['size'];
    @$image_ext  = end(explode(".",$image_name));

    // TODO check for size  <  2MB
    // TODO check for type  ===  [png,gif,jpg]
    // TODO check for mime === image mime


    move_uploaded_file($image['tmp_name'], "uploads/".$image_name);

    $link= "uploads/".$image_name;
    $user_id = $_SESSION['user'];

    $query = "INSERT INTO posts (text,image,type,user_id) VALUES ('$desc','$link',1,'$user_id')";
    $execute = $mysql->query($query);

    header("location: http://localhost/instagram/");
}