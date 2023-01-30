<!DOCTYPE html>
<html lang="en">
<head>
    <title>AWP Automata Web Penetration Testing Tool</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">AWP</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="user.php">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">W3AF Attacks
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="sqlmmapw3af.php">Sqlmap Attack</a></li>
                    <!--                    <li><a href="sqlmapexploit.php">Sqlmap Exploit</a></li>-->
                    <li><a href="w3af.php">Xss simple</a></li>
                    <!--                    <li><a href="xssStorew3af.php">Xss stored</a></li>-->
                </ul>
            </li>
            <li><a href="nmap.php">Nmap Attack</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">List<span
                            class="caret"></span> </a>
                <ul class="dropdown-menu">
                    <li><a href="nmapList.php">Nmap Attack List</a></li>
                    <li><a href="xsslist.php">XSS Attack List</a></li>
                    <li><a href="sqlList.php">SQLi Attack List</a></li>

                </ul>
    </div>
</nav>
</html>
<br>
<br>
<br>