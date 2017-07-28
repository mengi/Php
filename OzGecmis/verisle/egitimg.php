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

$row = $update->where("cvegitim", $userid);

foreach ($row as $value) {
    $yabancidili = $value['yabancidil'];
    $becerisi = $value['beceri'];
    $odulleri = $value['oduller'];
}

if ($_POST['yabancidil'] != "") {
    $yabancidili = $_POST['yabancidil'];
}

if($_POST['beceri'] != "") {
    $becerisi = $_POST['beceri'];
}

if ($_POST['oduller'] != "") {
    $odulleri = $_POST['oduller']; 
}



if ($_POST['lisansu'] != "") {
    $array = array(
        "lisansu" => $_POST['lisansu'],
        "lisans" => $_POST['lisans'],
        "onlisans" => $_POST['onlisans'],
        "yabancidil" => $yabancidili,
        "beceri" => $becerisi,
        "oduller" => $odulleri
    );
    $durum = $update->update("cvegitim", $userid, $array);
    if($durum){
        header('Location: http://localhost/cv/include/guncel.php');
    } else {
        echo 'olmadi';
    }
} else {
    header('Location: http://localhost/cv/include/guncel.php');
}

 