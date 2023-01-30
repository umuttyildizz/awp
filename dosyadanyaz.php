<?php
//include 'user.php';
//echo '<html>';
include 'dbconnect.php';
include 'header.php';
$url = $_GET['url'];
$file = "/home/umut/Desktop/proje/results/". $url ."-xss-simple-db";
$document = file_get_contents($file);
$rows = explode("\n", $document);
//foreach ($rows as $line)
//{
//    $temp = explode("#",$line);
//    $url = explode("#",$temp[1]);
//
//    $temp = explode("#",$line);
//    $attacks = explode("#", $temp[1]);
//
//    $temp = explode("#", $line);
//    $description = explode("#",$temp[1]);
//
//    $sql = "INSERT INTO test_xss(url) VALUES('".$url[0]."')";
//    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }}

array_shift($rows);
foreach ($rows as $row => $data) {
    error_reporting(0);
    $row_data = explode('#', $data);
    $url = $row_data[0];
    $attack = $row_data[1];
    $description = $row_data[2];

    echo 'Row ' . $row . ' URL: ' . $url . '<br />';
    echo 'Row ' . $row . ' ATTACK: ' . $attack . '<br />';
    echo 'Row ' . $row . ' DESCRIPTION: ' . $description . '<br />';
//    echo '<form class="container" action="addxss.php" method="post">';

    $sql = "insert into test_xss_detail(url,attack,description) VALUES('" . $url . "','".$attack."','".$description."')";
    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sorgu = "select id into test_xss from test_xss_detail where=1";
    if ($conn->query($sorgu) === TRUE) {
//        echo "New record created successfully";
    } else {
//        echo "Error: " . $sorgu . "<br>" . $conn->error;
    }
//    echo '<textarea style="display: contents" name="url">';
//    echo $url;
//    echo '</textarea>';
//    echo '<textarea style="display: contents" name="attack">';
//    echo $attack;
//    echo '</textarea>';
//    echo '<textarea style="display: contents" name="description">';
//    echo $description;
//    echo '</textarea>';
//    echo ' <input type="submit" value="Veritabanına Kaydet">';
//    echo '<br />';
}
//echo $document;
//echo $document;
//echo '<textarea rows="20" cols="50" readonly="readonly" name="a">';
//$a = popen($document,'r');
//while($b = fgets($a, 4096)) {
//    echo $b;
//    flush();
//}
//pclose($a);
//echo '</textarea>'
//dosya url ile alınacak.
//?>
<!--<html>-->
<!--<body>-->
<!--<form class="container" action="addxss.php" method="post">-->
<!--    <input type="submit" value="Veritabanına Kaydet">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->
