<?php

	include('_header.php');
	include('config.php');
	$gelenid =$_GET['id'];
	$gelendurums = $_GET['durums'];
	if($gelendurums == "1"){
		mysql_query("SET NAMES UTF8");
		$sorgu = "SELECT sektorad, kentad, isletmead, yetkilisi, firmaad, firmaweb, firmatel,
			firmafaks, gsm, firmaadres, firmalogo FROM  `firmauser` WHERE firmaid ='$gelenid'";
		$sorgusonuc = mysql_query($sorgu);
		while($sorgular = mysql_fetch_array($sorgusonuc)){
			$yetkilisi = $sorgular['yetkilisi'];
			$sektorid = $sorgular['sektorad'];
			$kentid = $sorgular['kentad'];
			$isletmeid = $sorgular['isletmead'];
			$firmaad = $sorgular['firmaad'];
			$firmaweb = $sorgular['firmaweb'];
			$firmatel = $sorgular['firmatel'];
			$firmafaks = $sorgular['firmafaks'];
			$gsm = $sorgular['gsm'];
			$firmalogo = $sorgular['firmalogo'];
			$firmaadres = $sorgular['firmaadres'];
		}
	}
	
	if($gelendurums == "2"){
		mysql_query("SET NAMES UTF8");
		$sorguf = "SELECT sektorad, kentad, isletmead, yetkilisi, firmaad, firmaweb, firmatel,
			firmafaks, gsm, firmaadres, firmalogo FROM  firma WHERE firmaid ='$gelenid'";
		$mysqlsorguf = mysql_query($sorguf);
		while($sorgularf = mysql_fetch_array($mysqlsorguf)){
			$yetkilisi = $sorgularf['yetkilisi'];
			$sektorid = $sorgularf['sektorad'];
			$kentid = $sorgularf['kentad'];
			$isletmeid = $sorgularf['isletmead'];
			$firmaad = $sorgularf['firmaad'];
			$firmaweb = $sorgularf['firmaweb'];
			$firmatel = $sorgularf['firmatel'];
			$firmafaks = $sorgularf['firmafaks'];
			$gsm = $sorgularf['gsm'];
			$firmalogo = $sorgularf['firmalogo'];
			$firmaadres = $sorgularf['firmaadres'];
		}
	
	}
	
	if($kentid != ""){
		$result = "SELECT kentad FROM kentler WHERE kentid = '$kentid'";
		$mysqlresult = mysql_query($result);
		while($sorguk = mysql_fetch_array($mysqlresult)){
			$kentad = $sorguk['kentad'];
		}
	}
		
	if($sektorid != ""){
		$results = "SELECT sektorad FROM sektor WHERE sektorid = '$sektorid'";
		$mysqlresults = mysql_query($results);
		while($sorgus = mysql_fetch_array($mysqlresults)){
			$sektorad = $sorgus['sektorad'];
		}
	}
		
	if($isletmeid != ""){
		$resulti = "SELECT isletmetur FROM isletmeler WHERE isletmeid = '$isletmeid'";
		$mysqlresulti = mysql_query($resulti);
		while($sorgui = mysql_fetch_array($mysqlresulti)){
			$isletmead = $sorgui['isletmetur'];
		}			
	}
	/*if(($isletmeid == "") and ($kentid != "") and ($sektorid != "")){
		echo '';
	
	}*/
?>

<div class="container-fluid" style = "margin-top:0.25in;">
  <div class="row-fluid">
    <div class="span2">
     <ul class="nav nav-pills nav-stacked">
		<li><div class="row">
				<div class="col-lg-3">
					<a href="#" class="thumbnail">
						<img src="<?php echo $firmalogo;?>" alt="">
					</a>
				</div>
			</div>
			<hr>
		</li>
			
		<li>
			<font style = "position:relative;right: -0.24in;margin-top:-0.15in;"  color = "#1b8bb4"><label>Telefon Numarası </label></font>
				<h5  style = "position:relative;right: -0.25in;" color = "#1b8bb4"><?php echo $firmatel; ?><h5>
			<hr>
		</li>

	</ul>

    </div>
		<div class="span10" >  
			<div class="well" style = "height: 5.00in">
			<div id="myTabContent" class="tab-content">
			<div class="tab-pane active in" id="home">
				<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><label>Firma Yetkili » </label></font>
					<h5  style = "position:relative;right: -1.15in;margin-top:-0.25in;" color = "#1b8bb4"><?php echo $yetkilisi; ?></h5>
				<hr>
				<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><label>Adres » </label></font>
					<h5  style = "position:relative;right: -1.15in;margin-top:-0.25in;" color = "#1b8bb4"><?php echo $firmaadres; ?></h5>
				<hr>
				<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><label>Gsm-No » </label></font>
					<h5  style = "position:relative;right: -1.15in;margin-top:-0.25in;" color = "#1b8bb4"><?php echo $gsm; ?></h5>
				<hr>
				<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><label>Faks » </label></font>
					<h5  style = "position:relative;right: -1.15in;margin-top:-0.25in;" color = "#1b8bb4"><?php echo $firmafaks; ?></h5>
				<hr>
				
				<font style = style = "position:relative;right: -0.1in;margin-top:-0.05in;"  color = "#1b8bb4"><label>Web Adresi </label></font>
					<h5  style = "position:relative;right: -1.15in;margin-top:-0.25in;" color = "#1b8bb4"><?php echo $firmaweb; ?><h5>
				<hr>
				<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><label>Şehir » </label></font>
					<h5  style = "position:relative;right: -1.15in;margin-top:-0.25in;" color = "#1b8bb4"><?php echo $kentad; ?></h5>
				<hr>
				<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><label>İşletme Türü » </label></font>
					<h5  style = "position:relative;right: -1.15in;margin-top:-0.25in;" color = "#1b8bb4"><?php echo $isletmead; ?></h5>
				<hr>
				<font style = "position:relative;right: -0.1in;margin-top:-0.05in;" color = "#1b8bb4"><label>Sektör »</label></font>
					<h5  style = "position:relative;right: -1.15in;margin-top:-0.25in;" color = "#1b8bb4"><?php echo $sektorad; ?></h5>
				<hr>
			</div>
			</div>
		</div>
	</div>
  </div>
</div>