<?php
include_once ("../include/config.php");

if($_SERVER['REQUEST_METHOD']==="POST"){
    if(!empty($_POST['email']) && isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        header("location: login.php");

    }

    if(!empty($_POST['password']) && isset($_POST['password'])){
        $password = $_POST['password'];
    }else{
        header("location: login.php");
    }


    $query = "SELECT id FROM users WHERE email = ? AND password = ?";
    $stet = $mysql->prepare($query);
    $stet->bind_param("ss",$p1,$p2);
    $p1 = $email;
    $p2 = md5($password);
    $stet->execute();



}