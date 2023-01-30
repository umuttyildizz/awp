<?php
include 'dbconnect.php';
include 'header.php';
$aa = $_POST['detail'];
$sql = "Select * from test_nmap where id='$aa'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='container'><form method='get'>";
    while ($row = $result->fetch_assoc()) {
        echo "<textarea rows=\"20\" cols=\"50\" readonly=\"readonly\">" . $row["detail"] . "</textarea>";
    }
} else {
    echo "0 results";
}
$conn->close();

include 'nmapinfo.php';

?>