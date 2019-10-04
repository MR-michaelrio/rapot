<?php
include "koneksi.php";
 $nik = $_GET['nik'];
 
 $query = "DELETE from xotkp WHERE nik='$nik'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:updatetampilanxotkp.php");
}
?>