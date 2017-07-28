<?php
	include('success.php');
	$durum = "durumf";
	mysql_query("SET NAMES UTF8");
?>



<div class="container-fluid" style = "margin-top:0.65in">
  <div class="row-fluid">
    <div class="span2">
     <ul class="nav nav-pills nav-stacked">
		<li><a href="bilduzenleu.php">Profil Düzenle</a></li>
		<li class="active"><a href="bilduzenlef.php">Firma Düzenle</a></li>
		<li><a href="bilduzenles.php"> Şifre Değiştir</a></li>
	
	
	</ul>

    </div>
		<div class="span10">
			<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Gerekli Alanları Doldurunuz !
            </div>
			<div class="well" style = "height: 10.0in">
	
			<div id="myTabContent" class="tab-content">
			<div class="tab-pane active in" id="home">
				<form method = "post" action = 'update.php?gelen=<?php echo $durum;?>&ad=<?php echo $username?>' enctype="multipart/form-data"> 
					<label>Firma Yetkili </label>
					<input type="text" name = "yetki"  value ="<?php echo $yetki; ?>" class="input-xlarge">
					<label>Firma Ad </label>
					<input type="text" name="firmaad" value = <?php echo $firmaad;?> class="input-xlarge" />
					<label>Firma Web</label>
					<input type="text" name="web" value = <?php echo $firmaweb;?> class="input-xlarge" />
		  
		  
					<label>Sektörler </label>
					<select  name="sektor" class="input-xlarge" style ="width:3.0in;">
								<?php
									mysql_query("set character set utf8");	
									$result = "SELECT sektorid, sektorad FROM  sektor";
									$mysqlresult = mysql_query($result);
									while($sektor = mysql_fetch_array($mysqlresult)){
											if($sektorad == $sektor['sektorid']){
												$sektoridtut = $sektor['sektorid'];
												$sektoradtut = $sektor['sektorad'];
												
											}
											
										}
									echo '<option value ="'.$sektoridtut.'">'.$sektoradtut.'</option>';
									
									$sorgu = "SELECT sektorid, sektorad FROM  sektor";
									$mysqlsorgu = mysql_query($sorgu);
									while($sektorler = mysql_fetch_array($mysqlsorgu)){
									
										if($sektoridtut != $sektorler['sektorid']){
											echo '<option value ="'.$sektorler['sektorid'].'">'.$sektorler['sektorad'].'</option>';
										}
									}
									?>
					</select>
			
					<label>Şehirler </label>
					<select name="sehir" class="input-xlarge" style ="width:3.0in;">
									<?php
										mysql_query("SET NAMES UTF8");
										$result = "SELECT kentid, kentad FROM  kentler";
										$mysqlresult = mysql_query($result);
										while($sehir = mysql_fetch_array($mysqlresult)){
												if($kentad == $sehir['kentid']){
													$kentidtut = $sehir['kentid'];
													$kentadtut = $sehir['kentad'];
												}
										}
										echo '<option value ="'.$kentidtut.'">'.$kentadtut.'</option>';
										
										$sorgu = "SELECT kentid, kentad FROM  kentler";
										$mysqlsorgu = mysql_query($sorgu);
										while($sehirler = mysql_fetch_array($mysqlsorgu)){
											if($kentidtut != $sehirler['kentid']){
												echo '<option value ="'.$sehirler['kentid'].'">'.$sehirler['kentad'].'</option>';
											}
										}
									?>
							
					</select>
					<label>İşletme Türü</label>
					<select name="isletmetur" class="input-xlarge" style ="width:3.0in;">
			
									<?php
										mysql_query("SET NAMES UTF8");
										$result = "SELECT isletmeid, isletmetur FROM  isletmeler";
										$mysqlresult = mysql_query($result);
										while($isletme = mysql_fetch_array($mysqlresult)){
											if($isletmead == $isletme['isletmeid']){
												$isletmeidtut = $isletme['isletmeid'];
												$isletmeturtut =  $isletme['isletmetur'];
											}
										}
										echo '<option value ="'.$isletmeidtut.'">'.$isletmeturtut.'</option>';
								
										$sorgu = "SELECT isletmeid, isletmetur FROM  isletmeler";
										$mysqlsorgu = mysql_query($sorgu);
										while($isletmeler = mysql_fetch_array($mysqlsorgu)){
											if($isletmeidtut != $isletmeler['isletmeid']){
												echo '<option value ="'.$isletmeler['isletmeid'].'">'.$isletmeler['isletmetur'].'</option>';
											}
										}
								
									?>
					</select>
					<label>Firma Telefon Numara </label>
					<input type="text" name="tel" value = <?php echo $firmatel;?> class="input-xlarge"/>
					<label>Firma Faks Numara </label>
					<input type="text" name="faks" value = <?php echo $firmafaks;?> class="input-xlarge"/>
					<label>Kişisel Gsm-No </label>
					<input type="text" name="gsm" value = <?php echo $gsm;?> class="input-xlarge"/>
					<font color = "#1b8bb4"><h6>Firma Logo</h6></font>
		  
					<input type="file" name="file" id ="file" style ="position:relative;right: -0.85in;top:-0.35in;"><br>
					<label>Firma Adres </label>
					<textarea name="adres"  placeholder=<?php echo $firmaadres;?> rows="5"style ="width:3.01in;"></textarea>
	
					<hr>
					<div>
						<button class="btn btn-primary">GÖNDER</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
  </div>
</div>