<?php
include ("koneksi.php");
$nik=$_GET['nik'];
$query="SELECT * FROM xakl WHERE nik='$nik'";
$hasil=mysqli_query($koneksi, $query);
$rows=mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/updaterapot.css">
</head>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="halaman_walikelas.php" class="w3-bar-item w3-button">Home</a>
  <a href="updatetampilan.php" class="w3-bar-item w3-button">Back</a>
  <a href="logout.php" class="w3-bar-item w3-button">LogOut</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
</div>
<form method=post action='prosesupdatexiakl.php?id=<?php echo $nik;?>'>
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
<td>Nama Siswa</td>
<td width=1>:</td> 
<td><input type="text" name="nama" value="<?php echo $rows['nama']; ?>"></td>
</tr>

<tr>
<td>Nomor Induk</td>
<td width=1>:</td>
<td><input type="text" name="nik" value="<?php echo $rows['nik']; ?>"></td>
</tr>

<tr>
<td>Kelas/Semester</td>
<td width=1>:</td>
<td colspan=2><select name=kls>
<option value=A>X / I (Satu)</option>
<option value=B>X / II (Dua)</option>
<option value=C>XI / I (Satu)</option>
<option value=D>XI / II (Dua)</option>
<option value=E>XII / I (Satu)</option>
<option value=F>XII / II (Dua)</option>
</select></td>
</tr>

<tr>
<td>Tahun Pelajaran</td>
<td width=1>:</td>
<td><input type="text" name="thn" value="<?php echo $rows['thn']; ?>"></td>
</tr>

<tr>
<td>Bidang Keahlian</td>
<td width=1>:</td>
<td colspan=2><select name=bdg>
<option value=AKL>Akutansi dan Keuangan</option>
<option value=ADP>Administrasi dan Perkantoran</option>
<option value=TKK>Teknologi dan Komunikasi</option>
</select></td>
</tr>

<tr>
<td>Program Keahlian</td>
<td width=1>:</td>
<td colspan=2><select name=pgm>
<option value=AKJ>Akutansi Keuangan dan Pajak</option>
<option value=ADJ>Administrasi dan Perkantoran</option>
<option value=TKI>Teknik Teknologi dan Informatika</option>
</select></td>
</tr>

<tr>
<td>Program Keahlian</td>
<td width=1>:</td>
<td colspan=2><select name=kmp>
<option value=AK>Akutansi</option>
<option value=AP>Administrasi dan Perkantoran</option>
<option value=RPL>Rekayasa Perangkat Lunak</option>
</select></td>
</tr>

<tr>
<td colspan=4 align=center><hr color=green width=1000px size=5</td>
</tr>

<tr>
<td colspan=4 align=center><br><b>Nilai Murid</td>
</tr>


<tr>
<td colspan=2><br><b>A. Muatan Nasional</b></td>
<td ><br><b>Pengetahuan</b></td>
<td ><br><b>Keterampilan</b></td>
</tr>
<tr>
<td colspan=4 align=center><hr color=green width=1000px size=5</td>
</tr>

<tr>
<td >Pendidikan Agama dan Budi Pekerti</td>
<td width=1 >:</td>
<td><input type="text" name="agamap" value="<?php echo $rows['agamap']; ?>"></td>
<td><input type="text" name="agamak" value="<?php echo $rows['agamak']; ?>"></td>
</tr>

<tr>
<td >Pendidikan Pancasila dan Kewarganegaraan</td>
<td width=1 >:</td>
<td><input type="text" name="pknp" value="<?php echo $rows['pknp']; ?>"></td>
<td><input type="text" name="pknk" value="<?php echo $rows['pknk']; ?>"></td>
</tr>

<tr>
<td >Bahasa Indonesia</td>
<td width=1 >:</td>
<td><input type="text" name="bip" value="<?php echo $rows['bip']; ?>"></td>
<td><input type="text" name="bik" value="<?php echo $rows['bik']; ?>"></td>
</tr>

<tr>
<td >Matematika</td>
<td width=1 >:</td>
<td><input type="text" name="mtp" value="<?php echo $rows['mtp']; ?>"></td>
<td><input type="text" name="mtk" value="<?php echo $rows['mtk']; ?>"></td>
</tr>

<tr>
<td >Sejarah Indonesia</td>
<td width=1 >:</td>
<td><input type="text" name="mtk" value="<?php echo $rows['mtk']; ?>"></td>
<td><input type="text" name="mtk" value="<?php echo $rows['mtk']; ?>"></td>
</tr>

<tr>
<td >Bahasa Inggris dan Bahasa Asing Lainnya</td>
<td width=1 >:</td>
<td><input type="text" name="mtk" value="<?php echo $rows['mtk']; ?>"></td>
<td><input type="text" name="mtk" value="<?php echo $rows['mtk']; ?>"></td>
</tr>

<tr>
<td colspan=2><br><b>B. Muatan Kewilayahan</b></td>
<td ><br><b>Pengetahuan</b></td>
<td ><br><b>Keterampilan</b></td>
</tr>
<tr>
<td colspan=4 align=center><hr color=green width=1000px size=5</td>
</tr>

<tr>
<td >Seni Budaya</td>
<td width=1 >:</td>
<td><input type="text" name="sbdp" value="<?php echo $rows['sbdp']; ?>"></td>
<td><input type="text" name="sbdk" value="<?php echo $rows['sbdk']; ?>"></td>
</tr>

<tr>
<td >Pendidikan, Olahraga, dan Kesehatan</td>
<td width=1 >:</td>
<td><input type="text" name="orp" value="<?php echo $rows['orp']; ?>"></td>
<td><input type="text" name="ork" value="<?php echo $rows['ork']; ?>"></td>
</tr>

<tr>
<td >Bahasa Mandarin</td>
<td width=1 >:</td>
<td><input type="text" name="mandap" value="<?php echo $rows['mandap']; ?>"></td>
<td><input type="text" name="mandak" value="<?php echo $rows['mandak']; ?>"></td>
</tr>

<tr>
<td >Budaya Humanis</td>
<td width=1 >:</td> 
<td><input type="text" name="hump" value="<?php echo $rows['hump']; ?>"></td>
<td><input type="text" name="humk" value="<?php echo $rows['humk']; ?>"></td>
</tr>

<tr>
<td><br><b>C. Muatab Permintaan Kejuruan</b></td>
</tr>
<tr>
<td colspan=2><b>C1. Dasar Bidang Keahlian</b></td>
<td ><br><b>Pengetahuan</b></td>
<td ><br><b>Keterampilan</b></td>
</tr>
<tr>
<td colspan=4 align=center><hr color=green width=1000px size=5</td>
</tr>

<tr>
<td >Simulasi dan Komunikasi Digital</td>
<td width=1 >:</td>
<td><input type="text" name="skp" value="<?php echo $rows['skp']; ?>"></td>
<td><input type="text" name="skk" value="<?php echo $rows['skk']; ?>"></td>
</tr>

<tr>
<td >Fisika</td>
<td width=1 >:</td>
<td><input type="text" name="fsp" value="<?php echo $rows['fsp']; ?>"></td>
<td><input type="text" name="fsk" value="<?php echo $rows['fsk']; ?>"></td>
</tr>

<tr>
<td >Kimia</td>
<td width=1 >:</td>
<td><input type="text" name="kap" value="<?php echo $rows['kap']; ?>"></td>
<td><input type="text" name="kak" value="<?php echo $rows['kak']; ?>"></td>
</tr>

<tr>
<td colspan=2><br><b>C2. Dasar Program Keahlian</b></td>
<td ><br><b>Pengetahuan</b></td>
<td ><br><b>Keterampilan</b></td>
</tr>
<tr>
<td colspan=4 align=center><hr color=green width=1000px size=5</td>
</tr>

<tr>
<td >Sistekom</td>
<td width=1 >:</td>
<td><input type="text" name="ssp" value="<?php echo $rows['ssp']; ?>"></td>
<td><input type="text" name="ssk" value="<?php echo $rows['ssk']; ?>"></td>
</tr>

<tr>
<td >Komputer dan Jaringan Dasar</td>
<td width=1 >:</td>
<td><input type="text" name="kmdasp" value="<?php echo $rows['kmdasp']; ?>"></td>
<td><input type="text" name="kmdask" value="<?php echo $rows['kmdask']; ?>"></td>
</tr>

<tr>
<td >Pemrograman Dasar</td>
<td width=1 >:</td>
<td><input type="text" name="pmdp" value="<?php echo $rows['pmdp']; ?>"></td>
<td><input type="text" name="pmdk" value="<?php echo $rows['pmdk']; ?>"></td>
</tr>

<tr>
<td >Dasar Desain Grafis</td>
<td width=1 >:</td>
<td><input type="text" name="ddgp" value="<?php echo $rows['ddgp']; ?>"></td>
<td><input type="text" name="ddgk" value="<?php echo $rows['ddgk']; ?>"></td>
</tr>

<tr>
<td colspan=2><br><b>Kegiatan Ekstrakurikuler</b></td>
<td ><br><b>Nilai</b></td>
<td ><br><b>Deskripsi</b></td>
</tr>
<tr>
<td colspan=4 align=center><hr color=green width=1000px size=5</td>
</tr>

<tr>
<td><input type="text" name="ka" value="<?php echo $rows['ka']; ?>"></td>
<td>:</td>
<td><input type="text" name="kb" value="<?php echo $rows['kb']; ?>"></td>
<td><input type="text" name="kc" value="<?php echo $rows['kc']; ?>"></td>
</tr>

<tr>
<td><input type="text" name="kba" value="<?php echo $rows['kba']; ?>"></td>
<td>:</td>
<td><input type="text" name="kbb" value="<?php echo $rows['kbb']; ?>"></td>
<td><input type="text" name="kbc" value="<?php echo $rows['kbc']; ?>"></td>
</tr>

<tr>
<td><input type="text" name="ca" value="<?php echo $rows['ca']; ?>"></td>
<td>:</td>
<td><input type="text" name="cb" value="<?php echo $rows['cb']; ?>"></td>
<td><input type="text" name="cc" value="<?php echo $rows['cc']; ?>"></td>
</tr>

<tr>
<td colspan=2><br><b>Ketidak Hadiran</b></td>
</tr>
<tr>
<td colspan=4 align=center><hr color=green width=1000px size=5</td>
</tr>

<tr>
<td>Sakit</td>
<td>:</td>
<td><input type="text" name="sakit" value="<?php echo $rows['sakit']; ?>">Hari</td>
</tr>

<tr>
<td>Izin</td>
<td>:</td>
<td><input type="text" name="izin" value="<?php echo $rows['izin']; ?>">Hari</td>
</tr>

<tr>
<td>Tanpa Keterangan</td>
<td>:</td>
<td><input type="text" name="alpha" value="<?php echo $rows['alpha']; ?>">Hari</td>
</tr>

</table>
<input type=submit value=Proses > <input type=reset value=Batal>

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