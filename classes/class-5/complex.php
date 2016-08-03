<?php
    $relatives = file('complex_assignment.txt');
   
   echo "<PRE>";
    print_r($relatives);
   echo "</PRE>";
   
    foreach ($relatives as $relative) {
        $family = explode(",", $relative);
        $familyfield = implode(', ', $family);
        $upperfamily = strtoupper($familyfield);
        echo $upperfamily . '</br>';
    }
    
   
    
    
    
    
   
    
    
    
?>