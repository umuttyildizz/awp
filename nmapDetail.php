<?php
include 'dbconnect.php';
$id=$_GET["id"];
$sql = "Select * from test_nmap where detail='$id'";
$result = $conn->query($sql);
?>



------
<?php
//include 'header.php';
//include 'dbconnect.php';
//$sql = "Select * from test_nmap";
//$result = $conn->query($sql);
//if ($result->num_rows > 0) {
//    echo "<div class='container'><form method='post' action='showDetail.php'><table class='table table-striped'><tr><th>ID</th><th>Query</th><th>Ports</th><th>Services</th><th>Date</th><th>Detail</th></tr>";
//    while ($row = $result->fetch_assoc()) {
//        echo "<tr><td>" . $row['id'] . "</td><td>" . $row["query"] . "</td><td> " . $row["ports"] . "</td><td>" . $row["services"] . "</td><td>" . $row["date"] . "</td><td><a name='id' href=showDetail.php?=".$row['id'].">Detail</a></td></tr>";
//    }
//    echo "</table></form></div>";
//} else {
//    echo "0 results";
//}
//$conn->close();
//
////echo "<table><th>Detail</th><td>" . $row["detail"] . "</td>";
//
////include 'showDetail.php';
//
//?>
