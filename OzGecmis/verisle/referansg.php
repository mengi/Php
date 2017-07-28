<?php
include '../include/gonder.php';
include("database.php");
$update = new database();

$id = $update->select("cvuser");
foreach ($id as $value) {
    if($username == $value['username']){
        $userid = $value['user_id'];
    }
}

if ($_POST['ref_ad'] != "") {
        $array = array(
            "ref_ad" => $_POST['ref_ad'],
            "ref_soyad"=> $_POST['ref_soyad'],
            "ref_kurumu" => $_POST['ref_kurumu'],
            "ref_unvan" => $_POST['ref_unvan'],
            "ref_tel" => $_POST['ref_tel']
         );
    $durum = $update->update("cvreferans", $userid, $array);
    if($durum){
        header('Location: http://localhost/cv/include/guncel.php');
    } else {
        echo 'olmadi';
    }
} else {
    header('Location: http://localhost/cv/include/guncel.php');
}

 