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

    $password =md5($password);//1223 --> 165467tgt5gferfy6

    $query = "SELECT id FROM users WHERE email ='$email'  AND password ='$password' "; //11
    $execute= $mysql->query($query);

    if ($execute->num_rows === 1 ) {
        $_SESSION['user'] = $execute->fetch_assoc()["id"];//11
        header("location: http://localhost/instagram");
    }
    else{
        header("location: http://localhost/instagram/login.php");
    }


//    $query = "SELECT id FROM users WHERE email = ? AND password = ?";
//    $stet = $mysql->prepare($query);
//    $stet->bind_param("ss",$p1,$p2);
//    $p1 = $email;
//    $p2 = md5($password);



//    print_r($stet);



}