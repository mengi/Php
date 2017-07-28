<?php
include '../include/gonder.php';
include("database.php");
$nesne = new database();
$tablo_ad = "cvkisiselb";
$tabloname ="cvuser";

/*
echo $_POST['ad']."<br>";
echo $_POST['soyad']."<br>";
echo $_POST['email']."<br>";
echo $_POST['gsm']."<br>";
echo $_POST['tel']."<br>";
*/

$uret = "Armut";
$dosya_adi = $_FILES['file']['name'];
$sayi_uret = rand(0,5);
$sayi_tut = rand(1,10000);
$sayitut = (string) $sayi_tut;
$uzanti = substr($dosya_adi, -4,4);
$yeni_ad = (string)$uret.$sayitut.$uzanti;
$yeni_adi ="../fotos/".$yeni_ad;

mysql_query("set character set utf8");	
mysql_query("SET NAMES UTF8");

$euzanti = substr($_POST['email'], -10,10);
$huzanti = substr($_POST['email'], -12,12);
$truzanti = substr($_POST['email'], -3,3);


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
   header('Location: http://localhost/cv/include/egitim.php');
} else {
    if (($_POST['ad'] != "") and ($_POST['soyad'] != "") and ($_POST['email'] != "") and ($_POST['gsm'] != "")) {
        if(($euzanti == "@gmail.com") or ($huzanti == "@hotmail.com") or ($truzanti == ".tr")){
             $data = array(
                   "ad" => $_POST['ad'],
                   "soyad" => $_POST['soyad'],
                   "email" => $_POST['email'],
                   "gsm" => $_POST['gsm'],
                   "tel" => $_POST['tel'],
                   "resim" => $yeni_adi,
                   "user_id" => $user_id
                );
             
              move_uploaded_file($_FILES["file"]["tmp_name"],$yeni_adi);
              $sonuc = $nesne->insert($tablo_ad, $data);
               
              if($sonuc){
                  header('Location: http://localhost/cv/include/egitim.php');
              }  else {
                  header('Location: http://localhost/cv/include/kisiselb.php');
              }
          }
    } else {
        header('Location: http://localhost/cv/include/kisiselb.php');
    }
}
