<?php
include_once ("config.php");

function getUserName($id){
    $mysql = new mysqli('localhost','root','','newinstagram');


    $query = "SELECT username FROM users WHERE id = '$id'";
    $execute = $mysql->query($query);
    $results = $execute->fetch_assoc();

    return $results['username'];
}
