<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "conestogacollege";

try{

    $conn = new PDO("mysql:host=$servername;dbname=$database",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo "connected Succesfully;

} catch(PDOException $e) {
    echo "Connection Failed" .$e->getMessage();
}

?>