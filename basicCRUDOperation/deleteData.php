<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "shuvos_emp";
$conn = mysqli_connect($servername, $username, $password, $dbName);
if (!$conn) {
    die("fail to connect to the database! " . mysqli_connect_error());
}
else {
    echo "db connected successfully! <br>";
}
$sql = "DELETE FROM `emp` WHERE `rule`='singer'";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff <br>";
if($result){
    echo "Delete successfully";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error --> $err";
}
?>