<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
?>

<html>
<head>
<link rel="icon" type="image/png" href="tc.png">
<link rel="stylesheet" href="css/admin.css">
</head>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="logout.php" class="w3-bar-item w3-button">LogOut</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
</div>
<div class="w3-container">
<div class="col-md-3"></div>
<center>
	<div class="col-md-6 well">
	
<table width=800px>
<tr>
<td colspan=2 align=center><img class=cktc src=tc.png width=100px></td>
<td align=center class=cktc><b>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI</b><br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>
<tr>
<td colspan=3 align=center><br><b>DAFTAR GURU</b></td>
</tr>
</center>
</table>
		<hr style="border-top:1px dotted #ccc;"/>
		<?php
include("koneksi.php");
$a=mysqli_query($koneksi,"SELECT * FROM user");
$b=mysqli_num_rows($a);
$no=0;
echo '
<center>
<table border=2 color=black width=1000px>
<tr align=center>
<td>No</td>
<td>Nama</td>
<td>Username</td>
<td>Password</td>
<td>Mapel</td>
<td colspan=2>Keterangan</td>
</tr>
'; 
while ($rows=mysqli_fetch_array($a)){
    $no++;
    echo"<center><tr align='center'>
    <td>".$no."</td>
    <td>".$rows['nama']."</td>
    <td>".$rows['username']."</td>
    <td>".$rows['password']."</td>
    <td>".$rows['mapel']."</td>
    <td><i> <a href='updateadmin.php?nama=".$rows['nama']."'> Edit </a></i></td> 
  <td><i> <a href='deleteadmin.php?nama=".$rows['nama']."'> Delete </a></i></td>
  </tr>
  ";
}
echo"
<tr>
<td colspan=7 align=center><a href=tambahguru.php> Tambah Daftar</a></td> 
</tr>"
?>
		</table>
	</div>	
</div>



<style>
.wew{
position:absolute;
bottom:-230;
left:450;
width:300;
border:3px blue;
}
.ha{
  position:absolute;
bottom:-230;
right:300;
width:300;
border:3px blue;
}
.hu{
  width:380;
}
.wow{
  border-color:gray;
  border-style:double;
  position:absolute;
  left:452;
width:500;

}
}
.cktc{
  padding-right:150px;
}
.no{
 width:35px;
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