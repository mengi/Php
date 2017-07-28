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

$deneyim = $update->where("cvdeneyim", $userid);
foreach ($deneyim as $value) {
    $programi = $value['program'];
    $osi = $value['os'];
    $egitimdi = $value['egitim'];
    $dergii = $value['dergi'];
    $ilgii = $value['ilgi'];
}

if($_POST['program'] != ""){
    $programi = $_POST['program'];
}

if ($_POST['os']) {
    $osi = $_POST['os'];
}

if($_POST['egitim'] != ""){
    $egitimdi = $_POST['egitim'];
}

if($_POST['dergi'] != ""){
    $dergii = $_POST['dergi'];
}

if($_POST['ilgi'] != ""){
    $ilgii = $_POST['ilgi'];
}

if($_POST['os'] != ""){
    $array = array(
        "program" => $programi,
        "os" => $osi,
        "egitim" => $egitimdi,
        "dergi" => $dergii,
        "ilgi" => $ilgii
    );
    $durum = $update->update("cvdeneyim", $userid, $array);
    if($durum){
        header('Location: http://localhost/cv/include/guncel.php');
    } else {
        echo 'olmadi';
    }
}  else {
    header('Location : http://localhost/cv/include/guncel.php');
}