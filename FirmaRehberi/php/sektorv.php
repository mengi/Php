<?php
	
	include("config.php");
	include("_header.php");
	$gelenid = $_GET['sektorid'];
	mysql_query("SET NAMES UTF8");
	/* üye olan kişilerin firmalarını getirir*/
	$sorgu = "SELECT firmaid, firmaad, yetkilisi, firmalogo FROM  firmauser WHERE ((durum = 1) and (sektorad = '$gelenid'));";
	$mysqlsonuc = mysql_query($sorgu);
	while($firmauser = mysql_fetch_array($mysqlsonuc)){
			echo '<div class="container" style = "position:relative;left:1.75in;">';
			echo	'<div class="row">';
			echo      '<div class="row">';
			echo      '<div class="span8">';
			echo        '<h4><strong>'.$firmauser['firmaad'].'</strong></h4>';
			echo      '</div>';
			echo    '</div>';
			echo    '<div class="row">';
			echo     '<div class="span2">';
			echo       '<a class="thumbnail">';
			echo            '<img src="'.$firmauser['firmalogo'].'"'.'width = "150" height = "150">';
			echo        '</a>';
			echo      '</div>';
			echo      '<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><h4>Firma Yetkili</h4></font>';
			echo	  '<p style = "position:relative;right: -0.20in;margin-top:0.005in;">'.$firmauser['yetkilisi'].'</p>';
			echo    '</div>';
			echo    '<div class="row">';
			echo      '<div class="span8">';
			echo        '<p></p>';
			echo        '<p>';
			echo          '<i class="icon-search"></i> » <a href="goruntule.php?id='.$firmauser['firmaid'].'&durums=1"><span class="label label-info">Görüntüle</span></a>'; 
			echo          '  | <i class="icon-envelope"></i> » <a href="goruntule.php?id='.$firmauser['firmaid'].'&durums=1"><span class="label label-info">İletişim</span></a>';
			echo		  '  | <i class="icon-pencil"></i> » </i> <a href="goruntule.php?id='.$firmauser['firmaid'].'&durums=1"><span class="label label-info">Hakkında</span></a>';
			echo        '</p>';
			echo      '</div>';
			echo    '</div>';
			echo  '</div>';
			echo'</div>';
			echo'<hr>';
	}
	
	/*uyesiz firmaları getirir*/
	mysql_query("SET NAMES UTF8");
	$result = "SELECT firmaid, firmaad, yetkilisi, firmalogo FROM  firma WHERE ((durum = 1) and (sektorad = '$gelenid'));";
	$mysqlresult = mysql_query($result);
	while($firma = mysql_fetch_array($mysqlresult)){
			echo '<div class="container" style = "position:relative;left:1.75in;">';
			echo	'<div class="row">';
			echo      '<div class="row">';
			echo      '<div class="span8">';
			echo        '<h4><strong>'.$firma['firmaad'].'</strong></h4>';
			echo      '</div>';
			echo    '</div>';
			echo    '<div class="row">';
			echo     '<div class="span2">';
			echo       '<a class="thumbnail">';
			echo            '<img src="'.$firma['firmalogo'].'"'.'width = "150" height = "150">';
			echo        '</a>';
			echo      '</div>';
			echo      '<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><h4>Firma Yetkili</h4></font>';
			echo	  '<p style = "position:relative;right: -0.20in;margin-top:0.005in;">'.$firma['yetkilisi'].'</p>';
			echo    '</div>';
			echo    '<div class="row">';
			echo      '<div class="span8">';
			echo        '<p></p>';
			echo        '<p>';
			echo          '<i class="icon-search"></i> » <a href="goruntule.php?id='.$firma['firmaid'].'&durums=2"><span class="label label-info">Görüntüle</span></a>'; 
			echo          '  | <i class="icon-envelope"></i> » <a href="goruntule.php?id='.$firma['firmaid'].'&durums=2"><span class="label label-info">İletişim</span></a>';
			echo		  '  | <i class="icon-pencil"></i> » </i> <a href="goruntule.php?id='.$firma['firmaid'].'&durums=2"><span class="label label-info">Hakkında</span></a>';
			echo        '</p>';
			echo      '</div>';
			echo    '</div>';
			echo  '</div>';
			echo'</div>';
			echo'<hr>';
	}
?>