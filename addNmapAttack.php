<?php
include 'header.php';
include 'dbconnect.php';

session_start();
$query = $_POST['query'];
$ports = $_POST['ports'];
$services = $_POST['services'];


$sql = "insert into test_nmap(query, ports, services) VALUES('".$query."','".$ports."','".$services."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>