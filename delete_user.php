<?php
require_once "koneksi.php";
$rowCount = count($_POST["xrpl"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($koneksi, "DELETE FROM xrpl WHERE id='" . $_POST["xrpl"][$i] . "'");
}
header("Location:legerxrpl.php");
?>