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
$sql = "SELECT * FROM `emp` WHERE `rule`='SProgrammer'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num . "records found in the DataBase<br>";
$no = 1;
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo "hello " . $row['name'] . " your rule is: " . $row['rule'] . " and your id is: " . $no . "<br>";
        $no += 1;
    }
}
// $sql = "UPDATE `emp` SET `rule` = 'SProgrammer' WHERE `name`='shuvo'";
// $result = mysqli_query($conn, $sql);
// $aff = mysqli_affected_rows($conn);
// echo "Number of affected rows: $aff <br>";
// if($result){
//     echo "We updated the record successfully";
// }
// else{
//     echo "We could not update the record successfully";
// }
?>