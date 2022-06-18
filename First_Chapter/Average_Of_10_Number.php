<?php

$sum = 0;
for($i = 0; $i <= 10; $i++){
    echo "$i<br/>";
    $sum = $sum + $i;
}
echo"Sum: $sum <br/>";
$average = (float)$sum/$i;
echo"Average: $average";

?>