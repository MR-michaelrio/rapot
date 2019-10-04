<?php
require_once "koneksi.php";
$rowCount = count($_POST["xotkp"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($koneksi, "DELETE FROM xotkp WHERE id='" . $_POST["xotkp"][$i] . "'");
}
header("Location:legerxotkp.php");
?>