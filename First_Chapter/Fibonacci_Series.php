<?php

$num = 0;
$num1 = 0;
$num2 = 1;
echo"<h3>Fibonacci Series Of First 12 number:</h3>";
echo "<br/>";
echo $num1." ".$num2;
while($num < 10){
    $num3 = $num1 + $num2;
    echo " ".$num3;
    $num1 = $num2;
    $num2 = $num3;
    $num = $num + 1;
}

?>