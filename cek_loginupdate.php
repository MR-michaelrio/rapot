<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from userlogin where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="xrpl"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xrpl";
		header("location:updatetampilanxrpl.php");

	}else if($data['level']=="xakl"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xakl";
		header("location:updatetampilanxakl.php");

	}else if($data['level']=="xotkp"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xotkp";
		header("location:updatetampilanxotkp.php");

    }else if($data['level']=="xirpl"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xirpl";
		header("location:updatetampilanxirpl.php");

	}else if($data['level']=="xiakl"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xiakl";
		header("location:updatetampilanxiakl.php");

    }else if($data['level']=="xiotkp"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xiotkp";
		header("location:updatetampilanxiotkp.php");

    }
    
    else{

		// alihkan ke halaman login kembali
		header("location:loginupdate.php?pesan=gagal");
	}	
}else{
	header("location:loginupdate.php?pesan=gagal");
}

?>