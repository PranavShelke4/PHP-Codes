<?php

$num = 12345;
$revnum = 0;
while($num > 1){
    $rem = $num % 10;
    $revnum = ($revnum * 10) + $rem;
    $num = ($num / 10);
}

echo "Reverse Number of 12345 is $revnum";

?>