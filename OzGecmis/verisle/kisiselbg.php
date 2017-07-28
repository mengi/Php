<?php
include '../include/gonder.php';
include("database.php");
$update = new database();
/*user id al*/
$id = $update->select("cvuser");
foreach ($id as $value) {
    if($username == $value['username']){
        $userid = $value['user_id'];
    }
}

$euzanti = substr($_POST['email'], -10,10);
$huzanti = substr($_POST['email'], -12,12);
$truzanti = substr($_POST['email'], -3,3);

if (($euzanti == '@gmail.com') or ($huzanti == 'hotmail.com') or ($truzanti == '.tr')) {
    $array = array(
        "ad" => $_POST['ad'],
        "soyad" => $_POST['soyad'],
        "email" => $_POST['email'],
        "gsm" => $_POST['gsm'],
        "tel" => $_POST['tel']
    );
    $durum = $update->update("cvkisiselb", $userid, $array);
    if($durum){
        header('Location: http://localhost/cv/include/guncel.php');
    } else {
        echo 'olmadi';
    }
} else {
    header('Location: http://localhost/cv/include/guncel.php');
}

 