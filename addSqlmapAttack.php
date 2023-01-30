<?php
include 'user.php';
include 'dbconnect.php';

include 'user.php';
$validation = "";
exec('python sqlmap-dev/sqlmap.py -y -u "http://testphp.vulnweb.com/listproducts.php?cat=1" --dbs > s.txt');
session_start();
$dbdump = $_POST['dbdump'];


$sql = "insert into test_sqlmap(db_dump) VALUES('".$dbdump."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>