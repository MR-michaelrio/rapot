<?php
include "koneksi.php";
 $nama = $_GET['nama'];
 
 $query = "DELETE from user WHERE nama='$nama'" ;
 $hasil = mysqli_query($koneksi,$query);
 if ($hasil) {
	header("Location:halaman_admin.php");
}
?>