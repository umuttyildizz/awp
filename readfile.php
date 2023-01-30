<?php
/**
 * Created by PhpStorm.
 * User: umut
 * Date: 26.04.2018
 * Time: 02:00
 */
include 'header.php';
$command = escapeshellcmd('python readfile.py  > s.txt');
$output = shell_exec($command);
shell_exec($command);
echo $output;
?>