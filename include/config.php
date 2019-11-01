<?php
// username => root
// DB name => instagram
// server address => 127.0.0.1 or localhost
// password => ""


$mysql = new mysqli('localhost','root','','instagram');


$sql_command = "SELECT username FROM users ";
$result = $mysql->query($sql_command);
$result->fetch_assoc()
//
//
//
//$names =$result->fetch_all();
//
//print_r($names);
//foreach ($names as $name){
//    print_r($name[0]) ;
//}
//
















//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_NAME', 'shop');
//
//
//
//
//
//
//
//$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//// Check connection
//if($mysqli === false) die("ERROR: Could not connect. " . $mysqli->connect_error);
//
////
////$query = $mysqli->query("SELECT * FROM users");
////
//
//
//
////echo "<pre>";
////    print_r($query->fetch_assoc());
////echo "</pre>";
//
//
//
//
////$sql = "INSERT INTO users (name,mobile,balance) VALUES (?,?,?)";
////$stetment =$mysqli->prepare($sql);
////$stetment->bind_param('sss',$p1,$p2,$p3);
////$p1 = "hello";
////$p2 = "ggrr";
////$p3 = "11";
////
////$stetment->execute();
//
//
//$query = $mysqli->query("SELECT * FROM users");
//
//
//
//echo "<pre>";
//    print_r($query->fetch_all());
//echo "</pre>";
//?>
<!---->
