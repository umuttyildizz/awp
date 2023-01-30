<?php
include 'header.php';
include 'dbconnect.php';
?>
<br>
<br>
<form action="nmap2.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="ip">IP Address</label>
                        <input type="text" class="form-control" id="url" name="ip" required="required" placeholder="IP Adresini Yazın">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</form>