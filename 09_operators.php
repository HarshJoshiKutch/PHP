<?php
//Operators in php

/* 1. Arithmetic Operators
2. Assignment Operators
3. Comparision Operators
4. Logical Operators */

$a = 45;
$b = 8;

// 1. Arithmetic Operators
echo "For a + b, the result is " . ($a+$b) . "<br>";
echo "For a - b, the result is " . ($a-$b) . "<br>";
echo "For a * b, the result is " . ($a*$b) . "<br>";
echo "For a % b, the result is " . ($a%$b) . "<br>";
echo "For a / b, the result is " . ($a/$b) . "<br>";
echo "For a ** b, the result is " . ($a**$b) . "<br>";

// 2. Assignment Operators

$x = $a;
echo "For a, the value is " . $x . "<br>";

$a -= 6;
echo "For a, the value is " . $a . "<br>";

$a *= 6;
echo "For a, the value is " . $a . "<br>";

$a /= 6;
echo "For a, the value is " . $a . "<br>";

//3. Comparision Operators

$x = 7;
$y = 7;
echo "For x == y the result is ";
echo var_dump($x == $y);
echo "<br>";

// 4. Logical Operators

$m = TRUE;
// $n = FALSE;
$n = TRUE;


echo "for m and n, the result is ";
echo var_dump($m and $n); // ama and ne bij rite pan dekhadi sakay che && vade
echo "<br>";

echo "for m and n, the result is ";
echo var_dump($m or $n); // aama or ne || aam pan lakhi sakay che 
echo "<br>";

echo "for !m , the result is ";
echo var_dump(!$m);
echo "<br>"
?>