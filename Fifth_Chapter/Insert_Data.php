<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Coneection Field:" .mysqli_connect_error());
}else{
    echo "Connected successfully <br/>";
}

$sql = "INSERT INTO PersonInfo (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>