<?php
include("koneksi.php");
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$kls=$_POST['kls'];
$thn=$_POST['thn'];
$bdg=$_POST['bdg'];
$pgm=$_POST['pgm'];
$kmp=$_POST['kmp'];


$agamap=$_POST['agamap'];
$agamak=$_POST['agamak'];

$pknp=$_POST['pknp'];
$pknk=$_POST['pknk'];
$pknkk=$_POST['pknkk'];

$bip=$_POST['bip'];
$bik=$_POST['bik'];
$bipp=$_POST['bipp'];
$bikk=$_POST['bikk'];

$mtp=$_POST['mtp'];
$mtk=$_POST['mtk'];
$mtpp=$_POST['mtpp'];
$mtkk=$_POST['mtkk'];

$sip=$_POST['sip'];
$sipp=$_POST['sipp'];
$sik=$_POST['sik'];
$sikk=$_POST['sikk'];

$bingp=$_POST['bingp'];
$bingpp=$_POST['bingpp'];
$bingk=$_POST['bingk'];
$bingkk=$_POST['bingkk'];

$sbdp=$_POST['sbdp'];
$sbdpp=$_POST['sbdpp'];
$sbdk=$_POST['sbdk'];
$sbdkk=$_POST['sbdkk'];

$orp=$_POST['orp'];
$orpp=$_POST['orpp'];
$ork=$_POST['ork'];
$orkk=$_POST['orkk'];

$mandap=$_POST['mandap'];
$mandapp=$_POST['mandapp'];
$mandak=$_POST['mandak'];
$mandakk=$_POST['mandakk'];

$hump=$_POST['hump'];
$humpp=$_POST['humpp'];
$humk=$_POST['humk'];
$humkk=$_POST['humkk'];

$skp=$_POST['skp'];
$skpp=$_POST['skpp'];
$skk=$_POST['skk'];
$skkk=$_POST['skkk'];

$fsp=$_POST['fsp'];
$fspp=$_POST['fspp'];
$fsk=$_POST['fsk'];
$fskk=$_POST['fskk'];

$kap=$_POST['kap'];
$kapp=$_POST['kapp'];
$kak=$_POST['kak'];
$kakk=$_POST['kakk'];

$ssp=$_POST['ssp'];
$sspp=$_POST['sspp'];
$ssk=$_POST['ssk'];
$sskk=$_POST['sskk'];

$kmdasp=$_POST['kmdasp'];
$kmdaspp=$_POST['kmdaspp'];
$kmdask=$_POST['kmdask'];
$kmdaskk=$_POST['kmdaskk'];

$pmdp=$_POST['pmdp'];
$pmdpp=$_POST['pmdpp'];
$pmdk=$_POST['pmdk'];
$pmdkk=$_POST['pmdkk'];

$ddgp=$_POST['ddgp'];
$ddgpp=$_POST['ddgpp'];
$ddgk=$_POST['ddgk'];
$ddgkk=$_POST['ddgkk'];

$ka=$_POST['ka'];
$kb=$_POST['kb'];
$kc=$_POST['kc'];
$kba=$_POST['kba'];
$kbb=$_POST['kbb'];
$kbc=$_POST['kbc'];
$ca=$_POST['ca'];
$cb=$_POST['cb'];
$cc=$_POST['cc'];
$sakit=$_POST['sakit'];
$izin=$_POST['izin'];
$alpha=$_POST['alpha'];

//selesai//

if($kls=="A"){
    $kls="X / I (Satu)";
 
}
else if($kls=="B"){
    $kls="X / II (Dua)";
  
}
else if($kls=="C"){
    $kls="XI / I (Satu)";
    
}
else if($kls=="D"){
    $kls="XI / II (Dua)";
  
}
else if($kls=="E"){
    $kls="XII / I (Satu)";
    
}
else if($kls=="F"){
    $kls="XII / II (Satu)";
    
}



if($bdg=="AKL"){
    $bdg="Akuntansi dan Keuangan";
 
}
else if($bdg=="ADP"){
    $bdg="Administrasi dan Perkantoran";
  
}
else if($bdg=="TKK"){
    $bdg="Teknologi dan Komunikasi";
    
}

if($pgm=="AKJ"){
    $pgm="Akuntansi Keuangan dan Pajak";
 
}
else if($pgm=="ADJ"){
    $pgm="Administrasi dan Perkantoran";
  
}
else if($pgm=="TKI"){
    $pgm="Teknik Teknologi dan Informatika";
    
}

if($pgm=="AK"){
    $pgm="Akuntansi";
 
}
else if($pgm=="AP"){
    $pgm="Administrasi dan Perkantoran";
  
}
else if($pgm=="RPL"){
    $pgm="Rekayasa Perangkat Lunak";
    
}
if($pgm=="akun"){
    $pgm="Akuntansi";
 
}
else if($pgm=="adm"){
    $pgm="Arsip";
  
}
else if($pgm=="prg"){
    $pgm="Program Dasar";
    
}

if($agamap>94){
        $agamapp="A";
    }
elseif($agamap>84){
        $agamapp="B";
    }
elseif($agamap<84){
    $agamapp="C";
}
elseif($agamap<78){
    $agamapp="D";
}
if($agamak>94){
    $agamakk="A";
}
elseif($agamak>84){
    $agamakk="B";
}
elseif($agamak<84){
$agamakk="C";
}
elseif($agamak<78){
$agamakk="D";
}

if($pknp>94){
    $pknpp="A";
}
elseif($pknp>84){
    $pknpp="B";
}
elseif($pknp<84){
$pknpp="C";
}
elseif($pknp<78){
$pknpp="D";
}
if($pknk>94){
    $pknkk="A";
}
elseif($pknk>84){
    $pknkk="B";
}
elseif($pknk<84){
$pknkk="C";
}
elseif($pknk<78){
$pknkk="D";
}

if($bip>94){
    $bipp="A";
}
elseif($bip>84){
    $bipp="B";
}
elseif($bip<84){
$bipp="C";
}
elseif($bip<78){
$bipp="D";
}
if($bik>94){
    $bikk="A";
}
elseif($bik>84){
    $bikk="B";
}
elseif($bik<84){
$bikk="C";
}
elseif($bik<78){
$bikk="D";
}

if($mtp>94){
    $mtpp="A";
}
elseif($mtp>84){
    $mtpp="B";
}
elseif($mtp<84){
$mtpp="C";
}
elseif($mtp<78){
$mtpp="D";
}
if($mtk>94){
    $mtkk="A";
}
elseif($mtk>84){
    $mtkk="B";
}
elseif($mtk<84){
$mtkk="C";
}
elseif($mtk<78){
$mtkk="D";
}

if($sip>94){
    $sipp="A";
}
elseif($sip>84){
    $sipp="B";
}
elseif($sip<84){
$sipp="C";
}
elseif($sip<78){
$sipp="D";
}
if($sik>94){
    $sikk="A";
}
elseif($sik>84){
    $sikk="B";
}
elseif($sik<84){
$sikk="C";
}
elseif($sik<78){
$sikk="D";
}

if($bingp>94){
    $bingpp="A";
}
elseif($bingp>84){
    $bingpp="B";
}
elseif($bingp<84){
$bingpp="C";
}
elseif($bingp<78){
$bingpp="D";
}
if($bingk>94){
    $bingkk="A";
}
elseif($bingk>84){
    $bingkk="B";
}
elseif($bingk<84){
$bingkk="C";
}
elseif($bingk<78){
$bingkk="D";
}

if($sbdp>94){
    $sbdpp="A";
}
elseif($sbdp>84){
    $sbdpp="B";
}
elseif($sbdgp<84){
$sbdpp="C";
}
elseif($sbdgp<78){
$sbdpp="D";
}
if($sbdk>94){
    $sbdkk="A";
}
elseif($sbdk>84){
    $sbdkk="B";
}
elseif($sbdk<84){
$sbdkk="C";
}
elseif($sbdk<78){
$sbdkk="D";
}

if($orp>94){
    $orpp="A";
}
elseif($orp>84){
    $orpp="B";
}
elseif($orp<84){
$orpp="C";
}
elseif($orp<78){
$orpp="D";
}
if($ork>94){
    $orkk="A";
}
elseif($ork>84){
    $orkk="B";
}
elseif($ork<84){
$orkk="C";
}
elseif($ork<78){
$orkk="D";
}

if($mandap>94){
    $mandapp="A";
}
elseif($mandap>84){
    $mandapp="B";
}
elseif($mandap<84){
$mandapp="C";
}
elseif($mandap<78){
$mandapp="D";
}
if($mandak>94){
    $mandakk="A";
}
elseif($mandak>84){
    $mandakk="B";
}
elseif($mandak<84){
$mandakk="C";
}
elseif($mandak<78){
$mandakk="D";
}

if($hump>94){
    $humpp="A";
}
elseif($hump>84){
    $humpp="B";
}
elseif($hump<84){
$humpp="C";
}
elseif($hump<78){
$humpp="D";
}
if($humk>94){
    $humkk="A";
}
elseif($humk>84){
    $humkk="B";
}
elseif($humk<84){
$humkk="C";
}
elseif($humk<78){
$humkk="D";
}

if($skp>94){
    $skpp="A";
}
elseif($skp>84){
    $skpp="B";
}
elseif($skp<84){
$skpp="C";
}
elseif($skp<78){
$skpp="D";
}
if($skk>94){
    $skkk="A";
}
elseif($skk>84){
    $skkk="B";
}
elseif($skk<84){
$skkk="C";
}
elseif($skk<78){
$skkk="D";
}

if($fsp>94){
    $fspp="A";
}
elseif($fsp>84){
    $fspp="B";
}
elseif($fsp<84){
$fspp="C";
}
elseif($fsp<78){
$fspp="D";
}
if($fsk>94){
    $fskk="A";
}
elseif($fsk>84){
    $fskk="B";
}
elseif($fsk<84){
$fskk="C";
}
elseif($fsk<78){
$fskk="D";
}

if($kap>94){
    $kapp="A";
}
elseif($kap>84){
    $kapp="B";
}
elseif($kap<84){
$kapp="C";
}
elseif($kap<78){
$kapp="D";
}
if($k>94){
    $kk="A";
}
elseif($kak>84){
    $kakk="B";
}
elseif($kak<84){
$kakk="C";
}
elseif($kak<78){
$kakk="D";
}

if($ssp>94){
    $sspp="A";
}
elseif($ssp>84){
    $sspp="B";
}
elseif($ssp<84){
$sspp="C";
}
elseif($ssp<78){
$sspp="D";
}
if($ssk>94){
    $sskk="A";
}
elseif($ssk>84){
    $sskk="B";
}
elseif($ssk<84){
$sskk="C";
}
elseif($ssk<78){
$sskk="D";
}


if($kmdasp>94){
    $kmdaspp="A";
}
elseif($kmdasp>84){
    $kmdaspp="B";
}
elseif($kmdasp<84){
$kmdaspp="C";
}
elseif($kmdasp<78){
$kmdaspp="D";
}
if($kmdask>94){
    $kmdaskk="A";
}
elseif($kmdask>84){
    $kmdaskk="B";
}
elseif($kmdask<84){
$kmdaskk="C";
}
elseif($kmdask<78){
$kmdaskk="D";
}

if($pmdp>94){
    $pmdpp="A";
}
elseif($pmdp>84){
    $pmdpp="B";
}
elseif($pmdp<84){
$pmdpp="C";
}
elseif($pmdp<78){
$pmdpp="D";
}
if($pmdk>94){
    $pmdkk="A";
}
elseif($pmdk>84){
    $pmdkk="B";
}
elseif($pmdk<84){
$pmdkk="C";
}
elseif($pmdk<78){
$pmdkk="D";
}

if($ddgp>94){
    $ddgpp="A";
}
elseif($ddgp>84){
    $ddgpp="B";
}
elseif($ddgp<84){
$ddgpp="C";
}
elseif($ddgp<78){
$ddgpp="D";
}
if($ddgk>94){
    $ddgkk="A";
}
elseif($ddgk>84){
    $ddgkk="B";
}
elseif($ddgk<84){
$ddgkk="C";
}
elseif($ddgk<78){
$ddgkk="D";
}
$b=mysqli_query($koneksi,"INSERT INTO rapot (nama,nik,kls,thn,bdg,pgm,kmp,agamap,agamak,agamapp,agamakk,pknp,pknpp,pknk,pknkk,bip,bik,
bipp,bikk,mtp,mtk,mtpp,mtkk,sip,sipp,sik,sikk,bingp,bingpp,bingk,bingkk,sbdp,sbdpp,sbdk,sbdkk,orp,orpp,ork,orkk,mandap,mandapp,mandak,mandakk,hump,humpp,humk,humkk,
skp,skpp,skk,skkk,fsp,fspp,fsk,fskk,kap,kapp,kak,kakk,ssp,sspp,ssk,sskk,kmdasp,kmdaspp,kmdask,kmdaskk,pmdp,pmdpp,pmdk,pmdkk,ddgp,ddgpp,ddgk,ddgkk,ka,kb,kc,kba,kbb,kbc,ca,cb,cc,sakit,izin,alpha)
value('$nama','$nik','$kls','$thn','$bdg','$pgm','$kmp','$agamap','$agamak','$agamapp','$agamakk','$pknp','$pknpp','$pknk','$pknkk',
'$bip','$bik','$bipp','$bikk','$mtp','$mtk','$mtpp','$mtkk','$sip','$sipp','$sik','$sikk','$bingp','$bingpp','$bingk','$bingkk','$sbdp',
'$sbdpp','$sbdk','$sbdkk','$orp','$orpp','$ork','$orkk','$mandap','$mandapp','$mandak','$mandakk','$hump','$humpp','$humk','$humkk','$skp','$skpp','$skk','$skkk','$fsp','$fspp','$fsk','$fskk',
'$kap','$kapp','$kak','$kakk','$ssp','$sspp','$ssk','$sskk','$kmdasp','$kmdaspp','$kmdask','$kmdaskk','$pmdp','$pmdpp','$pmdk','$pmdkk','$ddgp','$ddgpp','$ddgk','$ddgkk','$ka','$kb','$kc','$kba','$kbb','$kbc',
'$ca','$cb','$cc','$sakit','$izin','$alpha')");

if($b){
    header("Location:liat.php");

}

?>