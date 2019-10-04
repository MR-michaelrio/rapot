<?php
require( 'koneksi.php' );
 
if( !isset( $_POST['nama'] ) )
{
    header('location:inputxiakl.php');
    exit();
}
 
$nama  = $_POST['nama'];
$nik  = $_POST['nik'];
$tahun = $_POST['tahun'];
$agamap  = $_POST['agamap'];
$agamapp = $_POST['agamapp'];
$agamak = $_POST['agamak'];
$agamakk = $_POST['agamakk'];
$pknp  = $_POST['pknp'];
$pknpp  = $_POST['pknpp'];
$pknk  = $_POST['pknk'];
$pknkk  = $_POST['pknkk'];
$bindop  = $_POST['bindop'];
$bindopp  = $_POST['bindopp'];
$bindok  = $_POST['bindokk'];
$bindokk  = $_POST['bindokk'];
$mtkp  = $_POST['mtkp'];
$mtkpp  = $_POST['mtkpp'];
$mtkk  = $_POST['mtkk'];
$mtkkk  = $_POST['mtkkk'];
$sjrp  = $_POST['sjrp'];
$sjrpp  = $_POST['sjrpp'];
$sjrk  = $_POST['sjrk'];
$sjrkk  = $_POST['sjrkk'];
$bingp  = $_POST['bingp'];
$bingpp  = $_POST['bingpp'];
$bingk  = $_POST['bingk'];
$bingkk  = $_POST['bingkk'];
$sbdp  = $_POST['sbdp'];
$sbdpp  = $_POST['sbdpp'];
$sbdk  = $_POST['sbdk'];
$sbdkk  = $_POST['sbdkk'];
$orp  = $_POST['orp'];
$orpp  = $_POST['orpp'];
$ork  = $_POST['ork'];
$orkk  = $_POST['orkk'];
$mandap  = $_POST['mandap'];
$mandapp  = $_POST['mandapp'];
$mandak  = $_POST['mandak'];
$mandakk  = $_POST['mandakk'];
$bhump  = $_POST['bhump'];
$bhumpp  = $_POST['bhumpp'];
$bhumk  = $_POST['bhumk'];
$bhumkk  = $_POST['bhumkk'];
$simdigp  = $_POST['simdigp'];
$simdigpp  = $_POST['simdigpp'];
$simdigk  = $_POST['simdigk'];
$simdigkk  = $_POST['simdigkk'];
$fisikap  = $_POST['fisikap'];
$fisikapp  = $_POST['fisikapp'];
$fisikak  = $_POST['fisikak'];
$fisikakk  = $_POST['fisikakk'];
$kimiap  = $_POST['kimiap'];
$kimiapp  = $_POST['kimiapp'];
$kimiak  = $_POST['kimiak'];
$kimiakk  = $_POST['kimiakk'];
$sistekomp  = $_POST['sistekomp'];
$sistekompp  = $_POST['sistekompp'];
$sistekomk  = $_POST['sistekomk'];
$sistekomkk  = $_POST['sistekomkk'];
$komjardasp  = $_POST['komjardasp'];
$komjardaspp  = $_POST['komjardaspp'];
$komjardask  = $_POST['komjardask'];
$komjardaskk  = $_POST['komjardaskk'];
$pemrogramanp  = $_POST['pemrogramanp'];
$pemrogramanpp  = $_POST['pemrogramanpp'];
$pemrogramank  = $_POST['pemrogramank'];
$pemrogramankk  = $_POST['pemrogramankk'];
$desgrafp  = $_POST['desgrafp'];
$desgrafpp  = $_POST['desgrafpp'];
$desgrafk  = $_POST['desgrafk'];
$desgrafkk  = $_POST['desgrafkk'];
$eskula = $_POST['eskula'];
$nilaieskula = $_POST['nilaieskula'];
$deskripsia = $_POST['deskripsia'];
$eskulb = $_POST['eskulb'];
$nilaieskulb = $_POST['nilaieskulb'];
$deskripsib = $_POST['deskripsib'];
$eskulc = $_POST['eskulc'];
$nilaieskulc = $_POST['nilaieskulc'];
$deskripsic = $_POST['deskripsic'];
$sakit = $_POST['sakit'];
$izin = $_POST['izin'];
$alfa = $_POST['alfa'];
$semester  = $_POST['semester'];

$count = count($nama);
 
$sql   = "INSERT INTO xiakl (nama,nik,tahun,agamap,agamapp,agamak,agamakk,pknp,pknpp,pknk,pknkk,bindop,bindopp,bindok,bindokk,mtkp,mtkpp,mtkk,mtkkk,sjrp,sjrpp,sjrk,sjrkk,bingp
,bingpp,bingk,bingkk,sbdp,sbdpp,sbdk,sbdkk,orp,orpp,ork,orkk,mandap,mandapp,mandak,mandakk,bhump,bhumpp,bhumk,bhumkk,simdigp,simdigpp,simdigk,simdigkk,fisikap,fisikapp
,fisikak,fisikakk,kimiap,kimiapp,kimiak,kimiakk,sistekomp,sistekompp,sistekomk,sistekomkk,komjardasp,komjardaspp,komjardask,komjardaskk,pemrogramanp,pemrogramanpp
,pemrogramank,pemrogramankk,desgrafp,desgrafpp,desgrafk,desgrafkk,eskula,nilaieskula,deskripsia,eskulb,nilaieskulb,deskripsib,eskulc,nilaieskulc,deskripsic,sakit,izin,alfa,semester) VALUES ";
 
for( $i=0; $i < $count; $i++ )
{

    $sql .= "('{$nama[$i]}','{$nik[$i]}','{$tahun[$i]}'
    ,'{$agamap[$i]}','{$agamapp[$i]}','{$agamak[$i]}','{$agamakk[$i]}'
    ,'{$pknp[$i]}','{$pknpp[$i]}','{$pknk[$i]}','{$pknkk[$i]}'
    ,'{$bindop[$i]}','{$bindopp[$i]}','{$bindok[$i]}','{$bindokk[$i]}'
    ,'{$mtkp[$i]}','{$mtkpp[$i]}','{$mtkk[$i]}','{$mtkkk[$i]}'
    ,'{$sjrp[$i]}','{$sjrpp[$i]}','{$sjrk[$i]}','{$sjrkk[$i]}'
    ,'{$bingp[$i]}','{$bingpp[$i]}','{$bingk[$i]}','{$bingkk[$i]}'
    ,'{$sbdp[$i]}','{$sbdpp[$i]}','{$sbdk[$i]}','{$sbdkk[$i]}'
    ,'{$orp[$i]}','{$orpp[$i]}','{$ork[$i]}','{$orkk[$i]}'
    ,'{$mandap[$i]}','{$mandapp[$i]}','{$mandak[$i]}','{$mandakk[$i]}'
    ,'{$bhump[$i]}','{$bhumpp[$i]}','{$bhumk[$i]}','{$bhumkk[$i]}'
    ,'{$simdigp[$i]}','{$simdigpp[$i]}','{$simdigk[$i]}','{$simdigkk[$i]}'
    ,'{$fisikap[$i]}','{$fisikapp[$i]}','{$fisikak[$i]}','{$fisikakk[$i]}'
    ,'{$kimiap[$i]}','{$kimiapp[$i]}','{$kimiak[$i]}','{$kimiakk[$i]}'
    ,'{$sistekomp[$i]}','{$sistekompp[$i]}','{$sistekomk[$i]}','{$sistekomkk[$i]}'
    ,'{$komjardasp[$i]}','{$komjardaspp[$i]}','{$komjardask[$i]}','{$komjardaskk[$i]}'
    ,'{$pemrogramanp[$i]}','{$pemrogramanpp[$i]}','{$pemrogramank[$i]}','{$pemrogramankk[$i]}'
    ,'{$desgrafp[$i]}','{$desgrafpp[$i]}','{$desgrafk[$i]}','{$desgrafkk[$i]}'
    ,'{$eskula[$i]}','{$nilaieskula[$i]}','{$deskripsia[$i]}'
    ,'{$eskulb[$i]}','{$nilaieskulb[$i]}','{$deskripsib[$i]}'
    ,'{$eskulc[$i]}','{$nilaieskulc[$i]}','{$deskripsic[$i]}'
    ,'{$sakit[$i]}','{$izin[$i]}','{$alfa[$i]}','{$semester[$i]}')";
    $sql .= ",";
}
 
$sql = rtrim($sql,",");
 
$insert = $koneksi->query($sql);
 
if( !$insert )
{
    echo "gagal insert : ".$koneksi->error;
}else{
    header("Location:inputxiakl.php");

}

?>
