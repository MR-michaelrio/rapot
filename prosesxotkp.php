<?php 
if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["nama"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($conn, "UPDATE xotkp set
  nama='" . $_POST["nama"][$i] . "'
, nis='" . $_POST["nis"][$i] . "'
, semester='" . $_POST["semester"][$i] . "'


, agamap='" . $_POST["agamap"][$i] . "'
, agamak='" . $_POST["agamak"][$i] . "'


, pknp='" . $_POST["pknp"][$i] . "'
, pknk='" . $_POST["pknk"][$i] . "'

, bindop='" . $_POST["bindop"][$i] . "'
, bindok='" . $_POST["bindok"][$i] . "'

, mtkp='" . $_POST["mtkp"][$i] . "'
, mtkk='" . $_POST["mtkk"][$i] . "'

, sjrp='" . $_POST["sjrp"][$i] . "'
, sjrk='" . $_POST["sjrk"][$i] . "'

, bingp='" . $_POST["bingp"][$i] . "'
, bingk='" . $_POST["bingk"][$i] . "'

, sbdp='" . $_POST["sbdp"][$i] . "'
, sbdk='" . $_POST["sbdk"][$i] . "'

, orp='" . $_POST["orp"][$i] . "'
, ork='" . $_POST["ork"][$i] . "'

, mandap='" . $_POST["mandap"][$i] . "'
, mandak='" . $_POST["mandak"][$i] . "'

, bhump='" . $_POST["bhump"][$i] . "'
, bhumk='" . $_POST["bhumk"][$i] . "'

, simdigp='" . $_POST["simdigp"][$i] . "'
, simdigk='" . $_POST["simdigk"][$i] . "'

, ekonomip='" . $_POST["ekonomip"][$i] . "'
, ekonomik='" . $_POST["ekonomik"][$i] . "'

, admp='" . $_POST["admp"][$i] . "'
, admk='" . $_POST["admk"][$i] . "'

, ipap='" . $_POST["ipap"][$i] . "'
, ipak='" . $_POST["ipak"][$i] . "'

, teknologip='" . $_POST["teknologip"][$i] . "'
, teknologik='" . $_POST["teknologik"][$i] . "'

, korespop='" . $_POST["korespop"][$i] . "'
, korespok='" . $_POST["korespok"][$i] . "'

, arsipp='" . $_POST["arsipp"][$i] . "'
, arsipk='" . $_POST["arsipk"][$i] . "'

, eskula='" . $_POST["eskula"][$i] . "'
, nilaieskula='" . $_POST["nilaieskula"][$i] . "'
, deskripsia='" . $_POST["deskripsia"][$i] . "'

, eskulb='" . $_POST["eskulb"][$i] . "'
, nilaieskulb='" . $_POST["nilaieskulb"][$i] . "'
, deskripsib='" . $_POST["deskripsib"][$i] . "'

, ajaib='" . $_POST["ajaib"][$i] . "'
, nilaieskulc='" . $_POST["nilaieskulc"][$i] . "'
, deskripsic='" . $_POST["deskripsic"][$i] . "'

, sakit='" . $_POST["sakit"][$i] . "'
, izin='" . $_POST["izin"][$i] . "'
, alfa='" . $_POST["alfa"][$i] . "'


WHERE id='" . $_POST["id"][$i] . "'");
}
header("Location:legerxotkp.php");
}
?>