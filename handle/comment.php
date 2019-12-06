<?php
include_once ("../include/config.php");
include_once ("../include/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $comment = $_POST['comment'];
    $user_id = $_SESSION['user'];
    $post_id = $_GET['post-id'];
    if (!empty($comment)){

        $query = "INSERT INTO comments (text,user_id,post_id) VALUES ('$comment','$user_id','$post_id')";
        $execute = $mysql->query($query);
        header("location: http://localhost/instagram/");
    }
    else echo "data missing";
}