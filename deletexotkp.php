<?php
include "koneksi.php";
 $nis = $_GET['nis'];
 
 $query = "DELETE from xotkp WHERE nis='$nis'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:legerxotkp.php");
}
?>