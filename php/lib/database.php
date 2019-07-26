<?php

class database
{


  public function connect()
  {
    try {
      $host = "localhost";
      $dbname = "bimeyar";
      $username = "root";
      $password = "";

      $connection = new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password");
      $connection->exec('set names utf8');

      return $connection;
    } catch
    (PDOException $e) {
      echo $e . getMessage();
      return ($e . errorInfo());
    }
  }

  public function sql($sql, $connection)
  {
    try {
      $stmt = $connection->query($sql);

      if ($stmt == true)
        return true;

      else
        return false;

    } catch
    (PDOException $e) {
      echo $e . getMessage();
      print_r($e . errorInfo());
    }
  }

  public function query($sql, $connection)
  {
    try {
      $result = $connection->query($sql);
      $data = $result->fetchAll(PDO::FETCH_ASSOC);
      return $data;
    } catch (PDOException $e) {
      echo $e . getMessage();
      print_r($e . errorInfo());
    }
  }
}

