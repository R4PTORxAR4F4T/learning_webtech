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

$length = 10;
$width = 20;

//Calculating area
$area = $length * $width;

//Calculating perimeter
$perimeter = 2 * ($length + $width);

echo "The area of the Rectangle is: " . $area . " units <br>";
echo "The perimeter of the Rectangle is: " . $perimeter . " units";

?>
</body>
</html>