<?php
session_start();

$name= $_SESSION['name'] ;
$email= $_SESSION['email'] ;
$password= $_SESSION['password'] ;


// $image = $_FILE[_'image'];





?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Successful</title>
</head>
<body>
  <p>
    Welcome Back <?php echo $name ?>
  </p>
  <p>
    Your email is: <?php echo $email?> and your password is <?php echo $password?>
    
    
</body>
</html>