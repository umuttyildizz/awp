<?php
include 'user.php';
//$validation = "";
//exec('python sqlmap-dev/sqlmap.py -h  > s.txt');
?>
<br>
<br>
<form action="readfile.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
<!--                    <div class="form-group">-->
<!--                        <label for="query">Database Dump</label>-->
<!--                        <input type="text" class="form-control" id="dbdump" name="dbdump" placeholder="Queryi Yazın">-->
<!--                    </div>-->
            </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</form>