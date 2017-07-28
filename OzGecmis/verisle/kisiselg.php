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

$row = $update->where("cvkisisel", $userid);

foreach ($row as $value) {
    $secim_b = $value['secim01'];
    $secim_i = $value['secim02'];
    $secim_u = $value['secim03'];
    $secim_d = $value['secim04'];
    $kulup = $value['kulup'];
}

if($_POST['secim01'] != ""){
    $secim_b = $_POST['secim01'];
}

if($_POST['secim02'] != ""){
    $secim_i = $_POST['secim02'];
}

if($_POST['secim03'] != ""){
    $secim_u = $_POST['secim03'];
}

if($_POST['secim04'] != ""){
    $secim_d = $_POST['secim04'];
}

if($_POST['kulup'] != "" ){
    $kulup = $_POST['kulup'];
}

if ($_POST['dogumtar'] != '') {
       $array = array(
           "dogumtar" => $_POST['dogumtar'],
           "dogumyeri" => $_POST['dogumyeri'],
           "secim01" => $secim_b,
           "secim02" => $secim_i,
           "secim03" => $secim_u,
           "secim04" => $secim_d,
           "kulup" => $kulup
       ); 
       
    $durum = $update->update("cvkisisel", $userid, $array);
    if($durum){
        header('Location: http://localhost/cv/include/guncel.php');
    } else {
        echo 'olmadi';
    }
} else {
    header('Location: http://localhost/cv/include/guncel.php');
}