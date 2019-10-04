<?php
include "koneksi.php";
 $nik = $_GET['nik'];
 
 $query = "DELETE from xiakl WHERE nik='$nik'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:updatetampilanxiakl.php");
}
?>