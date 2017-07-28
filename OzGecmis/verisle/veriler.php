<?php
include '../include/gonder.php';
include("database.php");
$hepsi = new database();
/*user id al*/
$id = $hepsi->select("cvuser");
foreach ($id as $value) {
    if($username == $value['username']){
        $userid = $value['user_id'];
    }
}
/*Kişisel Başlangıç*/
$row = $hepsi->where("cvkisiselb", $userid);
foreach ($row as $value) {
    $ad = $value['ad'];
    $soyad = $value['soyad'];
    $mail = $value['email'];
    $gsm = $value['gsm'];
    $tel = $value['tel'];
}

/*Eğitim*/
$egitim = $hepsi->where("cvegitim", $userid);
foreach ($egitim as $value) {
    $lisansu = $value['lisansu'];
    $lisans = $value['lisans'];
    $onlisans = $value['onlisans'];
    $yabancidil = $value['yabancidil'];
    $beceri = $value['beceri'];
    $odul = $value['oduller'];
}

/*Deneyim*/
$deneyim = $hepsi->where("cvdeneyim", $userid);
foreach ($deneyim as $value) {
    $program = $value['program'];
    $os = $value['os'];
    $egitimd = $value['egitim'];
    $dergi = $value['dergi'];
    $ilgi = $value['ilgi'];
}
/*Kişisel*/
$kisisel = $hepsi->where("cvkisisel", $userid);
foreach ($kisisel as $value) {
    $dogum_tarihi = $value['dogumtar'];
    $dogum_yeri = $value['dogumyeri'];
    $secim01 = $value['secim01'];
    $secim02 = $value['secim02'];
    $secim03 = $value['secim03'];
    $secim04 = $value['secim04'];
    $kulup = $value['kulup'];
}
/*Referanslar*/
$referans = $hepsi->where("cvreferans", $userid);
foreach ($referans as $value) {
    $ref_ad = $value['ref_ad'];
    $ref_soyad = $value['ref_soyad'];
    $ref_kurum = $value['ref_kurumu'];
    $ref_unvan = $value['ref_unvan'];
    $ref_tel = $value['ref_tel'];
}
