<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculations</title>
</head>
<body>

<?php

$num1 = 10;
$num2 = 20;
$num3 = 30;

$sum = $num1 + $num2 + $num3;
echo "<h3>1) Addition of Three Numbers</h3>";
echo "Sum = $sum<br><br>";

$sub = $num3 - $num2 -$num1;
echo"<h3>2)Subtraction of three numbers</h3>";
echo "Sub = $sub<br><br>";

$mul = $num3 * $num2 * $num1;
echo"<h3>3)Multiplication of three numbers</h3>";
echo "mul = $mul<br><br>";

$divide = $num3 / $num1;
echo"<h3>4)Dividation of three numbers</h3>";
echo "divide = $divide<br><br>";

?>