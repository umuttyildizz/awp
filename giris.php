<?php ob_start(); ?>
<?php
error_reporting(0);
session_start();
include('dbconnect.php');

$username = $_POST["username"];
$password = $_POST["password"];

//echo $username."<br>";
//echo $password."<br>";

$sql = "select * from user where user_id = '$username' and password = '$password'";
$result= $conn->query($sql);
if ($result->num_rows > 0){
    header("Location: user.php");
    echo "basarılı";
}
else{
    echo "hata";
    header("Location: index.php");
}
$conn->close();
ob_end_flush();
?>