<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection Field: " . mysqli_connect_error());
}else{
    echo "Connected successfully <br/>";
}

$sql = "CREATE DATABASE newDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully with the name newDB";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>