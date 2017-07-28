<?php
include '../include/gonder.php';
include("database.php");
$nesne = new database();
$tablo_ad = "cvkisisel";
$tabloname ="cvuser";


echo $_POST['dogumtar']."<br>";
echo $_POST['dogumyeri']."<br>";
echo $_POST['secim01']."<br>";
echo $_POST['secim02']."<br>";
echo $_POST['secim03']."<br>";
echo $_POST['secim04']."<br>";
echo $_POST['kulup']."<br>";
echo $_SESSION['name']."<br>";

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
    header('Location: http://localhost/cv/include/referans.php');
}  else {
    if (($_POST['dogumtar'] != "") and ($_POST['dogumyeri'] != "") and ($_POST['secim01'] != "Cinsiyet Seçiniz") and 
            ($_POST['secim02'] != "Medeni Hal") and ($_POST['secim03'] != "Askerlik Durumu") and ($_POST['secim04'] != "Ehliyet Sınıfı")){
       $data = array(
           "user_id" => $user_id,
           "dogumtar" => $_POST['dogumtar'],
           "dogumyeri" => $_POST['dogumyeri'],
           "secim01" => $_POST['secim01'],
           "secim02" => $_POST['secim02'],
           "secim03" => $_POST['secim03'],
           "secim04" => $_POST['secim04'],
           "kulup" => $_POST['kulup']
       ); 
       
       $sonuc=$nesne->insert($tablo_ad, $data);
       if($sonuc){
           header('Location: http://localhost/cv/include/referans.php');
       }  else {
           header('Location: http://localhost/cv/include/kisisel.php');
       }
    }  else {
        header('Location: http://localhost/cv/include/kisisel.php');
    }
}