<?php
include_once ('../include/config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST"){
   if (isset($_POST['email']) && !empty($_POST['email'])){
       $email = $_POST['email'];
   }else{
       header("location: register.php");
   }

   if (isset($_POST['name']) && !empty($_POST['name'])){
       $name = $_POST['name'];
   }else{
       header("location: register.php");
   }

   if (isset($_POST['username']) && !empty([$_POST['username']])){
       $username = $_POST['username'];
   }else{
       header("location: register.php");
   }

   if (isset($_POST['password']) && !empty($_POST['password'])){
       $password = $_POST['password'];
   }else{
       header("location: register.php");
   }




    $query = "INSERT INTO users (name,username,email,password) VALUES(?,?,?,?)";
    $stetment =$mysql->prepare($query);
    $stetment->bind_param('ssss',$p1,$p2,$p3,$p4);
    $p1 = $name;
    $p2 = $username;
    $p3 = $email;
    $p4 = md5($password);
    $stetment->execute();


    header("location: http://localhost/instagram/login");


}

