<?php
include "koneksi.php";
 $nis = $_GET['nis'];
 
 $query = "DELETE from xrpl WHERE nis='$nis'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:legerxrpl.php");
}
?>