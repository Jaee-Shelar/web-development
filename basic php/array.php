<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions</title>
</head>
<body>

<?php
echo "<h2>PHP Array Functions</h2>";

$fruits = array("Apple", "Banana", "Mango", "Orange", "Pineapple");

echo "<strong>Original Array:</strong><br>";
print_r($fruits);
echo "<br><br>";


echo "<strong> Total Elements:</strong> " . count($fruits) . "<br><br>";

array_push($fruits, "Grapes");
echo "<strong>After array_push('Grapes'):</strong><br>";
print_r($fruits);
echo "<br><br>";

array_pop($fruits);
echo "<strong> After array_pop():</strong><br>";
print_r($fruits);
echo "<br><br>";

array_shift($fruits);
echo "<strong> After array_shift():</strong><br>";
print_r($fruits);
echo "<br><br>";

 
sort($fruits);
echo "<strong>After sort():</strong><br>";
print_r($fruits);
echo "<br><br>";

rsort($fruits);
echo "<strong> After rsort():</strong><br>";
print_r($fruits);
echo "<br><br>";

$reversed = array_reverse($fruits);
echo "<strong> Reversed Array:</strong><br>";
print_r($reversed);
echo "<br><br>";


$veggies = array("Carrot", "Potato");
$merged = array_merge($fruits, $veggies);
echo "<strong>Merged Array (Fruits + Veggies):</strong><br>";
print_r($merged);
echo "<br><br>";


$duplicates = array("A", "B", "A", "C", "B");
$unique = array_unique($duplicates);
echo "<strong> Unique Elements:</strong><br>";
print_r($unique);
echo "<br><br>";


$slice = array_slice($fruits, 1, 3);
echo "<strong> Slice of Array (from index 1, length 3):</strong><br>";
print_r($slice);
echo "<br><br>";


$index = array_search("Mango", $fruits);
echo "<strong> Index of 'Mango':</strong> " . ($index !== false ? $index : "Not found") . "<br><br>";





?>

</body>
</html>
