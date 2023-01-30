<?php
include 'header.php';
include 'dbconnect.php';
?>
<br>
<br>
<form action="deneme.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                   <div class="form-group">
                       <label for="query">url</label>
                      <input type="text" class="form-control" id="url" name="url" placeholder="urli Yazın">
                  </div>
                    <button id="submit_form" type="submit" class="btn btn-primary" onclick="loader()">Submit</button>
                </form>
                <div class="loader"></div>
            </div>
        </div>
    </div>
</form>