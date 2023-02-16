<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
//declare 3 numbers
$num1 = 10;
$num2 = 20;
$num3 = 30;

//compare the numbers using if-else
if (($num1 >= $num2) && ($num1 >= $num3))
  {
   echo $num1." is the largest number.";
  }
elseif (($num2 >= $num1) && ($num2 >= $num3))
  {
   echo $num2." is the largest number.";
  }
else
  {
   echo $num3." is the largest number.";
  }
?>
</body>
</html>