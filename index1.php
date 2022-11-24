<?php
function familyName(string $fname, string $lname= "Nkemachor") {

  echo "$fname  $lname";
}
function sum(int $num1, int $num2 ) {
  return $num1 + $num2;
}


$genderString ="I am a";
function female($str){
  $str .="female";
}
function male(&$str){
  $str .="male";
}


female($genderString);
male($genderString);
echo $genderString ."<br>";

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>Family</h1>
<ul>
    <li> <?php familyName("Nkemachor")?></li>
    <li> <?php familyName("Ebube")?></li>
    <li> <?php familyName("Peter")?></li>
    <li> <?php familyName("Onyinye")?></li>
    <li> <?php familyName("Chinyerem")?></li>
    <li> <?php familyName("Ogechi")?></li>
    <li> <?php familyName("Azuka")?></li>

</ul>

  
</body>
</html>