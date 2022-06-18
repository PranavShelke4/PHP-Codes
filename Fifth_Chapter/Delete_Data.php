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

$sql = "DELETE FROM PersonInfo WHERE id=3";

if(mysqli_query($conn, $sql)){
    echo "Record deleted successfully";
}else{
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>