<?php
include 'header.php';
include 'dbconnect.php';
$sql = "Select * from test_nmap";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='container'><form method='post' action='showDetail.php'><table class='table table-striped'><tr><th>IP</th><th>Detail</th><th>Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['ip'] . "</td><td>" . $row["detail"] . "</td><td>" . $row["date"] . "</td></tr>";
    }
    echo "</table></form></div>";
} else {
    echo "0 results";
}
$conn->close();
include 'nmapinfo.php';
?>
