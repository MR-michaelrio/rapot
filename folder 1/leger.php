<html>
<body>
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
$a=mysqli_query($koneksi,"SELECT * FROM xrpl");
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