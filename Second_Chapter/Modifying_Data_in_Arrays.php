<?php

$course[0] = "PHP";
$course[1] = "HTML";
$course[2] = "CSS";
$course[3] = "JavaScript";

echo "<h3>Before Modifiying Array</h3>";

echo $course[0] . "<br/>";
echo $course[1] . "<br/>";
echo $course[2] . "<br/>";
echo $course[3] . "<br/>";

echo "<h3>After Modifiying Array</h3>";

$course[2] = "CSS3";
$course[] = "jQuery";

for($i = 0; $i < count($course); $i++){
    echo $course[$i] . "<br/>";
}

?>