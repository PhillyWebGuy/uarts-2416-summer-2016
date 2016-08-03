<?php

$myCars = '{"makes":["ford","linconln","mercury"],"years":["1999","2000","2001","2002","2003"]}';


echo "<pre>";
print_r(json_decode($myCars));
echo "</pre>";
?>