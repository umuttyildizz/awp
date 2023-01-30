<?php
include 'user.php';
?>
<br>
<br>
<form action="addNmapAttack.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <?php
                    $stream = popen('/usr/bin/nmap -p 586 -sU 192.168.1.21', 'r');

                    while (!feof($stream)) {
                        //Make sure you use semicolon at the end of command
                        $buffer = fread($stream, 1024);
                        echo $buffer, PHP_EOL;
                    }

                    pclose($stream);
                    ?>
                    <div class="form-group">
                        <label for="query">Query</label>
                        <input type="text" class="form-control" id="query" name="query" placeholder="Queryi Yazın">
                    </div>
                    <div class="form-group">
                        <label for="query">Ports</label>
                        <input type="text" class="form-control" id="ports" name="ports" placeholder="Portu Girin">
                    </div>
                    <div class="form-group">
                        <label for="query">Services</label>
                        <input type="text" class="form-control" id="services" name="services"
                               placeholder="Servisi Girin">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</form>