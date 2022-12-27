<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("failed to connect to the database" . mysqli_connect_error());
}
else {
    echo "db connected successfully! <br>";
}
$sql = "CREATE DATABASE shuvo2";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "the db is created successfully! <br>" . $sql;
}
else {
    echo "the db is not created because of this error: " . mysql_error($conn);
}
?>