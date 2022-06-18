<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}

$sql = "UPDATE PersonInfo SET firstname='pranav' WHERE id=3";

if(mysqli_query($conn, $sql)){
    echo "Record updated successfully";
}else{
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>