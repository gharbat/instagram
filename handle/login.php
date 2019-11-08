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





}