<?php

$servername = "localhost";
$username = "testUser";
$password = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tbdolgi", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$conn->query('SET NAMES utf8');
$result = "";
$sql = $conn->query("select nameDolg from dolgi where checkFlag = 1");
foreach ($sql as $row) {
    $result = "<p>".$row['nameDolg']."</p>".$result;
}

echo $result;
$conn=null;
?>