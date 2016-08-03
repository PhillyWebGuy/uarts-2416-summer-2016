<?php
$books = array (
    array(
        "title" => "The Hitchhiker's Guide to the Galaxy",
        "price" => "10", 
        "author" => "Douglas Adams"
    ),
    array(
        "title" => "The Lord of the Rings",
        "price"  => "9",
        "author" => "J. R. R. Tolkien"
    ),
    array(
        "title" => "The Martian",
        "price"  => "13",
        "author" => "Andy Weir"
    ),
    array(
        "title" => "The Color of Magic",
        "price"  => "8",
        "author" => "Terry Pratchett"
    ),
    array(
        "title" => "I, Robot",
        "price"  => "6",
        "author" => "Isaac Asimov"
    ),
    array(
        "title" => "The Way of Kings",
        "price"  => "11",
        "author" => "Brandon Sanderson"
    )
);
echo "<table>";
    echo "<tr> 
        <td>Title</td> <td>Price</td> <td>Author</td> 
    </tr>";
    
    for ($i = 0; $i < count($books); $i++) {
        echo "<tr>";
        foreach ($books[$i] as $key => $value){
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    
echo "</table>";
?>