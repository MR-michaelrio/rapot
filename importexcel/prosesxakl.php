<?php
include('koneksi.php');
require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 3;$i < count($sheetData);$i++)
	{
        $nama = $sheetData[$i]['1'];
        $nis = $sheetData[$i]['2'];
        $tahun = $sheetData[$i]['3'];
        $semester = $sheetData[$i]['4'];

        $agamap = $sheetData[$i]['5'];
        $agamapp = $sheetData[$i]['6'];
        $agamak = $sheetData[$i]['7'];
        $agamakk = $sheetData[$i]['8'];

        $pknp = $sheetData[$i]['9'];
        $pknpp = $sheetData[$i]['10'];
        $pknk = $sheetData[$i]['11'];
        $pknkk = $sheetData[$i]['12'];

        $bindop = $sheetData[$i]['13'];
        $bindopp = $sheetData[$i]['14'];
        $bindok = $sheetData[$i]['15'];
        $bindokk = $sheetData[$i]['16'];

        $mtkp = $sheetData[$i]['17'];
        $mtkpp = $sheetData[$i]['18'];
        $mtkk = $sheetData[$i]['19'];
        $mtkkk = $sheetData[$i]['20'];

        $sjrp = $sheetData[$i]['21'];
        $sjrpp = $sheetData[$i]['22'];
        $sjrk = $sheetData[$i]['23'];
        $sjrkk = $sheetData[$i]['24'];

        $bingp = $sheetData[$i]['25'];
        $bingpp = $sheetData[$i]['26'];
        $bingk = $sheetData[$i]['27'];
        $bingkk = $sheetData[$i]['28'];

        $sbdp = $sheetData[$i]['29'];
        $sbdpp = $sheetData[$i]['30'];
        $sbdk = $sheetData[$i]['31'];
        $sbdkk = $sheetData[$i]['32'];

        $orp = $sheetData[$i]['33'];
        $orpp = $sheetData[$i]['34'];
        $ork = $sheetData[$i]['35'];
        $orkk = $sheetData[$i]['36'];

        $mandap = $sheetData[$i]['37'];
        $mandapp = $sheetData[$i]['38'];
        $mandak = $sheetData[$i]['39'];
        $mandakk = $sheetData[$i]['40'];

        $bhump = $sheetData[$i]['41'];
        $bhumpp = $sheetData[$i]['42'];
        $bhumk = $sheetData[$i]['43'];
        $bhumkk = $sheetData[$i]['44'];

        $simdigp = $sheetData[$i]['45'];
        $simdigpp = $sheetData[$i]['46'];
        $simdigk = $sheetData[$i]['47'];
        $simdigkk = $sheetData[$i]['48'];

        $fisikap = $sheetData[$i]['49'];
        $fisikapp = $sheetData[$i]['50'];
        $fisikak = $sheetData[$i]['51'];
        $fisikakk = $sheetData[$i]['52'];

        $kimiap = $sheetData[$i]['53'];
        $kimiapp = $sheetData[$i]['54'];
        $kimiak = $sheetData[$i]['55'];
        $kimiakk = $sheetData[$i]['56'];

        $sistekomp = $sheetData[$i]['57'];
        $sistekompp = $sheetData[$i]['58'];
        $sistekomk = $sheetData[$i]['59'];
        $sistekomkk = $sheetData[$i]['60'];

        $komjardasp = $sheetData[$i]['61'];
        $komjardaspp = $sheetData[$i]['62'];
        $komjardask = $sheetData[$i]['63'];
        $komjardaskk = $sheetData[$i]['64'];

        $pemrogramanp = $sheetData[$i]['65'];
        $pemrogramanpp = $sheetData[$i]['66'];
        $pemrogramank = $sheetData[$i]['67'];
        $pemrogramankk = $sheetData[$i]['68'];

        $perbankanp = $sheetData[$i]['69'];
        $perbankanpp = $sheetData[$i]['70'];
        $perbankank = $sheetData[$i]['71'];
        $perbankankk = $sheetData[$i]['72'];

        mysqli_query($koneksi,"insert into xakl (id,nama,nis,tahun,semester,agamap,agamapp,agamak,agamakk,pknp,pknpp,pknk,pknkk, bindop, bindopp, bindok, bindokk, mtkp, mtkpp, mtkk, mtkkk, sjrp, sjrpp, sjrk, sjrkk, bingp, bingpp, bingk, bingkk, sbdp, sbdpp, sbdk, sbdkk, orp, orpp, ork, orkk, mandap, mandapp, mandak, mandakk, bhump, bhumpp, bhumk, bhumkk, simdigp, simdigpp, simdigk, simdigkk, fisikap, fisikapp, fisikak, fisikakk, kimiap, kimiapp, kimiak, kimiakk, sistekomp, sistekompp, sistekomk, sistekomkk, komjardasp, komjardaspp, komjardask, komjardaskk, pemrogramanp, pemrogramanpp, pemrogramank, pemrogramankk,perbankanp,perbankanpp,perbankank,perbankankk) values ('','$nama','$nis','$tahun','$semester','$agamap','$agamapp','$agamak','$agamakk','$pknp','$pknpp','$pknk','$pknkk','$bindop','$bindopp','$bindok','$bindokk','$mtkp','$mtkpp','$mtkk','$mtkkk','$sjrp','$sjrpp','$sjrk','$sjrkk','$bingp','$bingpp','$bingk','$bingkk','$sbdp','$sbdpp','$sbdk','$sbdkk','$orp','$orpp','$ork','$orkk','$mandap','$mandapp','$mandak','$mandakk','$bhump','$bhumpp','$bhumk','$bhumkk','$simdigp','$simdigpp','$simdigk','$simdigkk','$fisikap','$fisikapp','$fisikak','$fisikakk','$kimiap','$kimiapp','$kimiak','$kimiakk','$sistekomp','$sistekompp','$sistekomk','$sistekomkk','$komjardasp','$komjardaspp','$komjardask','$komjardaskk','$pemrogramanp','$pemrogramanpp','$pemrogramank','$pemrogramankk','$perbankanp','$perbankanpp','$perbankank','$perbankankk')");
    }
    header("Location: ../legerxakl.php"); 
}
?>