<?php
include "koneksi.php";
 $nis = $_GET['nis'];
 
 $query = "DELETE from xakl WHERE nis='$nis'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:legerxakl.php");
}
?>