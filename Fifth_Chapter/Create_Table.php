<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Coonection Field:". mysqli_connect_error());
}else{
    echo "Connected successfully <br/>";
}

$sql = "CREATE TABLE PersonInfo (
        id INT(6) PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
    )"; 

if(msqli_query($conn, $sql)){
    echo "Table created successfully";
}else{
    echo "Error creating table: " . msqli_error($conn);
}

msqli_close($conn);  

?>