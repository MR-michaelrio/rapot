<?php
require_once "koneksi.php";
$rowCount = count($_POST["xakl"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($koneksi, "DELETE FROM xakl WHERE id='" . $_POST["xakl"][$i] . "'");
}
header("Location:legerxakl.php");
?>