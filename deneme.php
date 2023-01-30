<?php ob_start();
?>
<?php
error_reporting(0);
session_start();
include('dbconnect.php');
include('header.php');
$url = $_POST["url"];
$command = escapeshellcmd("python umut/xss_simple.py " . $url);
shell_exec($command);
$command2 = escapeshellcmd("python xssread.py" . $url);
shell_exec($command2);
$file = "/home/umut/Desktop/proje/results/" . $url . "-xss-simple-db";
$document = file_get_contents($file);
$rows = explode("\n", $document);
array_shift($rows);
foreach ($rows as $row => $data) {
    error_reporting(0);
    $row_data = explode('#', $data);
    $url = $row_data[0];
    $attack = $row_data[1];
    $description = $row_data[2];

    echo '<div class="container">';
    echo '<div class="row">';
    echo ' URL: ' . $url . '<br />';
    echo ' ATTACK: ' . $attack . '<br />';
    echo ' DESCRIPTION: ' . $description . '<br />';

    $sql = "insert into test_xss_detail(url,attack,description) VALUES('" . $url . "','" . $attack . "','" . $description . "')";
    if ($conn->query($sql) === TRUE) {
    } else {

    }


}

//?>
