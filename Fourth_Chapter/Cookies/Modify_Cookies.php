<?php

$cookie_name = "user";
$cookie_value = "Pranav Shelke";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '" . $cookie_name . "' is not set!";
}else{
    echo "Modified Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

?>
