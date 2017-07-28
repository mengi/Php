<?php
	
	include("config.php");

	$gelenyetkili = $_POST["yetkili"];
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
	 
	$mysql = "SELECT firmaad, yetkilisi, firmaweb FROM firma";
	$mysqlsonuc = mysql_query($mysql);
	$durum0 = false;
	$durum1 = false;
	$durum2 = false;
	while ($kullanici = mysql_fetch_array($mysqlsonuc)){
		if ($kullanici['firmaad'] == $gelenfirmaad){
			$durum0 = true;
		}
		if($kullanici['yetkilisi'] == $gelenyetkili){
			$durum1 = true;
		}
		if($kullanici['firmaweb'] == $gelenweb){
			$durum2 = true;
		}
		
	}
	
	if(($gelenyetkili != "") and ($gelenfirmaad != "") and ($gelenweb != "") and ($gelensektor != "") and ($gelensehir != "") 
		and ($gelenisletmetur != "") and ($gelentel != "") and ($gelenadres != "")){
		if((strlen($gelentel) != 11) or (strlen($gelenfaks) != 11) or (strlen($gelengsm) != 11)){
			header('Location:firmaekletfg.php');
		}else{
			if(($durum0) or ($durum1) or ($durum2)){
						header('Location:firmaekledurum.php');
			}else{
				
					move_uploaded_file($_FILES["file"]["tmp_name"],$yeni_adi);
					mysql_query("INSERT INTO firma(sektorad, kentad, isletmead, yetkilisi, firmaad,
						firmaweb, firmatel, firmafaks, gsm, firmaadres, firmalogo, durum)
						VALUES ('$gelensektor', '$gelensehir', '$gelenisletmetur', '$gelenyetkili', '$gelenfirmaad',
								'$gelenweb', '$gelentel', '$gelenfaks', '$gelengsm','$gelenadres','$yeni_adi','$durum');");
						header('Location:firmaeklekabulwrong.php');
				
			}
		}	
	}else{
		header('Location:firmaeklewrong.php');
	}


?>