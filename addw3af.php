<?php
include 'user.php';
$validation = "";
exec("python umut/xss_stored.py 'aresservis.com' > umut.txt ");
session_start();
//$dbdump = $_POST['dbdump'];


//$sql = "insert into test_sqlmap(db_dump) VALUES('".$dbdump."')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
?>