<head>
<link rel="stylesheet" href="css/update.css">
</head>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="halaman_walikelas.php" class="w3-bar-item w3-button">Home</a>
  <a href="logout.php" class="w3-bar-item w3-button">LogOut</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <a href=legerxotkp.php>LEGER</a>
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
		<?php
include("koneksi.php");
$a=mysqli_query($koneksi,"SELECT * FROM xotkp");
$b=mysqli_num_rows($a);
$no=0;
echo '
<center>
<table border=2 color=black width=1000px>
<tr align=center>
<td>No</td>
<td>Nama</td>
<td>NIK</td>
<td>Kelas</td>
<td>Keterangan</td>
</tr>

'; 
while ($rows=mysqli_fetch_array($a)){
    $no++;
    echo"<tr align='center'>
    <td>".$no."</td>
    <td>".$rows['nama']."</td>
    <td>".$rows['nik']."</td>
    <td>".$rows['kls']."</td>
  <td><i> <a href='deletexotkp.php?nik=".$rows['nik']."'> Delete </a></i></td>
  </tr>";

}
?>
		</table>
	</div>	
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
<style>
a{
  color:black;
  font-weight:bold;
}
</style>