
<?php

$myCars = new stdClass();

$myCars->makes = ["ford", "linconln", "mercury"];
$myCars->years = ["1999", "2000", "2001", "2002", "2003"];

echo "<pre>";
echo json_encode($myCars);
echo "</pre>";
?>