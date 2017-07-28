<?php
include('config.php');
$name = $_GET['gelen'];
$username = $_GET['ad'];
mysql_query("SET NAMES UTF8");
if($name == "durumf"){
	$result = "SELECT firmaid, firmaadres, firmalogo FROM firmauser JOIN kullanicilar ON firmauser.user_id = kullanicilar.user_id WHERE kullanicilar.username =  '$username'";
	$mysqlresult = mysql_query($result);
	while($firmalar = mysql_fetch_array($mysqlresult)){
		$firmaadres = $firmalar['firmaadres'];
		$firmalogo = $firmalar['firmalogo'];
		$firmaid = $firmalar['firmaid'];
	}
	
	
	$gelenyetkili = $_POST["yetki"];
	$gelenfirmaad = $_POST["firmaad"];
	$gelenweb = $_POST["web"];
	$gelensektor =  $_POST["sektor"];
	$gelensehir = $_POST["sehir"];
	$gelenisletmetur = $_POST["isletmetur"];
	$gelentel = $_POST["tel"];
	$gelenfaks = $_POST["faks"];
	$gelenadres = $_POST["adres"];
	$gelengsm = $_POST['gsm'];
	$dosya_adi = $_FILES['file']['name'];
	$durum = 0;
	$uret = "Armut";
	

	$sayi_uret = rand(0,5);
	$sayi_tut = rand(1,10000);
	$sayitut = (string) $sayi_tut;
	$uzanti = substr($dosya_adi, -4,4);
	$yeni_ad = (string)$uret.$sayitut.$uzanti;
	$yeni_adi ="../logo/".$yeni_ad;
	

	
	
	if($gelenadres != ""){
		$adrestut = $gelenadres;
	}else{
		$adrestut = $firmaadres;
	}
	
	if($dosya_adi != ""){
		$logotut = $yeni_adi;
	}else{
		$logotut = $firmalogo;
	}
	
	

	if(($gelenyetkili != "") and ($gelenfirmaad != "") and ($gelenweb != "") and ($gelensektor != "") and ($gelensehir != "") 
		and ($gelenisletmetur != "") and ($gelentel != "") and ($adrestut != "") and ($gelenfaks != "")){
			if((strlen($gelenfaks) != 11) or(strlen($gelentel) != 11) or (strlen($gelengsm) != 11)){
					header('Location:bilduzenlefsayi.php');
			}else{
					move_uploaded_file($_FILES["file"]["tmp_name"],$logotut);
					$result =mysql_query( "UPDATE `firmauser` SET  sektorad ='$gelensektor', kentad ='$gelensehir', isletmead = '$gelenisletmetur',
					yetkilisi ='$gelenyetkili', firmaad ='$gelenfirmaad', firmaweb ='$gelenweb',firmatel ='$gelentel', firmafaks ='$gelenfaks', 
					gsm ='$gelengsm', firmaadres= '$adrestut', firmalogo ='$logotut' WHERE firmaid = '$firmaid'");
					if($result){
						header('Location:bilfirmaguncel.php');
					}else{
						header('Location:bilfirmaguncelwrong.php');
					}
			}
	}else{
		header('Location:doldurf.php');
	}
	
}else{
	if($name == "durumu"){
		
		$eposta = $_POST['email'];
		$adsoyad = $_POST['adsoyad'];
		$cinsiyet = $_POST['cinsiyet'];
		
		$euzanti = substr($eposta, -10,10);
		$huzanti = substr($eposta, -12,12);
		$truzanti = substr($eposta, -3,3);
		
		if (($eposta != "") and ($adsoyad != "")){
			if(($euzanti == "@gmail.com") or ($huzanti == "@hotmail.com") or ($truzanti == ".tr")){
				$result = mysql_query("UPDATE kullanicilar SET eposta ='$eposta', name ='$adsoyad', Cinsiyet ='$cinsiyet' WHERE username = '$username';");
				if($result){
					header('Location:guncelwrongu.php');
				}else{
					header('Location:guncelenemediwrongu.php');
				}
			}else{
				header('Location:mailwrong.php');
			}
		}else{
			header('Location:dolduru.php');
		}
	}else{
		
		$esifre = $_POST['esifre'];
		$ysifre = $_POST['ysifre'];
		$ysifretk = $_POST['yisifretk'];
		
		$mysqlsonuc = mysql_query("SELECT password FROM  kullanicilar WHERE username =  '$username';");
		while($kullanici = mysql_fetch_array($mysqlsonuc)){
			$sifre = $kullanici['password'];
		}
		
		if(($ysifre != "") and ($ysifretk != "")){
			if(strlen($ysifre) > 7){
				if(($esifre == $sifre) and ($ysifre == $ysifretk)){
						$result = mysql_query("UPDATE kullanicilar SET password ='$ysifre', passwordtk ='$ysifretk' WHERE username = '$username';");
						if($result){
							header('Location:guncelwrong.php');
						}else{
							header('Location:guncelenemediwrong.php');
						}
					}else{
						header('Location:doldurs.php');
					}
				}else{
					header('Location:dparola.php');
				}
			}else{
		
				header('Location:doldurs.php');
			}
		}	
}
?>