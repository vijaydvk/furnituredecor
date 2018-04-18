<?php
$num=18/6;
$float = floatval($num); //Convert the string to a float
if($float && intval($float) != $float) // Check if the converted int is same as the float value...
{
    echo "float";
}else{
    echo "integer";
}
?>