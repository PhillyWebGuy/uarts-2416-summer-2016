<?php
$books = array (
    0 => array(
        "title" => "The Hitchhiker's Guide to the Galaxy",
        "price" => "10", 
        "author" => "Douglas Adams"
    ),
    1 => array(
        "title" => "The Lord of the Rings",
        "price"  => "9",
        "author" => "J. R. R. Tolkien"
    ),
    2 => array(
        "title" => "The Martian",
        "price"  => "13",
        "author" => "Andy Weir"
    ),
    3 => array(
        "title" => "The Color of Magic",
        "price"  => "8",
        "author" => "Terry Pratchett"
    ),
    4 => array(
        "title" => "I, Robot",
        "price"  => "6",
        "author" => "Isaac Asimov"
    ),
    5 => array(
        "title" => "The Way of Kings",
        "price"  => "11",
        "author" => "Brandon Sanderson"
    ),
);
echo "<table>";
    echo "<tr> 
        <td>Title</td> <td>Price</td> <td>Author</td> 
    </tr>";
    
    foreach ($books as $book){
        echo "<tr>";
        foreach ($book as $key => $value){
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    
echo "</table>";
?>