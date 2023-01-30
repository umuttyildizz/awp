<?php
include 'header.php';
include 'dbconnect.php';
$sql = "Select * from test_xss_detail";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<div class='container'><form><table class='table table-striped'><tr><th>ID</th><th>URL</th><th>ATTACK</th><th>DESCRIPTION</th><th>Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row["url"] . "</td><td> " . $row["attack"] . "</td><td>" . $row["description"] . "</td><td>" . $row["date"] . "</td></tr>";
    }
    echo "</table></form></div>";
} else {
    echo "0 results";
}
$conn->close();