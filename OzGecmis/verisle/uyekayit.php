<?php

include("database.php");
$nesne = new database();
$tablo_ad = "cvuser";
mysql_query("set character set utf8");	
mysql_query("SET NAMES UTF8");

$euzanti = substr($_POST['mail'], -10,10);
$huzanti = substr($_POST['mail'], -12,12);
$truzanti = substr($_POST['mail'], -3,3);

$sonuc = $nesne->select($tablo_ad);

$durum_bir = FALSE;
$durum_iki = FALSE;

foreach ($sonuc as $value) {
    if($value['mail'] == $_POST['mail']){
        $durum_bir = TRUE; 
    }elseif ($value['username'] == $_POST['username'] ) {
        $durum_iki = TRUE;
    }
}

if (($_POST['mail'] != "") and ($_POST['username'] != "") and ($_POST['adsoyad'] != "") 
        and ($_POST['sifre'] != "") and ($_POST['sifretk'] != "")){
    if (($euzanti == '@gmail.com') or ($huzanti == '@hotmail.com') or ($truzanti == '.tr')) {
        if (strlen($_POST['sifre'] ) < 5) {
            header('Location: http://localhost/cv/wrong/karakter.php');
        }  else {
            if ($_POST['sifre'] != $_POST['sifretk']) {
                 header('Location: http://localhost/cv/wrong/sifrewrong.php');
            }  else {
                if (($durum_bir) or ($durum_iki)) {
                    header('Location: http://localhost/cv/wrong/mailusername.php');
                }  else {
                    $data = array(
                        "mail" => $_POST['mail'],
                        "username" => $_POST['username'],
                        "adsoyad" => $_POST['adsoyad'],
                        "sifre" => $_POST['sifre'],
                        "sifretk" => $_POST['sifretk'],
                        "secim" => $_POST['secim']
                    );
                    
                    $durum = $nesne->insert($tablo_ad, $data);
                    
                    if ($durum) {
                        header('Location: http://localhost/cv/giris.php');
                    }  else {
                        header('Location: http://localhost/cv/uye.php');
                    }
                }
            }
        }    
    }  else {
         header('Location: http://localhost/cv/wrong/mailwrong.php');
    }
} else {
     header('Location: http://localhost/cv/uye.php');
}
