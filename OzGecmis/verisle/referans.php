<?php

include '../include/gonder.php';
include("database.php");
$nesne = new database();
$tablo_ad = "cvreferans";
$tabloname ="cvuser";

/*
echo $_POST['ref_ad']."<br>";
echo $_POST['ref_soyad']."<br>";
echo $_POST['ref_kurumu']."<br>";
echo $_POST['ref_unvan']."<br>";
echo $_POST['ref_tel']."<br>";
echo $_SESSION['name']."<br>";
*/

mysql_query("set character set utf8");	
mysql_query("SET NAMES UTF8");


$row = $nesne->select($tabloname);
foreach ($row as $value) {
    if($value['username'] == $_SESSION['name']){
        $user_id = $value['user_id'];
    }
}

$rows = $nesne->select($tablo_ad);
$durum = FALSE;
foreach ($rows as $value) {
    if($value['user_id'] == $user_id){
        $durum = TRUE;
    }
}

if($durum){
    header('Location: http://localhost/cv/include/guncel.php');
}else{
    if(($_POST['ref_ad'] != "") and ($_POST['ref_soyad'] != "") and ($_POST['ref_kurumu'] != "")
            and ($_POST['ref_unvan'] != "") and ($_POST['ref_tel'] != "")){
        $data = array(
            "user_id" => $user_id,
            "ref_ad" => $_POST['ref_ad'],
            "ref_soyad"=> $_POST['ref_soyad'],
            "ref_kurumu" => $_POST['ref_kurumu'],
            "ref_unvan" => $_POST['ref_unvan'],
            "ref_tel" => $_POST['ref_tel']
         );
        $sonuc = $nesne->insert($tablo_ad, $data);
        if ($sonuc) {
            header('Location: http://localhost/cv/include/guncel.php');
        }  else {
            header('Location: http://localhost/cv/include/referans.php');
        }
        
    }  else {
        header('Location: http://localhost/cv/include/referans.php');
    }
}