<!DOCTYPE html>
<html>
<body style="background-color:rgb(65,65,65)">
</body>
</html> 

<?php 

$servername = "localhost";
$username = "testUser";
$password = "test";
$ses = false;

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
$dolg = $_POST['dolgName'];
$sql = ("select nameDolg from dolgi where nameDolg = \"" . $dolg."\"");
$sql = $conn->query($sql);
if ($sql->rowCount() == 0){exit;}
else {
    if ($_POST['delorpost'] == 'post'){

        $conn->query('SET NAMES utf8');
        $sql = "UPDATE `dolgi` SET `checkFlag` = '1' WHERE `dolgi`.`nameDolg` = \"" . $dolg . "\"; ";
        $conn->query($sql);
        }
        else {
            if ($_POST['delorpost'] == 'delete'){
        
                $conn->query('SET NAMES utf8');
                $sql = "UPDATE `dolgi` SET `checkFlag` = '0' WHERE `dolgi`.`nameDolg` = \"" . $dolg . "\";";
                $conn->query($sql);
            }
        
        }
}
?>

<script>
window.location.href = "dolgi.html";
</script>