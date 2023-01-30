<?php
include 'header.php';
include 'dbconnect.php';
?>
<br>
<br>
<form action="sqlmaptest.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="query">url</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="urli Yazın">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</form>