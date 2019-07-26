<?php
include_once("lib/database.php");

$ins_nmber = $_POST['ins_nmber'];
$issue_date = $_POST['issue_date'];
$name = $_POST['name'];
$national_code = $_POST['national_code'];
$telephone = $_POST['telephone'];
$time = $_POST['time'];
$adviser_name = $_POST['adviser_name'];

$obj = new database();
$connection = $obj->connect();
$sql = "INSERT INTO 'bime_name' VALUES (DEFAULT ,'$ins_nmber','$issue_date','$percent','$telephone','$time','$name','$status');";

$res = $obj->insert($sql,$connection);

header("Location: ../status.php?res=$res");