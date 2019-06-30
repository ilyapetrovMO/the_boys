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
$sql = $conn->query("select nameDolg from dolgi where 1");
$result = "<select  name=\"dolgName\">";
foreach ($sql as $row) {
    $dolg = $row['nameDolg'];
    $result = $result . "<option value=\"" . $dolg . "\">". $dolg . "</option>";
}
$result .= "</select>";
echo $result;
$conn=null;
?>