<html>
<head>
	<title>Halaman WaliKelas </title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/liat.css">
    <link rel="icon" type="image/png" href="tc.png">
</head>
</html>
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
.cktc{
    margin-left:90px;
}
.no{
 width:35px;
}
.table{
    width:1050px;

}
</style>

<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['search'])){
		$search = $_POST['search'];
		$query = $conn->query("SELECT * FROM `xiakl` WHERE (`nama` LIKE '%".$search."%') OR (`nik` LIKE '%".$search."%') ORDER BY `nama` ASC");
		$rows = $query->num_rows;
		
		if($rows > 0){
			while($rows = $query->fetch_array()){
                echo"
               
                <table>
                <tr>
                <br>
                <td>Nama Siswa</td>
                <td>:</td>
                <td>".$rows['nama']."
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</td>
                <td>Bidang Keahlian</td>
                <td>: </td>
                <td> Teknologi dan Komunikasi</td>
                </tr>
                <tr>
                <td>Nomor Induk</td>
                <td>:</td>
                <td>".$rows['nik']."</td>
                <td>Program Keahlian</td>
                <td>: </td>
                <td> Teknik Teknologi dan Informatika</td>
                </tr>
                <tr>
                <td>Kelas/Semester</td>
                <td>:</td>
                <td>X-RPL / ".$rows['semester']."</td>
                <td>Kompentensi Keahlian</td>
                <td>: &nbsp;</td>
                <td> Rekayasa Perangkat Lunak</td>
                </tr>
                <tr>
                <td>Tahun Pelajaran</td>
                <td>:</td>
                <td>".$rows['thn']."</td>
                </tr>
                </table>
                <table border=2 width=1000px>
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
                <td colspan=8><b>A. Muatan Nasional</b></td>
                </tr>
                <tr>
                <td align=center>1</td>
                <td >Pendidikan Agama dan Budi Pekerti</td>
                <td align=center>75</td>
                <td align=center>".$rows['agamap']."</td> 
                <td align=center>".$rows['agamapp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['agamak']."</td> 
                <td align=center>".$rows['agamakk']."</td>
                </tr>
            
                <tr>
                <td align=center>2</td>
                <td >Pendidikan Pancasila dan Kewarganegaraan</td>
                <td align=center>75</td>
                <td align=center>".$rows['pknp']."</td> 
                <td align=center>".$rows['pknpp']."</td>
              
                <td align=center>75</td>
                <td align=center>".$rows['pknk']."</td> 
                <td align=center>".$rows['pknkk']."</td>
                </tr>
            
                <tr>
                <td align=center>3</td>
                <td>Bahasa Indonesia</td>
                <td align=center>75</td>
                <td align=center>".$rows['bindop']."</td> 
                <td align=center>".$rows['bindopp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['bindok']."</td> 
                <td align=center>".$rows['bindokk']."</td>
                </tr>
            
                <tr>
                <td align=center>4</td>
                <td>Matematika</td>
                <td align=center>75</td>
                <td align=center>".$rows['mtkp']."</td> 
                <td align=center>".$rows['mtkpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['mtkk']."</td> 
                <td align=center>".$rows['mtkkk']."</td>
                </tr>
            
                <tr>
                <td align=center>5</td>
                <td>Sejarah Indonesia</td>
                <td align=center>75</td>
                <td align=center>".$rows['sjrp']."</td> 
                <td align=center>".$rows['sjrpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['sjrk']."</td> 
                <td align=center>".$rows['sjrkk']."</td>
                </tr>
            
                <tr>
                <td align=center>6</td>
                <td>Bahasa Inggris dan Bahasa Asing Lainnya</td>
                <td align=center>75</td>
                <td align=center>".$rows['bingp']."</td> 
                <td align=center>".$rows['bingpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['bingk']."</td> 
                <td align=center>".$rows['bingkk']."</td>
                </tr>
            
                <tr>
                <td colspan=8><b>B. Muatan Kewilayahan</td>
                </tr>
            
                <tr>
                <td align=center>1</td>
                <td >Seni Budaya</td>
                <td align=center>75</td>
                <td align=center>".$rows['sbdp']."</td> 
                <td align=center>".$rows['sbdpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['sbdk']."</td> 
                <td align=center>".$rows['sbdkk']."</td>
                </tr>
            
                <tr>
                <td align=center>2</td>
                <td >Pendidikan Jasmani, Olah Raga,dan Kesehatan</td>
                <td align=center>75</td>
                <td align=center>".$rows['orp']."</td> 
                <td align=center>".$rows['orpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['ork']."</td> 
                <td align=center>".$rows['orkk']."</td>
                </tr>
            
                <tr>
                <td align=center>3</td>
                <td >Bahasa Mandarin (Mulok)</td>
                <td align=center>75</td>
                <td align=center>".$rows['mandap']."</td> 
                <td align=center>".$rows['mandapp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['mandak']."</td> 
                <td align=center>".$rows['mandakk']."</td>
                </tr>
               
                <tr>
                <td align=center>4</td>
                <td >Budaya Humanis (Mulok)</td>
                <td align=center>75</td>
                <td align=center>".$rows['bhump']."</td> 
                <td align=center>".$rows['bhumpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['bhumk']."</td> 
                <td align=center>".$rows['bhumkk']."</td>
                </tr>
            
                <tr>
                <td colspan=8><b>C. Muatab Permintaan Kejuruan</b></td>
                </tr>
                <tr>
                <td colspan=8><b>C1. Dasar Bidang Keahlian</b></td>
                <tr>
                <td align=center>1</td>
                <td >Simulasi dan Komunikasi Digital</td>
                <td align=center>75</td>
                <td align=center>".$rows['simdigp']."</td> 
                <td align=center>".$rows['simdigpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['simdigk']."</td> 
                <td align=center>".$rows['simdigkk']."</td>
                </tr>
            
                <tr>
                <td align=center>2</td>
                <td >Fisika</td>
                <td align=center>75</td>
                <td align=center>".$rows['fisikap']."</td> 
                <td align=center>".$rows['fisikapp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['fisikak']."</td> 
                <td align=center>".$rows['fisikakk']."</td>
                </tr>
            
                <tr>
                <td align=center>3</td>
                <td >Kimia</td>
                <td align=center>75</td>
                <td align=center>".$rows['kimiap']."</td> 
                <td align=center>".$rows['kimiapp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['kimiak']."</td> 
                <td align=center>".$rows['kimiakk']."</td>
                </tr>
            
            
                <tr>
                <td colspan=8><b>C2. Dasar Program Keahlian</b></td>
                </tr>
            
                <tr>
                <td align=center>1</td>
                <td >Sistem Komputer</td>
                <td align=center>75</td>
                <td align=center>".$rows['sistekomp']."</td> 
                <td align=center>".$rows['sistekompp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['sistekomk']."</td> 
                <td align=center>".$rows['sistekomkk']."</td>
                </tr>
            
                <tr>
                <td align=center>2</td>
                <td >Komputer Jaringan Dasar</td>
                <td align=center>75</td>
                <td align=center>".$rows['komjardasp']."</td> 
                <td align=center>".$rows['komjardaspp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['komjardask']."</td> 
                <td align=center>".$rows['komjardaskk']."</td>
                </tr>
            
                <tr>
                <td align=center>3</td>
                <td >Pemrograman Dasar</td>
                <td align=center>75</td>
                <td align=center>".$rows['pemrogramanp']."</td> 
                <td align=center>".$rows['pemrogramanpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['pemrogramank']."</td> 
                <td align=center>".$rows['pemrogramankk']."</td>
                </tr>
            
                <tr>
                <td align=center>4</td>
                <td >Desain Grafis</td>
                <td align=center>75</td>
                <td align=center>".$rows['desgrafp']."</td> 
                <td align=center>".$rows['desgrafpp']."</td>
            
                <td align=center>75</td>
                <td align=center>".$rows['desgrafk']."</td> 
                <td align=center>".$rows['desgrafkk']."</td>
                </tr>
    </table>
    <br>
    <table border=2 width=1000px class=hm>
    <tr>
    <td colspan=2><b>Kegiatan Ekstrakulikuler</b></td>
    <td align=center><b>Nilai</b></td>
    <td align=center><b>Deskripsi</b></td>
    </tr>
    <tr>
    <td class=no align=center>1</td>
    <td align=center>".$rows['eskula']."</td> 
    <td align=center>".$rows['nilaieskula']."</td>
    <td align=center>".$rows['deskripsia']."</td>
    </tr>
    <td align=center>2</td>
    <td align=left>".$rows['eskulb']."</td>
    <td align=center>".$rows['nilaieskulb']."</td> 
    <td align=center>".$rows['deskripsib']."</td>
    </tr>
    <td align=center>3</td>
    <td align=center>".$rows['eskulc']."</td> 
    <td align=center>".$rows['nilaieskulc']."</td>
    <td align=center>".$rows['deskripsic']."</td>
    </tr>
    </table>
    </center>


    <br>
    <table>
    <tr>
    <td colspan=4 ><b>Ketidak Hadiran</b></td>
    </tr>
      <tr>
    <td>Sakit</td>
    <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
    <td class=no>".$rows['sakit']."</td>
    <td>hari</td>
    </tr>
    
    <tr>
    <td>Izin</td>
    <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
    <td class=no>".$rows['izin']."</td>
    <td>hari</td>
    </tr>
    
    <tr>
    <td>Tanpa Keterangan</td>
    <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
    <td class=no>".$rows['alfa']."</td>
    <td>hari</td>
    </tr>
    </table>
 
    ";
			}
		}else{
			echo "
				<tr>
					<td colspan='5'><center>No Search Found!</center></td>
				</tr>
			";
		}
	}
?> 