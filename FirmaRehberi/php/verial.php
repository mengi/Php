<?php
	include('config.php');
	include('_header.php');
	$gelenveri = $_GET["veri"];
	$gelenid = $_GET["id"];
	mysql_query("SET NAMES UTF8");
	$sorgu = "SELECT firmaid, firmaad, yetkilisi, firmalogo FROM firma JOIN kentler ON firma.kentad = kentler.kentid 
				WHERE ((kentler.kentad = '$gelenveri') AND (firma.kentad ='$gelenid') AND (durum = 1));";
	$mysqlsonuc = mysql_query($sorgu);
	while($firma = mysql_fetch_array($mysqlsonuc)){
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
	
	mysql_query("SET NAMES UTF8");
	$sorgu = "SELECT firmaid, firmaad, yetkilisi, firmalogo FROM firmauser JOIN kentler ON firmauser.kentad = kentler.kentid 
				WHERE ((kentler.kentad = '$gelenveri') AND (firmauser.kentad ='$gelenid') AND (durum = 1));";
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
	/* sektore gore arama */
	mysql_query("SET NAMES UTF8");
	$sorguf = "SELECT firmaid, firmaad, yetkilisi, firmalogo FROM firmauser join sektor on firmauser.sektorad = sektor.sektorid 
				where((sektor.sektorad = '$gelenveri') and (firmauser.sektorad='$gelenid') and (durum = 1))";
	$mysqlsonucf = mysql_query($sorguf);
	while($firmauserf = mysql_fetch_array($mysqlsonucf)){
		echo '<div class="container" style = "position:relative;left:1.75in;">';
			echo	'<div class="row">';
			echo      '<div class="row">';
			echo      '<div class="span8">';
			echo        '<h4><strong>'.$firmauserf['firmaad'].'</strong></h4>';
			echo      '</div>';
			echo    '</div>';
			echo    '<div class="row">';
			echo     '<div class="span2">';
			echo       '<a class="thumbnail">';
			echo            '<img src="'.$firmauserf['firmalogo'].'"'.'width = "150" height = "150">';
			echo        '</a>';
			echo      '</div>';
			echo      '<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><h4>Firma Yetkili</h4></font>';
			echo	  '<p style = "position:relative;right: -0.20in;margin-top:0.005in;">'.$firmauserf['yetkilisi'].'</p>';
			echo    '</div>';
			echo    '<div class="row">';
			echo      '<div class="span8">';
			echo        '<p></p>';
			echo        '<p>';
			echo          '<i class="icon-search"></i> » <a href="goruntule.php?id='.$firmauserf['firmaid'].'&durums=1"><span class="label label-info">Görüntüle</span></a>'; 
			echo          '  | <i class="icon-envelope"></i> » <a href="goruntule.php?id='.$firmauserf['firmaid'].'&durums=1"><span class="label label-info">İletişim</span></a>';
			echo		  '  | <i class="icon-pencil"></i> » </i> <a href="goruntule.php?id='.$firmauserf['firmaid'].'&durums=1"><span class="label label-info">Hakkında</span></a>';
			echo        '</p>';
			echo      '</div>';
			echo    '</div>';
			echo  '</div>';
			echo'</div>';
			echo'<hr>';
	}
	
	mysql_query("SET NAMES UTF8");
	$sorgufs = "SELECT firmaid, firmaad, yetkilisi, firmalogo FROM firma join sektor on firma.sektorad = sektor.sektorid 
				where((sektor.sektorad = '$gelenveri') and (firma.sektorad='$gelenid') and (durum = 1))";
	$mysqlsonucfs = mysql_query($sorgufs);
	while($firmauserfs = mysql_fetch_array($mysqlsonucfs)){
		echo '<div class="container" style = "position:relative;left:1.75in;">';
			echo	'<div class="row">';
			echo      '<div class="row">';
			echo      '<div class="span8">';
			echo        '<h4><strong>'.$firmauserfs['firmaad'].'</strong></h4>';
			echo      '</div>';
			echo    '</div>';
			echo    '<div class="row">';
			echo     '<div class="span2">';
			echo       '<a class="thumbnail">';
			echo            '<img src="'.$firmauserfs['firmalogo'].'"'.'width = "150" height = "150">';
			echo        '</a>';
			echo      '</div>';
			echo      '<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><h4>Firma Yetkili</h4></font>';
			echo	  '<p style = "position:relative;right: -0.20in;margin-top:0.005in;">'.$firmauserfs['yetkilisi'].'</p>';
			echo    '</div>';
			echo    '<div class="row">';
			echo      '<div class="span8">';
			echo        '<p></p>';
			echo        '<p>';
			echo          '<i class="icon-search"></i> » <a href="goruntule.php?id='.$firmauserfs['firmaid'].'&durums=2"><span class="label label-info">Görüntüle</span></a>'; 
			echo          '  | <i class="icon-envelope"></i> » <a href="goruntule.php?id='.$firmauserfs['firmaid'].'&durums=2"><span class="label label-info">İletişim</span></a>';
			echo		  '  | <i class="icon-pencil"></i> » </i> <a href="goruntule.php?id='.$firmauserfs['firmaid'].'&durums=2"><span class="label label-info">Hakkında</span></a>';
			echo        '</p>';
			echo      '</div>';
			echo    '</div>';
			echo  '</div>';
			echo'</div>';
			echo'<hr>';
	}
?>