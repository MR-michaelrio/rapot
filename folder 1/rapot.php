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
    </style>
<head>
<link rel="stylesheet" href="css/updaterapot.css">
</head>
<?php
echo'
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
<form method=post action=proses.php>
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
<td colspan=2><input type=text name=nama></td>
</tr>

<tr>
<td>Nomor Induk</td>
<td width=1>:</td>
<td colspan=2><input type=text name=nik></td>
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
<td colspan=2><input type=text name=thn></td>
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
<td><input type=text name=agamap></td>
<td><input type=text name=agamak></td>
</tr>

<tr>
<td >Pendidikan Pancasila dan Kewarganegaraan</td>
<td width=1 >:</td>
<td><input type=text name=pknp></td>
<td><input type=text name=pknk></td>
</tr>

<tr>
<td >Bahasa Indonesia</td>
<td width=1 >:</td>
<td><input type=text name=bip></td>
<td><input type=text name=bik></td>
</tr>

<tr>
<td >Matematika</td>
<td width=1 >:</td>
<td><input type=text name=mtp></td>
<td><input type=text name=mtk></td>
</tr>

<tr>
<td >Sejarah Indonesia</td>
<td width=1 >:</td>
<td><input type=text name=sip></td>
<td><input type=text name=sik></td>
</tr>

<tr>
<td >Bahasa Inggris dan Bahasa Asing Lainnya</td>
<td width=1 >:</td>
<td><input type=text name=bingp></td>
<td><input type=text name=bingk></td>
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
<td><input type=text name=sbdp></td>
<td><input type=text name=sbdk></td>
</tr>

<tr>
<td >Pendidikan, Olahraga, dan Kesehatan</td>
<td width=1 >:</td>
<td><input type=text name=orp></td>
<td><input type=text name=ork></td>
</tr>

<tr>
<td >Bahasa Mandarin</td>
<td width=1 >:</td>
<td><input type=text name=mandap></td>
<td><input type=text name=mandak></td>
</tr>

<tr>
<td >Budaya Humanis</td>
<td width=1 >:</td>
<td><input type=text name=hump></td>
<td><input type=text name=humk></td>
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
<td><input type=text name=skp></td>
<td><input type=text name=skk></td>
</tr>

<tr>
<td >Fisika</td>
<td width=1 >:</td>
<td><input type=text name=fsp></td>
<td><input type=text name=fsk></td>
</tr>

<tr>
<td >Kimia</td>
<td width=1 >:</td>
<td><input type=text name=kap></td>
<td><input type=text name=kak></td>
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
<td><input type=text name=ssp></td>
<td><input type=text name=ssk></td>
</tr>

<tr>
<td >Komputer dan Jaringan Dasar</td>
<td width=1 >:</td>
<td><input type=text name=kmdasp></td>
<td><input type=text name=kmdask></td>
</tr>

<tr>
<td >Pemrograman Dasar</td>
<td width=1 >:</td>
<td><input type=text name=pmdp></td>
<td><input type=text name=pmdk></td>
</tr>

<tr>
<td >Dasar Desain Grafis</td>
<td width=1 >:</td>
<td><input type=text name=ddgp></td>
<td><input type=text name=ddgk></td>
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
<td><input type=text name=ka></td>
<td>:</td>
<td ><input type=text name=kb></td>
<td ><input type=text name=kc></td>
</tr>

<tr>
<td><input type=text name=kba></td>
<td>:</td>
<td ><input type=text name=kbb></td>
<td ><input type=text name=kbc></td>
</tr>

<tr>
<td><input type=text name=ca></td>
<td>:</td>
<td ><input type=text name=cb></td>
<td ><input type=text name=cc></td>
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
<td><input type=text name=sakit> hari</td>
</tr>

<tr>
<td>Izin</td>
<td>:</td>
<td><input type=text name=izin> hari</td>
</tr>

<tr>
<td>Tanpa Keterangan</td>
<td>:</td>
<td><input type=text name=alpha> hari</td>
</tr>

</table>
<input type=submit value=Proses > <input type=reset value=Batal>

</form>';
?>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
