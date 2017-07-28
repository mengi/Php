<?php

include '../include/gonder.php';
include("database.php");
$nesne = new database();
$tablo_ad = "cvegitim";
$tabloname ="cvuser";

/*
echo $_POST['lisansu']."<br>";
echo $_POST['lisans']."<br>";
echo $_POST['onlisans']."<br>";
echo $_POST['yabancidil']."<br>";
echo $_POST['beceri']."<br>";
echo $_POST['oduller']."<br>";
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

if ($durum) {
    header('Location: http://localhost/cv/include/deneyim.php');
}  else {
    if(($_POST['lisansu'] != "") and ($_POST['lisans'] != "") and ($_POST['onlisans'] != "")){
        $data = array(
            "user_id" => $user_id,
            "lisansu" => $_POST['lisansu'],
            "lisans" => $_POST['lisans'],
            "onlisans" => $_POST['onlisans'],
            "yabancidil" => $_POST['yabancidil'],
            "beceri" => $_POST['beceri'],
            "oduller" => $_POST['oduller']
        );
        $sonuc = $nesne->insert($tablo_ad, $data);
        if ($sonuc) {
            header('Location: http://localhost/cv/include/deneyim.php');
        }  else {
            header('Location: http://localhost/cv/include/egitim.php');
        }
        
    }else{
        header('Location: http://localhost/cv/include/egitim.php');
    }
}