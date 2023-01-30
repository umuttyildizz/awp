<?php
function Read() {
    $file = "/home/umut/Desktop/proje/s.txt";
    echo file_get_contents( $file);
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <textarea rows="20" cols="50" readonly="readonly" name="tekst"><?php Read(); ?></textarea><br>
    <input type="hidden" name="submit_check" value="1">
</form>
