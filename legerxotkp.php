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
    transform: translate(550%,50%);
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
<?php
require_once "db.php";
$result = mysqli_query($conn, "SELECT * FROM xotkp");
?>
<html>
<head>
<title>Users List</title>
<script language="javascript" src="js/usersxotkp.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="tc.png">
<link rel="stylesheet" type="text/css" href="css/input.css">
</head>

<div class="main">
    <h1>LEGER X-OTKP</h1>
    <div class="btn-group">
    <a class="button" href=cetaklegerxotkp.php>Print Leger</a>
    <a class="button" href=importexcel/importxotkp.php>Insert Murid</a>
  <a class="button" href=logout.php>LOGOUT</a>
</div>
</div>
<br><br><br><br><br><br><br>
<body>
<form name="frmUser" method="post" action="">
<center>
<table border=3 width=100% style="margin-top:-5px">  
<tr>
<td colspan=2 align=center><img src=tc.png width=150px></td>
<td align=center colspan=3>YAYASAN BUDHA TZU CHI WIYATA<br>SMK CINTA KASIH TZU CHI<br>Jl. Kamal Raya Outer Ring Road No.20, Cengkareng - Jakarta Barat<br>Telpon 021-54397565, fax. 021-54397573</td>
</tr>
<tr>
<td width=1PX>ALL<input type="checkbox" name="allbox" value="check" onclick="checkAll(0);" /></td>
<td>Nama</td>
<td>NIS</td>
<td>Tahun</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="xotkp[]" value="<?php echo $row["id"]; ?>" ></td>
<td><?php echo $row["nama"]; ?></td>
<td><?php echo $row["nis"]; ?></td>
<td><?php echo $row["tahun"]; ?></td>
<td><?php echo" <a href='cetakxotkp.php?nis=".$row['nis']."'> Cetak </a>"?></td>
    
</tr>
<?php
$i++;
}
?>

</table>
</form>
<br>
<input type="button" class=button name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" class=button name="delete" value="Delete"  onClick="setDeleteAction();" />
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
<script type="text/javascript"> 
//check all checkbox
function checkAll(form){
	for (var i=0;i<document.forms[form].elements.length;i++)
	{
		var e=document.forms[form].elements[i];
		if ((e.name !='allbox') && (e.type=='checkbox'))
		{
			e.checked=document.forms[form].allbox.checked;
		}
	}
}
</script>
</body></html>
