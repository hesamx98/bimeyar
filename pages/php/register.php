<?php
try {
include "db.php";

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO `inverter`(`Data`) VALUES (:Data)";
$stmt = $conn->prepare($sql);


$Data = $_POST['D'];
$Data = $_GET['D'];
$stmt->bindParam(':Data',$Data);

$stmt->execute();

echo "Done";

$conn = null; 
}
catch(PDOException $e) {echo "Error: " . $e->getMessage();}
?>


