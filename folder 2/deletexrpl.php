<?php
include "koneksi.php";
 $nik = $_GET['nik'];
 
 $query = "DELETE from xrpl WHERE nik='$nik'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:updatetampilanxrpl.php");
}
?>