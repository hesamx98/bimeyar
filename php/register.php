<?php
include_once ("lib/database.php");

$name = $_POST['name'];
$telephone = $_POST['telephone'];
$ins = $_POST['ins'];
$representation_code = $_POST['representation_code'];

$obj = new database();
$connection = $obj->connect();
$sql = "INSERT INTO `users` VALUES (DEFAULT ,'$name','$telephone','$ins','$representation_code');";

$res = $obj->insert($sql,$connection);

header("Location: ../status.php?res=$res");
