<?php
include 'dbconnect.php';
session_start();
$a = $_POST['url'];
$b = $_POST['attack'];
$c = $_POST['decription'];
$sql = "insert into test_xss(url) VALUES('" .$a. "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>