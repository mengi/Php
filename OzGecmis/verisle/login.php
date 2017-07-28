<?php

include("database.php");
/*session_start();*/

$nesne = new database();
$admins = "cvuser";

/*karar verilecek kısım */

$tablo_ad ="cvkisiselb";
$row = $nesne->select($tablo_ad);
$rows = $nesne->select($admins);

foreach ($rows as $value) {
    if($value['username'] == $_POST['name']){
        $id = $value['user_id'];
    }
}


$durum = 1;
foreach ($row as $value) {
   if($id == $value['user_id']){
       $durum=2;
   }
    
}

switch ($durum) {
      case 1:
          session_start();
          $deger_bir = $nesne->select($admins);
          foreach ($deger_bir as $value) {
              if($value['username'] == $_POST['name']){
                  if($value['sifre'] == $_POST['password']){
                      $_SESSION['name'] = $_POST['name'];
                      header('Location: http://localhost/cv/include/kisiselb.php');
                      break;
                  }
              }  else {
                  header('Location: http://localhost/cv/wrong/wrong.php');
              }
          }
        break;
      case 2:
          session_start();
          $deger_iki = $nesne->select($admins);
          foreach ($deger_iki as $value) {
              if($value['username'] == $_POST['name']){
                  if($value['sifre'] == $_POST['password']){
                      $_SESSION['name'] = $_POST['name'];
                      header('Location:  http://localhost/cv/include/guncel.php');
                      break;
                  }
              }  else {
                  header('Location: http://localhost/cv/wrong/wrong.php');
              }
          }
          
        break;

    default:
        echo 'HERZAMAN BURADAYIM';
        break;
}

?>