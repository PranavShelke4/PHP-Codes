<?php

$sum = 0;
for($i = 0; $i <= 10; $i += 2){
    echo "$i<br/>";
    $sum = $sum + $i;
}

echo"Sum: $sum";

?>