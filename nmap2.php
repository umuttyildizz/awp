<?php
include "header.php";
include "dbconnect.php";
$ip = $_POST["ip"];
$output = escapeshellcmd("nmap -T4 --stats-every 5 -r -n -Pn --top-ports 100 $ip");
$command = shell_exec($output);
echo "<pre>$command</pre>";
$sql = "insert into test_nmap(ip,detail) VALUES('" . $ip . "','" . $command . "')";
if ($conn->query($sql) === TRUE) {
//    echo '<div class=\"aler alert-info">';
//        echo '<strong>Info!</strong> New record created successfully';
//        echo '</div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>