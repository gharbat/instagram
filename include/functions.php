<?php
include_once ("config.php");

function getUserName($id){ // 5
    $mysql = new mysqli('localhost','root','','newinstagram');


    $query = "SELECT username FROM users WHERE id = '$id'";
    $execute = $mysql->query($query);
    $results = $execute->fetch_assoc();

    return $results['username'];
}


function getUserPosts($id){
    $mysql = new mysqli('localhost','root','','newinstagram');

    $query ="SELECT * FROM posts WHERE user_id = '$id'";
    $execute = $mysql->query($query);

    return $execute->fetch_all();
}


function getNumPosts($id){
    $mysql = new mysqli('localhost','root','','newinstagram');
    $query = "SELECT * FROM posts WHERE user_id = '$id'";
    $execute= $mysql->query($query);

    return $execute->num_rows;
}

function getUserFollowers($id){
    $mysql = new mysqli('localhost','root','','newinstagram');
    $query = "SELECT * FROM followers WHERE follow = '$id'";
    $execute = $mysql->query($query);

    return $execute->num_rows;
}

function getUserFollowing($id){
    $mysql = new mysqli('localhost','root','','newinstagram');
    $query = "SELECT * FROM followers WHERE user_id = '$id'";
    $execute = $mysql->query($query);

    return $execute->num_rows;
}