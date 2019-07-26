<?php
include_once ("lib/database.php");

$price = $_POST['price'];
$issue_date = $_POST['issue_date'];
$percent = $_POST['percent'];
$telephone = $_POST['telephone'];
$time = $_POST['time'];
$name = $_POST['name'];
$status = false;

$obj = new database();
$connection = $obj->connect();
$sql = "INSERT INTO 'aghsat' VALUES (DEFAULT ,'$price','$issue_date ','$percent','$telephone','$time','$name','$status');";

$res = $obj->sql($sql,$connection);

header("Location: ../status.php?res=$res");

