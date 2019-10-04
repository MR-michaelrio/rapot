<style>
body {
  font-family: "Lato", sans-serif;
  background: #aca5ac;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #8c878c;
  overflow-x: hidden;
  padding-top: 25px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-family: arial,sans-serif,helvetica;
  font-size: 20px;
  color: #f8ff00;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-bottom: 10px;
}

.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-family: arial,sans-serif,helvetica;
  font-size: 20px;
  color: #f8ff00;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-bottom: 10px;
  transition:0.5s;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  opacity:0.5;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}
/* Main content */  
.main {
  font-size: 20px; /* Increased text to enable scrolling */
  margin-left:-8px;
  width:97.5%;
  text-align: center;
  background: #8c878c;
  margin-top:-1.5%;
  border-right: 20px solid #fbff78;
  border-left: 20px solid #fbff78;
  position:fixed;
}
.footer{
    position:fixed;
    transform: translate(330%,50%);
}
.button {
  display: inline-block;
  border-radius: 0px;
  background-color:#008CBA;;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  text-decoration: none;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.btn-group .button {
  background-color: #8c878c; /* Green */
  border: none;
  color: #fbff78;
  width:8%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
 
}

.btn-group .button:hover {
 background-color:#4d4d4d;
}
</style>
<head>
<link rel="icon" type="image/png" href="tc.png">
<link rel="stylesheet" type="text/css" href="css/input.css">
</head>

<div class="main">
    <h1>LEGER XI-AKL</h1>
    <div class="btn-group">
    <button class="button">Print Leger</button>
    <button class="button">Print Nilai</button>
    <a class="button" href=logout.php>LOGOUT</a>
</div>
</div>
<br><br><br><br><br><br><br>
<form method=post action=prosesxiakl.php>
<center>
<table border=3 width=100% style="margin-left:-10px;margin-top:-5px">  
<tr>
<td colspan=2><input type="text" placeholder="Semester" name="semester[]"></td>
<td colspan=81><input type=text placeholder="Masukkan Tahun Ajaran" name="tahun[]"></td>
</tr>
<tr>
<td colspan=3 align=center><img src=tc.png width=100px></td>
<td align=center colspan=80>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI<br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>


<tr>
<td colspan=83><hr color=green size=5 width=100%></td>
</tr>
<tr>
<td rowspan=4>No</td>
<td rowspan=4>Nama</td>
<td rowspan=4>NIK</td>
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
<td colspan=9 align=center rowspan=2>Kegiatan Ekstrakulikule</td>
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
$no=0;
    for($i=0;$i<$_POST['angka'];$i++){
        $no++;
echo"
<tr>
<td>$no</td>";
?>
<td><input type=text name=nama[] size=16></td>
<td><input type=text name=nik[] size=8></td>
<td><input type=text name=agamap[] size=3></td>
<td><input type=text name=agamapp[] size=3></td>
<td><input type=text name=agamak[] size=3></td>
<td><input type=text name=agamakk[] size=3></td>

<td><input type=text name=pknp[] size=3></td>
<td><input type=text name=pknpp[] size=3></td>
<td><input type=text name=pknk[] size=3></td>
<td><input type=text name=pknkk[] size=3></td>

<td><input type=text name=bindop[] size=3></td>
<td><input type=text name=bindopp[] size=3></td>
<td><input type=text name=bindok[] size=3></td>
<td><input type=text name=bindokk[] size=3></td>

<td><input type=text name=mtkp[] size=3></td>
<td><input type=text name=mtkpp[] size=3></td>
<td><input type=text name=mtkk[] size=3></td>
<td><input type=text name=mtkkk[] size=3></td>

<td><input type=text name=sjrp[] size=3></td>
<td><input type=text name=sjrpp[] size=3></td>
<td><input type=text name=sjrk[] size=3></td>
<td><input type=text name=sjrkk[] size=3></td>

<td><input type=text name=bingp[] size=3></td>
<td><input type=text name=bingpp[] size=3></td>
<td><input type=text name=bingk[] size=3></td>
<td><input type=text name=bingkk[] size=3></td>

<td><input type=text name=sbdp[] size=3></td>
<td><input type=text name=sbdpp[] size=3></td>
<td><input type=text name=sbdk[] size=3></td>
<td><input type=text name=sbdkk[] size=3></td>

<td><input type=text name=orp[] size=3></td>
<td><input type=text name=orpp[] size=3></td>
<td><input type=text name=ork[] size=3></td>
<td><input type=text name=orkk[] size=3></td>

<td><input type=text name=mandap[] size=3></td>
<td><input type=text name=mandapp[] size=3></td>
<td><input type=text name=mandak[] size=3></td>
<td><input type=text name=mandakk[] size=3></td>

<td><input type=text name=bhump[] size=3></td>
<td><input type=text name=bhumpp[] size=3></td>
<td><input type=text name=bhumk[] size=3></td>
<td><input type=text name=bhumkk[] size=3></td>

<td><input type=text name=simdigp[] size=3></td>
<td><input type=text name=simdigpp[] size=3></td>
<td><input type=text name=simdigk[] size=3></td>
<td><input type=text name=simdigkk[] size=3></td>

<td><input type=text name=fisikap[] size=3></td>
<td><input type=text name=fisikapp[] size=3></td>
<td><input type=text name=fisikak[] size=3></td>
<td><input type=text name=fisikakk[] size=3></td>

<td><input type=text name=kimiap[] size=3></td>
<td><input type=text name=kimiapp[] size=3></td>
<td><input type=text name=kimiak[] size=3></td>
<td><input type=text name=kimiakk[] size=3></td>

<td><input type=text name=sistekomp[] size=3></td>
<td><input type=text name=sistekompp[] size=3></td>
<td><input type=text name=sistekomk[] size=3></td>
<td><input type=text name=sistekomkk[] size=3></td>

<td><input type=text name=komjardasp[] size=3></td>
<td><input type=text name=komjardaspp[] size=3></td>
<td><input type=text name=komjardask[] size=3></td>
<td><input type=text name=komjardaskk[] size=3></td>

<td><input type=text name=pemrogramanp[] size=3></td>
<td><input type=text name=pemrogramanpp[] size=3></td>
<td><input type=text name=pemrogramank[] size=3></td>
<td><input type=text name=pemrogramankk[] size=3></td>

<td><input type=text name=desgrafp[] size=3></td>
<td><input type=text name=desgrafpp[] size=3></td>
<td><input type=text name=desgrafk[] size=3></td>
<td><input type=text name=desgrafkk[] size=3></td>

<td><input type=text name=eskula[] size=3></td>
<td><input type=text name=nilaieskula[] size=3></td>
<td><input type=text name=deskripsia[] size=3></td>

<td><input type=text name=eskulb[] size=3></td>
<td><input type=text name=nilaieskulb[] size=3></td>
<td><input type=text name=deskripsib[] size=3></td>

<td><input type=text name=eskulc[] size=3></td>
<td><input type=text name=nilaieskulc[] size=3></td>
<td><input type=text name=deskripsic[] size=3></td>

<td><input type=text name=sakit[] size=3></td>
<td><input type=text name=izin[] size=3></td>
<td><input type=text name=alfa[] size=3></td>
</tr>
<?php
    }
?>
</table>
<input type=submit value=Proses > <input type=reset value=Batal>
</form>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
