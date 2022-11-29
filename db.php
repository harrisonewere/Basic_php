<?php

$host = "127.0.0.1";
$user = "root";
$password = "";

$conn = new  mysqli($host, $user, $password, 'shop');

if($conn->connect_error){
  die('Connection Failed:' . $conn->connect_error);
}

echo 'connection successful ';

$hashedPassword = password_hash('secret', PASSWORD_DEFAULT);

// $sql = "INSERT INTO users  (name, email, password) VALUES ('Harry', 'harry@gmail.com', '$hashedPassword')"; 

$sql = "INSERT INTO users  (name, email, password) VALUES ('Happy', 'happy@gmail.com', '$hashedPassword') , ('Hay', 'hay@gmail.com', '$hashedPassword')"; 


// $sql= "CREATE DATABASE shop1";

if ($conn->query($sql) == true) {

  echo 'user created successful';
  
} else {
  echo 'Failed to create user' . $conn->error;
}





?>