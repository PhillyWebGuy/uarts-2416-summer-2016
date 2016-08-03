<?php

$lists = file("list.txt");

print_r($lists);

echo "<br>";
echo "<br>";

$newLists = array();

foreach ($lists as $list){
    $newList = explode(" ", $list);
    array_push($newLists, $newList);
}

print_r($newLists);

echo "<br>";
echo "<br>";

foreach ($newLists as $newList){
    foreach ($newList as $newListItem){
        echo strtoupper($newListItem) . " ";
    }
    echo "<br>";
}

//print_r($newLists);
?>