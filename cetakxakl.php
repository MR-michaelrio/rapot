<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/cetakliat.css">
</head>
<body>
	<?php 
	include 'koneksi.php';
	?>


		<?php
		$nis = $_GET['nis'];
		$no = 0;
		$sql = mysqli_query($koneksi,"SELECT * FROM xakl WHERE nis = '$nis'");
		while($rows = mysqli_fetch_array($sql)){
			$no++;
			echo"
			<center>
			<table width=1000px border=0 class=wow>
<tr>
<td colspan=2 align=center><img src=tc.png width=180px></td>
<td align=center ><p style=margin-left:-20%;><b >YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI</b><br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</p></td>
</tr>
<tr>
<td colspan=3><img src=latar/garis.PNG width=1800px height=5px></td>
</tr>
<tr><td align=center colspan=3><b>LAPORAN HASIL BELAJAR TENGAH SEMESTER</b></td></tr>
</center>
			<table width=1000px class=wew>
			<tr>
			<br>
			<td width=140px height=1px>Nama Siswa</td>
			<td>&nbsp;:&nbsp;</td>
			<td width=310px>".$rows['nama']."</td>
			<td>Bidang Keahlian</td>
			<td>&nbsp;:&nbsp;</td>
			<td> Bisnis dan Manajemen</td>
			</tr>
			<tr>
			<td>Nomor Induk</td>
			<td>&nbsp;:&nbsp;</td>
			<td>".$rows['nis']."</td>
			<td>Program Keahlian</td>
			<td>&nbsp;:&nbsp;</td>
			<td> Akuntansi dan Keuangan</td>
			</tr>
			<tr>
			<td>Kelas/Semester</td>
			<td>&nbsp;:&nbsp;</td>
			<td>X-AKL / 1 (Satu)".$rows['semester']."</td>
			<td>Kompetensi Keahlian</td>
			<td>&nbsp;:&nbsp;</td>
			<td> Akuntansi dan Keuangan Lembaga</td>
			</tr>
			<tr>
			<td>Tahun Pelajaran</td>
			<td>&nbsp;:&nbsp;</td>
			<td>".$rows['tahun']."</td>
			</tr>
			</table>
			<br>
			<table border=2 width=1000px class=wow>
			<tr>
			<td rowspan=2 align=center><b>No</td>
			<Td rowspan=2 align=center><b>Mata Pelajaran</td>
			<td colspan=3 align=center><b>Pengetahuan</td>
			<td colspan=3 align=center><b>Keterampilan</td>
			</tr>
			<tr>
			<td align=center><b>KKM</b></td>
			<td align=center><b>Angka</b></td>
			<td align=center><b>Predikat</b></td>
			<td align=center><b>KKM</b></td>
			<td align=center><b>Angka</b></td>
		  <td align=center><b>Predikat</b></td>
			</tr>
			<tr>
			<td colspan=8><b>&nbsp;A. Muatan Nasional</b></td>
			</tr>
			<tr>
			<td align=center>1</td>
			<td >&nbsp;Pendidikan Agama dan Budi Pekerti</td>
			<td align=center>77</td>
			<td align=center>".$rows['agamap']."</td> 
			<td align=center>".$rows['agamapp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['agamak']."</td> 
			<td align=center>".$rows['agamakk']."</td>
			</tr>
		
			<tr>
			<td align=center>2</td>
			<td >&nbsp;Pendidikan Pancasila dan Kewarganegaraan</td>
			<td align=center>77</td>
			<td align=center>".$rows['pknp']."</td> 
			<td align=center>".$rows['pknpp']."</td>
		  
			<td align=center>77</td>
			<td align=center>".$rows['pknk']."</td> 
			<td align=center>".$rows['pknkk']."</td>
			</tr>
		
			<tr>
			<td align=center>3</td>
			<td>&nbsp;Bahasa Indonesia</td>
			<td align=center>77</td>
			<td align=center>".$rows['bindop']."</td> 
			<td align=center>".$rows['bindopp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['bindok']."</td> 
			<td align=center>".$rows['bindokk']."</td>
			</tr>
		
			<tr>
			<td align=center>4</td>
			<td>&nbsp;Matematika</td>
			<td align=center>77</td>
			<td align=center>".$rows['mtkp']."</td> 
			<td align=center>".$rows['mtkpp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['mtkk']."</td> 
			<td align=center>".$rows['mtkkk']."</td>
			</tr>
		
			<tr>
			<td align=center>5</td>
			<td>&nbsp;Sejarah Indonesia</td>
			<td align=center>77</td>
			<td align=center>".$rows['sjrp']."</td> 
			<td align=center>".$rows['sjrpp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['sjrk']."</td> 
			<td align=center>".$rows['sjrkk']."</td>
			</tr>
		
			<tr>
			<td align=center>6</td>
			<td>&nbsp;Bahasa Inggris dan Bahasa Asing Lainnya</td>
			<td align=center>77</td>
			<td align=center>".$rows['bingp']."</td> 
			<td align=center>".$rows['bingpp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['bingk']."</td> 
			<td align=center>".$rows['bingkk']."</td>
			</tr>
		
			<tr>
			<td colspan=8><b>&nbsp;B. Muatan Kewilayahan</td>
			</tr>
		
			<tr>
			<td align=center>1</td>
			<td >&nbsp;Seni Budaya</td>
			<td align=center>76</td>
			<td align=center>".$rows['sbdp']."</td> 
			<td align=center>".$rows['sbdpp']."</td>
		
			<td align=center>76</td>
			<td align=center>".$rows['sbdk']."</td> 
			<td align=center>".$rows['sbdkk']."</td>
			</tr>
		
			<tr>
			<td align=center>2</td>
			<td >&nbsp;Pendidikan Jasmani, Olah Raga,dan Kesehatan</td>
			<td align=center>77</td>
			<td align=center>".$rows['orp']."</td> 
			<td align=center>".$rows['orpp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['ork']."</td> 
			<td align=center>".$rows['orkk']."</td>
			</tr>
		
			<tr>
			<td align=center>3</td>
			<td >&nbsp;Bahasa Mandarin</td>
			<td align=center>75</td>
			<td align=center>".$rows['mandap']."</td> 
			<td align=center>".$rows['mandapp']."</td>
		
			<td align=center>75</td>
			<td align=center>".$rows['mandak']."</td> 
			<td align=center>".$rows['mandakk']."</td>
			</tr>
		   
			<tr>
			<td align=center>4</td>
			<td >&nbsp;Budaya Humanis</td>
			<td align=center>75</td>
			<td align=center>".$rows['bhump']."</td> 
			<td align=center>".$rows['bhumpp']."</td>
		
			<td align=center>75</td>
			<td align=center>".$rows['bhumk']."</td> 
			<td align=center>".$rows['bhumkk']."</td>
			</tr>
		
			<tr>
			<td colspan=8><b>&nbsp;C. Muatan Peminatan Kejuruan</b></td>
			</tr>
			<tr>
			<td colspan=8><b>&nbsp;C1. Dasar Bidang Keahlian</b></td>
			<tr>
			<td align=center>1</td>
			<td >&nbsp;Simulasi dan Komunikasi Digital</td>
			<td align=center>77</td>
			<td align=center>".$rows['simdigp']."</td> 
			<td align=center>".$rows['simdigpp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['simdigk']."</td> 
			<td align=center>".$rows['simdigkk']."</td>
			</tr>
		
			<tr>
			<td align=center>2</td>
			<td >&nbsp;Ekonomi Bisnis</td>
			<td align=center>78</td>
			<td align=center>".$rows['fisikap']."</td> 
			<td align=center>".$rows['fisikapp']."</td>
		
			<td align=center>78</td>
			<td align=center>".$rows['fisikak']."</td> 
			<td align=center>".$rows['fisikakk']."</td>
			</tr>
		
			<tr>
			<td align=center>3</td>
			<td >&nbsp;Administrasi Umum</td>
			<td align=center>78</td>
			<td align=center>".$rows['kimiap']."</td> 
			<td align=center>".$rows['kimiapp']."</td>
		
			<td align=center>78</td>
			<td align=center>".$rows['kimiak']."</td> 
			<td align=center>".$rows['kimiakk']."</td>
			</tr>

			<tr>
			<td align=center>4</td>
			<td >&nbsp;Ilmu Pengetahuan Alam</td>
			<td align=center>78</td>
			<td align=center>".$rows['ipap']."</td> 
			<td align=center>".$rows['ipapp']."</td>
		
			<td align=center>78</td>
			<td align=center>".$rows['ipak']."</td> 
			<td align=center>".$rows['ipakk']."</td>
			</tr>
		
		
			<tr>
			<td colspan=8><b>&nbsp;C2. Dasar Program Keahlian</b></td>
			</tr>
		
			<tr>
			<td align=center>1</td>
			<td >&nbsp;Etika Profesi</td>
			<td align=center>77</td>
			<td align=center>".$rows['komjardasp']."</td> 
			<td align=center>".$rows['komjardaspp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['komjardask']."</td> 
			<td align=center>".$rows['komjardaskk']."</td>
			</tr>
		
			<tr>
			<td align=center>2</td>
			<td >&nbsp;Aplikasi Pengolahan Angka / <i>Spreadsheet</i></td>
			<td align=center>77</td>
			<td align=center>".$rows['pemrogramanp']."</td> 
			<td align=center>".$rows['pemrogramanpp']."</td>
		
			<td align=center>77</td>
			<td align=center>".$rows['pemrogramank']."</td> 
			<td align=center>".$rows['pemrogramankk']."</td>
			</tr>
		
			<tr>
			<td align=center>3</td>
			<td >&nbsp;Akutansi Dasar</td>
			<td align=center>78</td>
			<td align=center>".$rows['pemrogramanp']."</td> 
			<td align=center>".$rows['pemrogramanpp']."</td>
		
			<td align=center>78</td>
			<td align=center>".$rows['pemrogramank']."</td> 
			<td align=center>".$rows['pemrogramankk']."</td>
			</tr>

			<tr>
			<td align=center>4</td>
			<td >&nbsp;Perbankan Dasar</td>
			<td align=center>78</td>
			<td align=center>".$rows['perbankanp']."</td> 
			<td align=center>".$rows['perbankanpp']."</td>
		
			<td align=center>78</td>
			<td align=center>".$rows['perbankank']."</td> 
			<td align=center>".$rows['perbankankk']."</td>
			</tr>
</table>

</center>


<br>
<table class=wow>
<tr>
<td colspan=4 ><b>Ketidak Hadiran</b></td>
</tr>
  <tr>
<td>Sakit</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td class=no>".$rows['sakit']."</td>
<td>&nbsp;hari</td>
</tr>

<tr>
<td>Izin</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td class=no>".$rows['izin']."</td>
<td>&nbsp;hari</td>
</tr>

<tr>
<td>Tanpa Keterangan</td>
<td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
<td class=no>".$rows['alfa']."&nbsp;&nbsp;</td>
<td>&nbsp;hari</td>
</tr>
</table>
<br><br>
<table class=wow1>
<tr>
<td>&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orang Tua / Wali</td>
</tr>
<tr>
<td><br><br><br>(......................................)</td>
</tr>
</table>
<table class=wali>
<tr >
<td>Jakarta, 5 Oktober 2019<br>&nbsp&nbsp;&nbsp;&nbsp;&nbsp;Wali Kelas X-AKL</td>
</tr>
<tr><td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Margaretta, S.Pd)</td></tr>
</table>
";
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>
<style>
.wow{
	font-size:20px;
	margin-top:-10px;
}
.wew{
	font-size:18px;
}
.nomor{
	width:35px;
}
.wow1{
	font-size:20px;
	margin-top:-10px;
}
.wali{
	font-size:20px;
	margin-top:-170px;
	margin-left: 760px;
}
</style>