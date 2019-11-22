<?php
include_once ("../include/config.php");

$id =$_GET['id']; // 3

$query = "UPDATE  posts SET likes= 1 + likes  WHERE ID = '$id'";//3
$execute = $mysql->query($query);

echo 200;