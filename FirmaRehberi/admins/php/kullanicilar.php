<?php 
include('config.php');
include('success.php');

?>

	
			<div class="span4 offset4 well" style ="position:relative;right: 2.85in;top:0.50in;width:12.40in">
			<div id="myTabContent" class="tab-content">
			<div class="tab-pane active in" id="home">
			<?php
			mysql_query("SET NAMES UTF8");
		
			$sorgu = "SELECT user_id, username, name, password, eposta, Cinsiyet FROM  kullanicilar ";
			$mysqlsorgu = mysql_query($sorgu);
			while($kullancilar = mysql_fetch_array($mysqlsorgu)){
				echo '<table class="table table-hover">
					
						
						<tr class="success"><td>'.'USER İD : '.$kullancilar['user_id'].'</td></tr>
						<tr class="success"><td>'.'E-POSTA : '.$kullancilar['eposta'].'</td></tr>
						<tr class="success"><td>'.'KULLANICI ADI : '.$kullancilar['username'].'</td></tr>
						<tr class="success"><td>'.'AD ve SOYAD : '.$kullancilar['name'].'</td></tr>
						<tr class="success"><td>'.'PAROLA : '.$kullancilar['password'].'</td></tr>
						<tr class="success"><td>'.'CİNSİYET : '.$kullancilar['Cinsiyet'].'</td></tr>
					
				</table>';
				
				}
			?>
			
			</div>
		</div>
	</div>
