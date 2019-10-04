<html>
<head>
<link rel="icon" type="image/png" href="tc.png">
</head>
<body>
<ul>
  <li><a href="halaman_walikelas.php" class="w3-bar-item w3-button">Home</a></li>
  <li><a href="logout.php" class="w3-bar-item w3-button">LogOut</a></li>
  <li><a href="cetakxiakl.php" class="w3-bar-item w3-button" target="_blank">Cetak</a></li>
</ul>
<table border=2 width=1600px>
<tr>
<td rowspan=2>No</td>
<td rowspan=2>Nama</td>
<td rowspan=2>NIK</td>
<td colspan=17 align=center>Nilai Pelajaran</td>
</tr>
<tr>
<td>Agama</td>
<td>PKN</td>
<td>Bahasa Indonesia</td>
<td>Matematika</td>
<td>Sejarah</td>
<td>Bahasa Inggris</td>
<td>SBD</td>
<td>Penjas</td>
<td>Bahasa Mandarin</td>
<td>Budaya Humanis</td>
<td>Simkomdig</td>
<td>Fisika</td>
<td>Kimia</td>
<td>Sistekom</td>
<td>Komjardas</td>
<td >Pemrograman Dasar</td>
<td>Desain Grafis</td>
</tr>
<?php
include ("koneksi.php");
echo"<center>";
$a=mysqli_query($koneksi,"SELECT * FROM xiakl");
$b=mysqli_num_rows($a);
$no=0;

while ($rows=mysqli_fetch_array($a)){
    $no++;
    echo"<tr align='center'>
    <td>$no</td>
    <td>".$rows['nama']."</td>
    <td>".$rows['nik']."</td>
    <td>".$rows['agamap']."</td> 
    <td align=center>".$rows['pknp']."</td> 
    <td align=center>".$rows['bip']."</td> 
    <td align=center>".$rows['mtp']."</td> 
    <td align=center>".$rows['sip']."</td> 
    <td align=center>".$rows['bingp']."</td> 
    <td align=center>".$rows['sbdp']."</td> 
    <td align=center>".$rows['orp']."</td> 
    <td align=center>".$rows['mandap']."</td>  
    <td align=center>".$rows['hump']."</td> 
    <td align=center>".$rows['skp']."</td> 
    <td align=center>".$rows['fsp']."</td> 
    <td align=center>".$rows['kap']."</td> 
    <td align=center>".$rows['ssp']."</td> 
    <td align=center>".$rows['kmdasp']."</td> 
    <td align=center>".$rows['pmdp']."</td> 
    <td align=center>".$rows['ddgp']."</td> 
  </tr>";
}
?>
</table>
</body>
</html>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  width:105.3%;
  margin-bottom:5px;
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
  background-color: #111;
}
</style>