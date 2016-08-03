<?php
echo "Question 1<P>";

$cars = ['Ford', 'Chrysler', 'Nissan'];

for($i = 0; $i < count($cars); $i++) {

     strtoupper($cars[$i]);

}

echo "<P>Question 5<P>";

function printDay() {
    $day = "Today is Wednesday";
}

echo $day;

echo "<P>Question 6<P>";

function someCars() {
    return "Ford, Lincoln, Mercury";
}

$cars = someCars();
echo $cars;


?>