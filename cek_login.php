<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="xrpl"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xrpl";
		// alihkan ke halaman dashboard admin
		header("location:legerxrpl.php");

	// cek jika user login sebagai pegawai
	}
	elseif($data['level']=="xakl"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xakl";
		// alihkan ke halaman dashboard admin
		header("location:legerxakl.php");

	// cek jika user login sebagai pegawai
	}
	elseif($data['level']=="xotkp"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xotkp";
		// alihkan ke halaman dashboard admin
		header("location:legerxotkp.php");

	// cek jika user login sebagai pegawai
	}
	elseif($data['level']=="xirpl"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xirpl";
		// alihkan ke halaman dashboard admin
		header("location:legerxirpl.php");

	// cek jika user login sebagai pegawai
	}
	elseif($data['level']=="xiakl"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xiakl";
		// alihkan ke halaman dashboard admin
		header("location:legerxiakl.php");

	// cek jika user login sebagai pegawai
	}
	elseif($data['level']=="xiotkp"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "xiotkp";
		// alihkan ke halaman dashboard admin
		header("location:legerxiotkp.php");

	// cek jika user login sebagai pegawai
	}
    
    else{

		// alihkan ke halaman login kembali
		header("location:loginuser.php?pesan=gagal");
	}	
}else{
	header("location:loginuser.php?pesan=gagal");
}

?>