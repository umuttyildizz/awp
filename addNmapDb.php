<?php
include 'user.php';
include 'dbconnect.php';
session_start();
$a = $_POST['a'];
$ip = $_POST['ip'];
$result = $_POST['command'];
$sql = "insert into test_nmap VALUES('".$ip."','". $result ."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>