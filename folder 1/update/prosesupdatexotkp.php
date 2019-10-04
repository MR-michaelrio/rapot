<?php
include ("koneksi.php");    
$id=$_GET['id'];
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$kls=$_POST['kls'];
$thn=$_POST['thn'];
$bdg=$_POST['bdg'];
$pgm=$_POST['pgm'];
$kmp=$_POST['kmp'];


$agamap=$_POST['agamap'];
$agamak=$_POST['agamak'];


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


$query = "UPDATE xotkp SET nama='$nama', nik='$nik', kls='$kls', thn='$thn', bdg='$bdg', pgm='$pgm', kmp='$kmp', agamap='$agamap'
, agamak='$agamak', ka='$ka', kb='$kb', kc='$kc', kba='$kba', kbb='$kbb'
, kbc='$kbc', ca='$ca', cb='$cb', cc='$cc', sakit='$sakit', izin='$izin', alpha='$alpha' WHERE nik='$id'" ;
    $test=mysqli_query($koneksi, $query);
if($query){
    header("location:updatetampilanxotkp.php");
}

  

?>