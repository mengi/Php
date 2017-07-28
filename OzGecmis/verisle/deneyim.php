<?php
include '../include/gonder.php';
include("database.php");
$nesne = new database();
$tablo_ad = "cvdeneyim";
$tabloname ="cvuser";

/*
echo $_POST['program']."<br>";
echo $_POST['os']."<br>";
echo $_POST['egitim']."<br>";
echo $_POST['dergi']."<br>";
echo $_POST['ilgi']."<br>";
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
    header('Location: http://localhost/cv/include/kisisel.php');
}  else {
    if(($_POST['program'] != "") and ($_POST['os'] != "")){
        $data = array(
            "user_id" => $user_id,
            "program" => $_POST['program'],
            "os" => $_POST['os'],
            "egitim" => $_POST['egitim'],
            "dergi" => $_POST['dergi'],
            "ilgi" => $_POST['ilgi']
        );
        $sonuc = $nesne->insert($tablo_ad, $data);
        if($sonuc){
            header('Location: http://localhost/cv/include/kisisel.php');
        }  else {
            header('Location: http://localhost/cv/include/deneyim.php');
        }
    }  else {
        header('Location: http://localhost/cv/include/deneyim.php');
    }
}