<?php
include "koneksi.php";
 $nik = $_GET['nik'];
 
 $query = "DELETE from xakl WHERE nik='$nik'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:updatetampilanxakl.php");
}
?>