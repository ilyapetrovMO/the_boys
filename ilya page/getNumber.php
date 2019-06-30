<?php
$servername = "localhost";
$username = "testUser";
$password = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tbdolgi", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $ses = true;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$conn->query('SET NAMES utf8');
    
$sql = "SELECT count(nameDolg) FROM dolgi where checkFlag = 1";
$ses = $conn->query($sql);
echo $ses->fetchColumn();
	
$conn=null;
?>