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

if ($_POST['delorpost'] == 'post'){

$conn->query('SET NAMES utf8');
$sql = "INSERT INTO dolgi (nameDolg) VALUES ('$_POST[dolgName]')";
$conn->query($sql);
}
else {
    if ($_POST['delorpost'] == 'delete'){

        $conn->query('SET NAMES utf8');
        $sql = "DELETE FROM `dolgi` WHERE `dolgi`.`nameDolg` = '$_POST[dolgName]'";
        $conn->query($sql);
    }

}

?>

<script>
window.location.href = "dolgi.php";
</script>