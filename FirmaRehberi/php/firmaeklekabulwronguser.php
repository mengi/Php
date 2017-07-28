<?php 

	include("success.php");
	mysql_query("SET NAMES UTF8");
?>
<div class="container">
	<div class="row" style ="margin-top:0.25in;">
		
			
          	<div class="alert alert-info">
                <a class="close" data-dismiss="alert" href="#">×</a>Firmanız Eklenmiştir.
            </div>   
		
	</div>
</div>
    
<div class="container">
	<div class="row">
	

			<div class="span4 offset4 well" style ="position:relative;right: 0.25in;top:0.1in;height: 8.0in">
			
			<legend>Firmanızı Kaydediniz</legend>
			<form method="POST" action="firmaeklevuser.php" accept-charset="UTF-8" enctype="multipart/form-data">
			<input type="text" name="yetkili" placeholder="Yetkili Kişi"  style ="width:3.0in;"/>
			<input type="text" name="firmaad" placeholder="Firmanızın Adı"  style ="width:3.0in;"/>
			<input type="text" name="web" placeholder="Firmanızın Web Adresi"  style ="width:3.0in;"/>
		  
				
			<select  name="sektor" class="input-xlarge" style ="width:3.16in;">
					<?php
						mysql_query("SET NAMES UTF8");
						$result = "SELECT sektorid, sektorad FROM  sektor";
						$mysqlresult = mysql_query($result);
						while($sektor = mysql_fetch_array($mysqlresult)){
								echo '<option value ="'.$sektor['sektorid'].'">'.$sektor['sektorad'].'</option>';
						}
					?>
			</select>
			
			<select name="sehir" class="input-xlarge" style ="width:3.16in;">
					<?php
						mysql_query("SET NAMES UTF8");
						$result = "SELECT kentid, kentad FROM  kentler";
						$mysqlresult = mysql_query($result);
						while($sehir = mysql_fetch_array($mysqlresult)){
								echo '<option value ="'.$sehir['kentid'].'">'.$sehir['kentad'].'</option>';
						}
					?>
						
			</select>
			
			<select name="isletmetur" class="input-xlarge" style ="width:3.16in;">
			
					<?php
						mysql_query("SET NAMES UTF8");
						$result = "SELECT isletmeid, isletmetur FROM  isletmeler";
						$mysqlresult = mysql_query($result);
						while($isletme = mysql_fetch_array($mysqlresult)){
								echo '<option value ="'.$isletme['isletmeid'].'">'.$isletme['isletmetur'].'</option>';
						}
					?>
					
			</select>
		  <input type="text" name="tel" placeholder="Firmanızın Telefon Numarası" style ="width:3.0in;"/>
		  <input type="text" name="faks" placeholder="Firmanızın Faks Numarası" style ="width:3.0in;"/>
		  <input type="text" name="gsm" placeholder="Gsm-No" style ="width:3.0in;"/>
		
		  <font color = "#1b8bb4"><h6>Firma Logo</h6></font>
		  
		  <input type="file" name="file" id ="file" style ="position:relative;right: -0.85in;top:-0.35in;"><br>
		   <textarea name="adres"  placeholder="Firmanızın Adresini Yazınız" rows="5"style ="width:3.01in;"></textarea>
			
		
		  
		  <button type="submit" name="submit" class="btn btn-info btn-block">GÖNDER</button>
			</form>    
		</div>
	</div>
</div>

