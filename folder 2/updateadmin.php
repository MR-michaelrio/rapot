<?php
include ("koneksi.php");
$nama=$_GET['nama'];
$query="SELECT * FROM user WHERE nama='$nama'";
$hasil=mysqli_query($koneksi, $query);
$rows=mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/admin.css">
</head>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="halaman_admin.php" class="w3-bar-item w3-button">Back</a>
  <a href="logout.php" class="w3-bar-item w3-button">LogOut</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
</div>
</head>
<form method=post action='prosesupdateadmin.php?id=<?php echo $nama;?>'>
<center>
<table border=0 width=1000px>

<tr>
<td colspan=2 align=center><img src=tc.png width=100px></td>
<td align=center colspan=2>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI<br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>

<tr>
<td colspan=4><hr color=green size=5 width=1000px></td>
</tr>

<tr>
<td colspan=4 align=center><b>Identitas Siswa</td>
</tr>


<tr>
<td>Nama</td>
<td width=1>:</td> 
<td><input type="text" name="nama" value="<?php echo $rows['nama']; ?>"></td>
</tr>

<tr>
<td>Username</td>
<td width=1>:</td>
<td><input type="text" name="username" value="<?php echo $rows['username']; ?>"></td>
</tr>

<tr>
<td>Password</td>
<td width=1>:</td> 
<td><input type="text" name="password" value="<?php echo $rows['password']; ?>"></td>
</tr>

<tr>
<td>Mapel</td>
<td width=1>:</td> 
<td><input type="text" name="mapel" value="<?php echo $rows['mapel']; ?>"></td>
</tr>



</table>
<input type=submit value=Proses >

</form>
</html>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>