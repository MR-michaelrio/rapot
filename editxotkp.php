<?php
require_once "db.php";
include "prosesxotkp.php";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">

<table border=2 width=99% style="position:fixed;">
<tr>
<td colspan=3 align=center><img src=tc.png width=100px></td>
<td align=center colspan=81>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI<br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>
<tr>
<td colspan=83><hr color=green size=5 width=100%></td>
</tr>
</table>

<BR><br><br><br><br><br>
<table border="2" align="center">
<tr>
<td colspan=2><input type="text" placeholder="Semester" name="semester[]"></td>
</tr>
<tr>
<td rowspan=4 width=10%>No</td>
<td rowspan=4>Nama</td>
<td rowspan=4>NIS</td>
<td colspan=80 align=center>Nilai Pelajaran</td>
</tr>
<tr>
<td colspan=2 align=center>Agama</td>
<td colspan=2 align=center>PKN</td>
<td colspan=2 align=center>Bahasa Indonesia</td>
<td colspan=2 align=center>Matematika</td>
<td colspan=2 align=center>Sejarah</td>
<td colspan=2 align=center>Bahasa Inggris</td>
<td colspan=2 align=center>SBD</td>
<td colspan=2 align=center>Penjas</td>
<td colspan=2 align=center>Bahasa Mandarin</td>
<td colspan=2 align=center>Budaya Humanis</td>
<td colspan=2 align=center>Simkomdig</td>
<td colspan=2 align=center>Ekonomi Bisnis</td>
<td colspan=2 align=center>Administrasi Umum</td>
<td colspan=2 align=center>IPA</td>
<td colspan=2 align=center>Teknologi Perkantoran</td>
<td colspan=2 align=center>Korespodensi</td>
<td colspan=2 align=center>Kearsipan</td>
<td colspan=9 align=center rowspan=2>Kegiatan Ekstrakulikule</td>
<td colspan=3 align=center rowspan=2>Ketidak Hadiran</td>
</tr>
<tr>
<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>

<td >PENGETAHUAN</td>
<td >KETERAMPILAN</td>
</tr>
<tr>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nilai</td>
<td>Nama Eskul</td>
<td>Nilai</td>
<td>Deskripsi</td>

<td>Nama Eskul</td>
<td>Nilai</td>
<td>Deskripsi</td>

<td>Nama Eskul</td>
<td>Nilai</td>
<td>Deskripsi</td>

<td>Sakit</td>
<td>Izin</td>
<td>Tanpa Keterangan</td>

</tr>

<?php
$no=0;
$rowCount = count($_POST["xotkp"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn, "SELECT * FROM xotkp WHERE id='" . $_POST["xotkp"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
$no++;
echo"
<tr>
<td>".$no."</td>";
?>


<td><input type="hidden" name="id[]" class="txtField" value="<?php echo $row[$i]['id'];?>">
<input type="text" name="nama[]" class="txtField" value="<?php echo $row[$i]['nama']; ?>"></td>
<td><input type="text" name="nis[]" class="txtField" value="<?php echo $row[$i]['nis']; ?>"></td>

<td><input type="text" name="agamap[]" class="txtField" value="<?php echo $row[$i]['agamap']; ?>"></td>
<td><input type="text" name="agamak[]" class="txtField" value="<?php echo $row[$i]['agamak']; ?>"></td>

<td><input type="text" name="pknp[]" class="txtField" value="<?php echo $row[$i]['pknp']; ?>"></td>
<td><input type="text" name="pknk[]" class="txtField" value="<?php echo $row[$i]['pknk']; ?>"></td>

<td><input type="text" name="bindop[]" class="txtField" value="<?php echo $row[$i]['bindop']; ?>"></td>
<td><input type="text" name="bindok[]" class="txtField" value="<?php echo $row[$i]['bindok']; ?>"></td>


<td><input type="text" name="mtkp[]" class="txtField" value="<?php echo $row[$i]['mtkp']; ?>"></td>
<td><input type="text" name="mtkk[]" class="txtField" value="<?php echo $row[$i]['mtkk']; ?>"></td>


<td><input type="text" name="sjrp[]" class="txtField" value="<?php echo $row[$i]['sjrp']; ?>"></td>
<td><input type="text" name="sjrk[]" class="txtField" value="<?php echo $row[$i]['sjrk']; ?>"></td>

<td><input type="text" name="bingp[]" class="txtField" value="<?php echo $row[$i]['bingp']; ?>"></td>
<td><input type="text" name="bingk[]" class="txtField" value="<?php echo $row[$i]['bingk']; ?>"></td>

<td><input type="text" name="sbdp[]" class="txtField" value="<?php echo $row[$i]['sbdp']; ?>"></td>
<td><input type="text" name="sbdk[]" class="txtField" value="<?php echo $row[$i]['sbdk']; ?>"></td>

<td><input type="text" name="orp[]" class="txtField" value="<?php echo $row[$i]['orp']; ?>"></td>
<td><input type="text" name="ork[]" class="txtField" value="<?php echo $row[$i]['ork']; ?>"></td>

<td><input type="text" name="mandap[]" class="txtField" value="<?php echo $row[$i]['mandap']; ?>"></td>
<td><input type="text" name="mandak[]" class="txtField" value="<?php echo $row[$i]['mandak']; ?>"></td>

<td><input type="text" name="bhump[]" class="txtField" value="<?php echo $row[$i]['bhump']; ?>"></td>
<td><input type="text" name="bhumk[]" class="txtField" value="<?php echo $row[$i]['bhumk']; ?>"></td>

<td><input type="text" name="simdigp[]" class="txtField" value="<?php echo $row[$i]['simdigp']; ?>"></td>
<td><input type="text" name="simdigk[]" class="txtField" value="<?php echo $row[$i]['simdigk']; ?>"></td>

<td><input type="text" name="ekonomip[]" class="txtField" value="<?php echo $row[$i]['ekonomip']; ?>"></td>
<td><input type="text" name="ekonomik[]" class="txtField" value="<?php echo $row[$i]['ekonomik']; ?>"></td>

<td><input type="text" name="admp[]" class="txtField" value="<?php echo $row[$i]['admp']; ?>"></td>
<td><input type="text" name="admk[]" class="txtField" value="<?php echo $row[$i]['admk']; ?>"></td>

<td><input type="text" name="ipap[]" class="txtField" value="<?php echo $row[$i]['ipap']; ?>"></td>
<td><input type="text" name="ipak[]" class="txtField" value="<?php echo $row[$i]['ipak']; ?>"></td>

<td><input type="text" name="teknologip[]" class="txtField" value="<?php echo $row[$i]['teknologip']; ?>"></td>
<td><input type="text" name="teknologik[]" class="txtField" value="<?php echo $row[$i]['teknologik']; ?>"></td>

<td><input type="text" name="korespop[]" class="txtField" value="<?php echo $row[$i]['korespop']; ?>"></td>
<td><input type="text" name="korespok[]" class="txtField" value="<?php echo $row[$i]['korespok']; ?>"></td>

<td><input type="text" name="arsipp[]" class="txtField" value="<?php echo $row[$i]['arsipp']; ?>"></td>
<td><input type="text" name="arsipk[]" class="txtField" value="<?php echo $row[$i]['arsipk']; ?>"></td>

<td><input type="text" name="eskula[]" class="txtField" value="<?php echo $row[$i]['eskula']; ?>"></td>
<td><input type="text" name="nilaieskula[]" class="txtField" value="<?php echo $row[$i]['nilaieskula']; ?>"></td>
<td><input type="text" name="deskripsia[]" class="txtField" value="<?php echo $row[$i]['deskripsia']; ?>"></td>

<td><input type="text" name="eskulb[]" class="txtField" value="<?php echo $row[$i]['eskulb']; ?>"></td>
<td><input type="text" name="nilaieskulb[]" class="txtField" value="<?php echo $row[$i]['nilaieskulb']; ?>"></td>
<td><input type="text" name="deskripsib[]" class="txtField" value="<?php echo $row[$i]['deskripsib']; ?>"></td>

<td><input type="text" name="ajaib[]" class="txtField" value="<?php echo $row[$i]['ajaib']; ?>"></td>
<td><input type="text" name="nilaieskulc[]" class="txtField" value="<?php echo $row[$i]['nilaieskulc']; ?>"></td>
<td><input type="text" name="deskripsic[]" class="txtField" value="<?php echo $row[$i]['deskripsic']; ?>"></td>

<td><input type="text" name="sakit[]" class="txtField" value="<?php echo $row[$i]['sakit']; ?>"></td>
<td><input type="text" name="izin[]" class="txtField" value="<?php echo $row[$i]['izin']; ?>"></td>
<td><input type="text" name="alfa[]" class="txtField" value="<?php echo $row[$i]['alfa']; ?>"></td>

</tr>

<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>
