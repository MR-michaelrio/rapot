<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar!<a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$password')";
       $simpan = $koneksi->query($data);
       if($simpan) {
        header("location:index.php");
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>