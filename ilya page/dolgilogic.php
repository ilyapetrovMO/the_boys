<?php
$servername = "localhost";
$username = "testUser";
$password = "test";
$ses = false;

try {
    $conn = new PDO("mysql:host=$servername;dbname=tbdolgi", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $ses = true;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$conn->query('SET NAMES utf8');
    
$sql = "SELECT count(nameDolg) FROM `dolgi`";
$ses = $conn->query($sql);
$ses = $ses->fetchColumn();

$sql = "SELECT nameDolg FROM `dolgi` WHERE 1";
$ses2 = $conn->query($sql);
$resstring = "";

$row = "";
foreach ($ses2 as $row) {
    $resstring ="<p>" . $row['nameDolg'] . "</p>" . $resstring;
}
	
$conn=null;
?>