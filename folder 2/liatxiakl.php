<!DOCTYPE html>
<html>
<head>
	<title>Halaman WaliKelas </title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/liat.css">
    <link rel="icon" type="image/png" href="tc.png">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="halaman_walikelas.php" class="w3-bar-item w3-button">Home</a>
  <a href="logout.php" class="w3-bar-item w3-button">LogOut</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
</div>

<div class="w3-container">
<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<center>
<table width=800px>
<tr>
<td colspan=2 align=center><img class=cktc src=tc.png width=100px></td>
<td align=center class=cktc><b>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI</b><br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>
<tr>
<td colspan=3 align=center><br><b>LAPORAN HASIL BELAJAR MID SEMESTER</b></td>
</tr>
</center>
</table>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST">
			<div class="form-inline">
				<input type="text" id="search_data" class="form-control" placeholder="Search here..."/>
				<button type="button" id="search" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button>
        <br>Note : Menggunakan NIS (Nomor Induk Siswa)
			</div>
		</form>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-success">
			</thead>
			<tbody class="alert-warning" id="data">
			</tbody>
		</table>
	</div>	
</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/scriptxiakl.js"></script>
</html>
<style>
.logout{
    border:0;
    font-weight: bold;
  display: block;
  margin: 20px;
  text-align: center;
  width: 100px;
  outline: none;
  color: black;
  border-radius: 24px;
  cursor: pointer;
  text-decoration:none;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: lightcoral;
  text-decoration: none;
}
	</style>
	<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>