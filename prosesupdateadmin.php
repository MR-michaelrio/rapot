<?php
include ("koneksi.php");    
$id=$_GET['id'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$mapel=$_POST['mapel'];


$query = "UPDATE user SET nama='$nama', username='$username', password='$password', mapel='$mapel' WHERE nama='$id'" ;
    $test=mysqli_query($koneksi, $query);
if($query){
    header("location:halaman_admin.php");
}

  

?>