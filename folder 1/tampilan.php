
<?php
include("koneksi.php");
echo"<center>";
$a=mysqli_query($koneksi,"SELECT * FROM rapot");
$b=mysqli_num_rows($a);
 
while ($rows=mysqli_fetch_array($a)){
  echo '<center>
<table border=0 width=1000px>
<tr>
<td colspan=2 align=center><img src=tc.png width=100px></td>
<td align=center class=cktc><b>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI</b><br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>
 
<tr>
<td colspan=3 align=center><br><b>LAPORAN HASIL BELAJAR MID SEMESTER</b></td>
</tr>

</table>
';
    echo"<table width=1000px>
    <tr>
    <br>
    <td>Nama Siswa</td>
    <td>:</td>
    <td>".$rows['nama']."</td>
    <td>Bidang Keahlian</td>
    <td>:</td>
    <td>".$rows['bdg']."</td>
    </tr>
    <tr>
    <td>Nomor Induk</td>
    <td>:</td>
    <td>".$rows['nik']."</td>
    <td>Program Keahlian</td>
    <td>:</td>
    <td>".$rows['pgm']."</td>
    </tr>
    <tr>
    <td>Kelas/Semester</td>
    <td>:</td>
    <td>".$rows['kls']."</td>
    <td>Kompentensi Keahlian</td>
    <td>:</td>
    <td>".$rows['bdg']."</td>
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
    <td align=center>".$rows['bip']."</td> 
    <td align=center>".$rows['bipp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['bik']."</td> 
    <td align=center>".$rows['bikk']."</td>
    </tr>

    <tr>
    <td align=center>4</td>
    <td>Matematika</td>
    <td align=center>75</td>
    <td align=center>".$rows['mtp']."</td> 
    <td align=center>".$rows['mtpp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['mtk']."</td> 
    <td align=center>".$rows['mtkk']."</td>
    </tr>

    <tr>
    <td align=center>5</td>
    <td>Sejarah Indonesia</td>
    <td align=center>75</td>
    <td align=center>".$rows['sip']."</td> 
    <td align=center>".$rows['sipp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['sik']."</td> 
    <td align=center>".$rows['sikk']."</td>
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
    <td align=center>".$rows['hump']."</td> 
    <td align=center>".$rows['humpp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['humk']."</td> 
    <td align=center>".$rows['humkk']."</td>
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
    <td align=center>".$rows['skp']."</td> 
    <td align=center>".$rows['skpp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['skk']."</td> 
    <td align=center>".$rows['skkk']."</td>
    </tr>

    <tr>
    <td align=center>2</td>
    <td >Fisika</td>
    <td align=center>75</td>
    <td align=center>".$rows['fsp']."</td> 
    <td align=center>".$rows['fspp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['fsk']."</td> 
    <td align=center>".$rows['fskk']."</td>
    </tr>

    <tr>
    <td align=center>3</td>
    <td >Kimia</td>
    <td align=center>75</td>
    <td align=center>".$rows['kap']."</td> 
    <td align=center>".$rows['kapp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['kak']."</td> 
    <td align=center>".$rows['kakk']."</td>
    </tr>


    <tr>
    <td colspan=8><b>C2. Dasar Program Keahlian</b></td>
    </tr>

    <tr>
    <td align=center>1</td>
    <td >Sistem Komputer</td>
    <td align=center>75</td>
    <td align=center>".$rows['ssp']."</td> 
    <td align=center>".$rows['sspp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['ssk']."</td> 
    <td align=center>".$rows['sskk']."</td>
    </tr>

    <tr>
    <td align=center>2</td>
    <td >Komputer Jaringan Dasar</td>
    <td align=center>75</td>
    <td align=center>".$rows['kmdasp']."</td> 
    <td align=center>".$rows['kmdaspp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['kmdask']."</td> 
    <td align=center>".$rows['kmdaskk']."</td>
    </tr>

    <tr>
    <td align=center>3</td>
    <td >Pemrograman Dasar</td>
    <td align=center>75</td>
    <td align=center>".$rows['pmdp']."</td> 
    <td align=center>".$rows['pmdpp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['pmdk']."</td> 
    <td align=center>".$rows['pmdkk']."</td>
    </tr>

    <tr>
    <td align=center>4</td>
    <td >Desain Grafis</td>
    <td align=center>75</td>
    <td align=center>".$rows['ddgp']."</td> 
    <td align=center>".$rows['ddgpp']."</td>

    <td align=center>75</td>
    <td align=center>".$rows['ddgk']."</td> 
    <td align=center>".$rows['ddgkk']."</td>
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
    <td  class=hu align=left>".$rows['ka']."</td>
    <td align=center>".$rows['kb']."</td>
    <td align=center>".$rows['kc']."</td>
    </tr>
    <td align=center>2</td>
    <td align=left>".$rows['kba']."</td>
    <td align=center>".$rows['kbb']."</td>
    <td align=center>".$rows['kbc']."</td>
    </tr>
    <td align=center>3</td>
    <td align=left >".$rows['ca']."</td>
    <td align=center>".$rows['cb']."</td>
    <td align=center>".$rows['cc']."</td>
    </tr>
    </table>
    </center>
    </center>

    <br>
    <table class=wow>
    <tr>
    <td colspan=4 ><b>Ketidak Hadiran</b></td>
    </tr>
    <tr><td colspan=4><hr color=gray size=1 width=500></td></tr>
    <tr>
    <td>Sakit</td>
    <td>:</td>
    <td class=no>".$rows['sakit']."</td>
    <td>hari</td>
    </tr>
    
    <tr>
    <td>Izin</td>
    <td>:</td>
    <td class=no>".$rows['izin']."</td>
    <td>hari</td>
    </tr>
    
    <tr>
    <td>Tanpa Keterangan</td>
    <td>:</td>
    <td class=no>".$rows['alpha']."</td>
    <td>hari</td>
    </tr>
    
    </table>
    <tr>
    <td>
    <br><br><br><br><br><br><br><br>
    <hr color=black size=5px>
    </td>
    </tr>
    <table class=ha>
    </table>
    ";
}


?>


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
}
.cktc{
  padding-right:150px;
}
.no{
 width:35px;
}
</style>



