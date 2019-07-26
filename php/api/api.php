<?php
$code = $_GET['code'];
$id = $_GET['id'];
$command = $_GET['command'];
$update = $_GET['update'];

if ($code == "3xc^24%")
  $table = "users";

if ($code == "%d35av3$")
  $table = "bime_name";

if ($code == "s3v&*4a")
  $table = "aghsat";

else
  $table = null;

if($command == "show" && $table !== null){

  header('Content-Type: text/html; charset=utf-8');

  include_once ("../lib/database.php");

  $obj = new database();
  $connection = $obj->connect();
  $sql = "SELECT * FROM `users`;";

  $res = $obj->query($sql,$connection);

  echo json_encode($res);
}

if($command == "delete" && $table !== null){
  $obj = new database();
  $connection = $obj->connect();
  $sql = "DELETE FROM `$table` WHERE `user_id` = $id";

  $res = $obj->sql($sql,$connection);

  if ($res = true)
    echo "done";
}

if ($command == "update" && $table !== null) {
  $obj = new database();
  $connection = $obj->connect();
  $sql = "UPDATE `users` SET $update WHERE 1";

  $res = $obj->sql($sql, $connection);

  if ($res = true)
    echo "done";
}

else
  echo "command not found";
?>
