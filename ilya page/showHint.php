<?php

$hint = "";
$searchParam = $_REQUEST["q"];
if ($searchParam !==""){

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
$searchParam = strtolower($searchParam);
$len = strlen($searchParam);
$sql = $conn->query("select nameDolg from dolgi where 1");

foreach ($sql as $row) {
    if (mb_stristr($searchParam, substr($row['nameDolg'],0,$len))){
        if ($hint === ""){$hint = $row['nameDolg'];}
        else {$hint .= ', '.$row["nameDolg"];}
    }
}
}

echo $hint === "" ? "" : $hint;
$conn=null;
?>