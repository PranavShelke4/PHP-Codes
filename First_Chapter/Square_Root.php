<?php

    function my_sqr($n){
        $x = $n;
        $y = 1;
        while($x > $y){
            $x = ($x + $y) / 2;
            $y = $n / $x;
        }
        return $x;
    }

    print_r(my_sqr(16)."<br/>");
    print_r(my_sqr(144)."<br/>");

?>