<?php
include "koneksi.php";
 $nik = $_GET['nik'];
 
 $query = "DELETE from xiotkp WHERE nik='$nik'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:updatetampilanxiotkp.php");
}
?>