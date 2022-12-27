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
$name = "babo";
$email = "babo@outlook.com";
$sql = "INSERT INTO `user`(`id`, `name`, `email`) VALUES ('','$name','$email')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "the record is inserted successfully! <br>" . $sql;
}
else {
    echo "the table is not created because of this error " . mysqli_error($conn);
}
?>