<?php
$x=5; //global variables
$y=15; 
function sum(){
    global $x;
    global $y;
    $z=$x+$y;
    echo "From inside function 1+2=".$z."<br>";
}

function increment(){
    static $i=0; //persistent local variable-only works if init at declaration
    $i++;
    echo $i."<br>";
}
$z=$x+$y;
sum();
echo "From outside function 2+15=".$z."<br>";

echo "Calling increment: <br>";
increment();
increment();
increment();
increment();
?>