<?php
include_once ("../include/config.php");
include_once ("../include/functions.php");
$post_id =$_GET['id']; // 3 // رقم البوست

$user_id = $_SESSION['user']; // 11 الشخص اللي عمل اللايك
$post_author = $_GET['author'];



$insert_query = "INSERT INTO likes (post_id, user_id) VALUES ('$post_id','$user_id')";//3
$delete_query = "DELETE FROM likes WHERE post_id ='$post_id'  AND user_id = '$user_id'";


$check_number = "SELECT * FROM likes WHERE post_id = '$post_id' AND user_id = '$user_id'";
$execute = $mysql->query($check_number);

if($execute->num_rows/* 1 */){
    $execute_delete = $mysql->query($delete_query);
    echo "delete";
} else /* 0 */{
    $execute_insert = $mysql->query($insert_query);


    /* Add Notification*/
    makeNotification($_SESSION['user'],$post_author,"new like ");
    echo "insert";
}



