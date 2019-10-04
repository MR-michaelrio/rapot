<html>
<head>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Cetak Leger XRPL.xls");
	?>
 
 <?php
require_once "db.php";
$result = mysqli_query($conn, "SELECT * FROM xrpl");
?>
<form name="frmUser" method="post" action="">
<center>
<table border=3 width=100% style="margin-top:-5px">  
<tr>
<td align=center colspan=80>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI<br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>
<tr>
<td rowspan=4 width=10%>No</td>
<td rowspan=4>Nama</td>
<td rowspan=4>NIS</td>
<td colspan=80 align=center>Nilai Pelajaran</td>
</tr>
<tr>
<td colspan=4 align=center>Agama</td>
<td colspan=4 align=center>PKN</td>
<td colspan=4 align=center>Bahasa Indonesia</td>
<td colspan=4 align=center>Matematika</td>
<td colspan=4 align=center>Sejarah</td>
<td colspan=4 align=center>Bahasa Inggris</td>
<td colspan=4 align=center>SBD</td>
<td colspan=4 align=center>Penjas</td>
<td colspan=4 align=center>Bahasa Mandarin</td>
<td colspan=4 align=center>Budaya Humanis</td>
<td colspan=4 align=center>Simkomdig</td>
<td colspan=4 align=center>Fisika</td>
<td colspan=4 align=center>Kimia</td>
<td colspan=4 align=center>Sistekom</td>
<td colspan=4 align=center>Komjardas</td>
<td colspan=4 align=center>Pemrograman Dasar</td>
<td colspan=4 align=center>Desain Grafis</td>
<td colspan=3 align=center rowspan=2>Ketidak Hadiran</td>
</tr>
<tr>
<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>

<td colspan=2>PENGETAHUAN</td>
<td colspan=2>KETERAMPILAN</td>
</tr>
<tr>
<td width=10px>Nilai</td>
<td>Predikat</td>
<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

<td>Nilai</td>
<td>Predikat</td>

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
	$i=0;
while($row = mysqli_fetch_array($result)) {

$i++;
echo"
<tr>
<td>".$i."</td>"
?>
<td><?php echo $row ["nama"]?></td>
<td><?php echo $row ["nis"]?></td>
<td><?php echo $row ["agamap"]?></td>
<td><?php echo $row ["agamapp"]?></td>
<td><?php echo $row ["agamak"]?></td>
<td><?php echo $row ["agamakk"]?></td>

<td><?php echo $row ["pknp"]?></td>
<td><?php echo $row ["pknpp"]?></td>
<td><?php echo $row ["pknk"]?></td>
<td><?php echo $row ["pknkk"]?></td>

<td><?php echo $row ["bindop"]?></td>
<td><?php echo $row ["bindopp"]?></td>
<td><?php echo $row ["bindok"]?></td>
<td><?php echo $row ["bindokk"]?></td> 

<td><?php echo $row ["mtkp"]?></td>
<td><?php echo $row ["mtkpp"]?></td>
<td><?php echo $row ["mtkk"]?></td>
<td><?php echo $row ["mtkkk"]?></td>

<td><?php echo $row ["sjrp"]?></td>
<td><?php echo $row ["sjrpp"]?></td>
<td><?php echo $row ["sjrk"]?></td>
<td><?php echo $row ["sjrkk"]?></td>

<td><?php echo $row ["bingp"]?></td>
<td><?php echo $row ["bingpp"]?></td>
<td><?php echo $row ["bingk"]?></td>
<td><?php echo $row ["bingkk"]?></td>

<td><?php echo $row ["sbdp"]?></td>
<td><?php echo $row ["sbdpp"]?></td>
<td><?php echo $row ["sbdk"]?></td>
<td><?php echo $row ["sbdkk"]?></td>

<td><?php echo $row ["orp"]?></td>
<td><?php echo $row ["orpp"]?></td>
<td><?php echo $row ["ork"]?></td>
<td><?php echo $row ["orkk"]?></td>

<td><?php echo $row ["mandap"]?></td>
<td><?php echo $row ["mandapp"]?></td>
<td><?php echo $row ["mandak"]?></td>
<td><?php echo $row ["mandakk"]?></td>

<td><?php echo $row ["bhump"]?></td>
<td><?php echo $row ["bhumpp"]?></td>
<td><?php echo $row ["bhumk"]?></td>
<td><?php echo $row ["bhumkk"]?></td>

<td><?php echo $row ["simdigp"]?></td>
<td><?php echo $row ["simdigpp"]?></td>
<td><?php echo $row ["simdigk"]?></td>
<td><?php echo $row ["simdigkk"]?></td>

<td><?php echo $row ["fisikap"]?></td>
<td><?php echo $row ["fisikapp"]?></td>
<td><?php echo $row ["fisikak"]?></td>
<td><?php echo $row ["fisikakk"]?></td>

<td><?php echo $row ["kimiap"]?></td>
<td><?php echo $row ["kimiapp"]?></td>
<td><?php echo $row ["kimiak"]?></td>
<td><?php echo $row ["kimiakk"]?></td>

<td><?php echo $row ["sistekomp"]?></td>
<td><?php echo $row ["sistekompp"]?></td>
<td><?php echo $row ["sistekomk"]?></td>
<td><?php echo $row ["sistekomkk"]?></td>

<td><?php echo $row ["komjardasp"]?></td>
<td><?php echo $row ["komjardaspp"]?></td>
<td><?php echo $row ["komjardask"]?></td>
<td><?php echo $row ["komjardaskk"]?></td>

<td><?php echo $row ["pemrogramanp"]?></td>
<td><?php echo $row ["pemrogramanpp"]?></td>
<td><?php echo $row ["pemrogramank"]?></td>
<td><?php echo $row ["pemrogramankk"]?></td>

<td><?php echo $row ["desgrafp"]?></td>
<td><?php echo $row ["desgrafpp"]?></td>
<td><?php echo $row ["desgrafk"]?></td>
<td><?php echo $row ["desgrafkk"]?></td>

<td><?php echo $row ["sakit"]?></td>
<td><?php echo $row ["izin"]?></td>
<td><?php echo $row ["alfa"]?></td>
</tr>
<?php
}
?>

</table>
</form>
</body>
</html>

<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Cetak Leger XRPL.xls");
?>
