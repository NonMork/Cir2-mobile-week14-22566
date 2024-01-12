<?php 
function add($a,$b)  {
    $add = $a + $b;
    print ("This is function $a + $b = " . $add . "<br/>");
}
add(10,5);


function sub($a,$b)  {
    $sub = $a - $b;
    print ("This is function  $a - $b = " . $sub . "<br/>");
}
sub(10,5);

function multiple($a,$b) {
    $multip = $a * $b;
    print  ("This is function  $a * $b = " . $multip. "<br/>");
}
multiple(10,5);

function division($a,$b)  {
    $division = $a / $b;
    print  ("This is function  $a / $b = " . $division. "<br/>");
}
division(10,5);
?>