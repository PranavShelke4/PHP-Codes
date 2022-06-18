<?php

    session_start();

    echo "User Name: " .$_SESSION["name"]."<br>";
    echo "User Age: ".$_SESSION["age"].".";

?>