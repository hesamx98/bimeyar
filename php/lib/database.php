<?php
class database
{


  public function connect(){
    try
    {
      $host = "localhost";
      $dbname = "bimeyar";
      $username = "root";
      $password = "";

      $connection = new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password");
      $connection->exec('set names utf8');

      return $connection;
    }

    catch
    (PDOException $e){
      echo $e . getMessage();
      return($e . errorInfo());
    }
  }

  public function insert($sql,$connection){
    try {
      $stmt = $connection->query($sql);

      if($stmt == true)
        return true;

      else
        return false;

    } catch
    (PDOException $e) {
      echo $e . getMessage();
      print_r($e . errorInfo());
    }
  }
}

