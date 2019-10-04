<?php 
if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["nama"]);

for($i=0;$i<$usersCount;$i++) {
mysqli_query($conn, "UPDATE xrpl set

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

, fisikap='" . $_POST["fisikap"][$i] . "'
, fisikak='" . $_POST["fisikak"][$i] . "'

, kimiap='" . $_POST["kimiap"][$i] . "'
, kimiak='" . $_POST["kimiak"][$i] . "'

, sistekomp='" . $_POST["sistekomp"][$i] . "'
, sistekomk='" . $_POST["sistekomk"][$i] . "'

, komjardasp='" . $_POST["komjardasp"][$i] . "'
, komjardask='" . $_POST["komjardask"][$i] . "'

, pemrogramanp='" . $_POST["pemrogramanp"][$i] . "'
, pemrogramank='" . $_POST["pemrogramank"][$i] . "'

, desgrafp='" . $_POST["desgrafp"][$i] . "'
, desgrafk='" . $_POST["desgrafk"][$i] . "'

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
header("Location:legerxrpl.php");
}
?>