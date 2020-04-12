<?php
  $host_name = 'db5000333451.hosting-data.io';
  $database = 'dbs324679';
  $user_name = 'dbu270017';
  $password = '/Rabou/*2';
  $dbh = null;

  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }
?>