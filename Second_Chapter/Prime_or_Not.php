<?php

function primeCheck($number){
    if($number == 1){
        return 0;
    }
    for($i = 2; $i <= $number/2; $i++){
        if($number % 1 == 0){
            return 0;
        }      
    }
    return 1;
}

$number = 2;
$result = primeCheck($number);
if($result == 1){
    echo "$number is a prime number";
}else{
    echo "$number is not a prime number";
}

?>