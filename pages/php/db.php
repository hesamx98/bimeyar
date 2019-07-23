<?php
$host = "localhost";
$dbname = "energypa_inverter";
$username = "energypa_inverte";
$password = "~qU(SXf$1iH!";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$conn->exec("set names utf8");
?>