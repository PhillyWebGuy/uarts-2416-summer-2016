<?php


$price = 3;
$increment = 10;
$units = 1;

while($units <= 100) {
 echo "The cost of " . $units . " paint brushes is $" . $price * $units . "<br>";
 if($units == 1) {
    $units = 10;
 } else {
     $units = $units + 10;
 }
}

echo "<hr>";

$price = 3;
$increment = 10;
$units = 100;

do {
 echo "The cost of " . $units . " paint brushes is $" . $price * $units . "<br>";
 if($units == 10) {
    $units = 1;
 } else {
     $units = $units - 10;
 }
}
while($units > 0);



?>