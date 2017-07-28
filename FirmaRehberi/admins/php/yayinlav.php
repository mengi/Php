<?php 
include('config.php');
$id = $_GET['gelen'];
echo $id;
$result = mysql_query( "UPDATE `firma` SET durum = 1 where firmaid = '$id'");
if($result){
	header('Location:firmalar.php');
}else{
header('Location:yayinla.php');
}
?>