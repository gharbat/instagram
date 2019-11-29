<?php
include_once ('../include/config.php');

$user_id = $_GET['id']; // i want to follow  11
$my_id = $_SESSION['user']; // me


$check_query = "SELECT * FROM followers WHERE user_id = '$my_id' AND follow = '$user_id'";


$insert_query = "INSERT INTO followers (user_id,follow) VALUES ('$my_id','$user_id')";
$delete_query = "DELETE FROM followers WHERE user_id ='$my_id' AND follow ='$user_id'";


$check_execute = $mysql->query($check_query);

if ($check_execute->num_rows){
    $execute_delete = $mysql->query($delete_query);
    echo "delete";
}else{
    $execute_insert = $mysql->query($insert_query);
    echo "insert";
}