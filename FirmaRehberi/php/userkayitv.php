<?php
	session_start();
	
	include("config.php");
	$eposta = $_POST["eposta"];
	$yeposta = $eposta;
	$yeeposta = $eposta;
	$username = $_POST["username"];
	$name = $_POST['name'];
	$password = $_POST["password"];
	$passwordtk = $_POST["passwordtk"];
	$cinsiyet = $_POST["cinsiyet"];
	
	$euzanti = substr($eposta, -10,10);
	$huzanti = substr($yeposta, -12,12);
	$truzanti = substr($yeeposta, -3,3);
	$mysql = "SELECT eposta, username FROM  kullanicilar";
	$mysqlsonuc = mysql_query($mysql);
	$durum0 = false;
	$durum1 = false;
	
	while ($kullanici = mysql_fetch_array($mysqlsonuc)){
		if ($kullanici['eposta'] == $eposta){
			$durum0 = true;
		}
		if($kullanici['username'] == $username){
			$durum1 = true;
		}
		
	}

	if(($eposta != "") and ($username != "")  and ($password != "") and ($passwordtk != "") and ($name != "") and ($cinsiyet != "Cinsiyet Seçiniz")){
		if($password == $passwordtk){
			if(strlen($password) > 7){
				if(strlen($username) > 4){
					if(($durum0) or ($durum1)){
						header('Location:durumwrong.php');
					}else{
						if(($euzanti == "@gmail.com") or ($huzanti == "@hotmail.com") or ($truzanti == ".tr")){
							mysql_query("INSERT INTO `kullanicilar`(eposta, username, name, password, passwordtk, Cinsiyet) 
								VALUES ('$eposta', '$username', '$name', '$password', '$passwordtk', '$cinsiyet');");
							header('Location: userkabulwrong.php');
						}else{
							header('Location:gecersizeposta.php');
						}
					}
				}else{
					header('Location:usernamewrong.php');
				}
			}else{
				header('Location:userparolauzunwrong.php');
			}
		}else{
			header('Location:userparolawrong.php');
		}
	}else{
		header('Location:userwrong.php');
	}
	

?>