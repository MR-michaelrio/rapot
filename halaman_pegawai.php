<!DOCTYPE html>
<html>
<head>	
<link rel="icon" type="image/png" href="tc.png">
	<title>Halaman Guru Mapel </title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/liat.css">
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
  <a href="logout.php" class="w3-bar-item w3-button">Back</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
</div>
<form method=post action=proses.php>
<center>
<table border=2 width=1000px>

<tr>
<td colspan=2 align=center><img src=tc.png width=100px></td>
<td align=center colspan=2>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI<br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>

<tr>
<td colspan=4><hr color=green size=5 width=1000px></td>
</tr>

<tr>
<td	colspan=2><a herf="#">PKN</td>
<td	><a herf="#">SEJARAH</td>
</tr>

</table>
<input type=submit value=Proses > <input type=reset value=Batal>

</form>


</body>
</html>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

<style>
	.title{
		font-size:30px;
		font-weight:bold;
		font-family:
	}
</style>