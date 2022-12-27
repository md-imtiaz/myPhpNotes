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
    echo "db connected successfully! ";
}
$sql = "CREATE TABLE `user` (`id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL , `email` VARCHAR(15) NOT NULL , PRIMARY KEY(`id`))";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "the Table is created successfully! <br>" . $sql;
}
else {
    echo "the table is not created because of this error " . mysqli_error($conn);
}
?>